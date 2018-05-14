<?php

namespace App\Controllers;

use Psr\Container\ContainerInterface;
use DateTime;

class IdeaController
{

    // ToDo: auth middleware

   protected $container;
   protected $db;

   // constructor receives container instance
   public function __construct(ContainerInterface $container) {
       $this->container = $container;
       $this->db = $this->container->get('db');

   }

    /**
     * post new idea to the database
     *
     * @param $request
     * @param $response
     * @param $args
     * @return mixed
     */
   public function postIdea($request, $response, $args) {

//       echo ($request);

       return $response->withStatus(201)
           ->write('Insertion successfull');

       /*
        // get query params
       $description = $request->getQueryParam('description');
       $user_id = $request->getQueryParam('user_id');

       // insert idea
       if ($description && $user_id) {
           $this->db->table('ideas')->insert(
               [
                   'description' => $description,
                   'user_id' => $user_id,
                   'created_at' => new DateTime(),
                   'updated_at' => new DateTime()
               ]
           );

           return $response->withStatus(201)
               ->write('Insertion successfull');

       } else {
           return $response->withStatus(400)
               ->write('Parameters missing');
       }

       */

   }

    /**
     * get random idea from the database
     *
     * @param $request
     * @param $response
     * @param $args
     * @return mixed
     */
   public function getRandomIdea($request, $response, $args) {

       // request params
       $slack_token = $request->getQueryParam('token');
       $slack_user_id = $request->getQueryParam('user_id');

       // check slack token
       if(strcmp($slack_token, getenv('SLACK_TOKEN')) == 0) {

           // get a random idea
           $randomIdea = $this->db->table('ideas')->inRandomOrder()->first();

           if($randomIdea) {
               return $response->withStatus(200)
                   ->withHeader('Content-Type', 'application/json')
                   ->write($randomIdea->description);

           } else {
               throw new PDOException('No ideas found');
           }

       } else {
           return $response->withStatus(401)
               ->write('Unauthorized Request');
       }

   }
}
