<?php

namespace App\Controllers;

use Psr\Container\ContainerInterface;

class IdeaController
{
   protected $container;

   // constructor receives container instance
   public function __construct(ContainerInterface $container) {
       $this->container = $container;
   }

   public function postIdea($request, $response, $args) {
        // your code
        // to access items in the container... $this->container->get('');
        return $response;
   }

   public function getRandomIdea($request, $response, $args) {
        // your code
        // to access items in the container... $this->container->get('');
        return $response->write('random idea');
   }
}
