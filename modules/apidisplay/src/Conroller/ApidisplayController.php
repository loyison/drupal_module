<?php

namespace Drupal\apidisplay\Contoller;

  use Symfony\Component\HttpFoundation\Request;

  class ApidisplayController {

    public function index(Request $request){

  $client = new \GuzzleHttp\Client;
  $response = $client->request('GET', 'https://github.com/loyison');
      $data = json_decode($response->getBody()->getContents(), true);



//was testing the controller helloworld
      //      return array(
//        '#title' => 'Hello World!',
//        '#markup' => 'Here is some content.',
//      );
    }

  }