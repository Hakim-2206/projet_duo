<?php

namespace App\Controller;

use App\Entity\Place;
use App\Repository\PlaceRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class FrontController extends AbstractController
{
    #[Route('/', name: 'app_front')]
    public function index(PlaceRepository $placeRepository): Response
    {
        return $this->render('front/index.html.twig', [
            'places'=> $placeRepository->findBy([],['createdAt'=>'DESC'])
        ]);
    }

    #[Route('/view/{slug}', name: 'app_view')]
    public function placeView(Place $place=null): Response
    {
        if($place==null)
            throw new NotFoundHttpException();

        return $this->render('front/view.html.twig', [
            'place' => $place
        ]);
    }
}
