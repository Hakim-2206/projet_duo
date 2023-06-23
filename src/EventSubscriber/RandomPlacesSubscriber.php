<?php

namespace App\EventSubscriber;

use Twig\Environment;
use App\Repository\PlaceRepository;
use Symfony\Component\HttpKernel\Event\ControllerEvent;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

class RandomPlacesSubscriber implements EventSubscriberInterface
{
    private $twig;
    private $placeRepository;

    public function __construct(Environment $twig, PlaceRepository $placeRepository)
    {
        $this->twig = $twig;
        $this->placeRepository = $placeRepository;
    }

    public function onControllerEvent(ControllerEvent $event): void
    {
        $places = $this->placeRepository->findAll();
        $randomPlaces = [];

        for ($i = 0; $i < 2; $i++) {
            array_push($randomPlaces, $places[rand( 0,(count($places)-1) )]);
        }

        $this->twig->addGlobal('randomPlaces', $randomPlaces);
        
    }

    public static function getSubscribedEvents(): array
    {
        return [
            ControllerEvent::class => 'onControllerEvent',
        ];
    }
}
