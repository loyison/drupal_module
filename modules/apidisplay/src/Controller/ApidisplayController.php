<?php

namespace Drupal\apidisplay\src\Controller;

  use Symfony\Component\HttpFoundation\Request;


  class ApidisplayController  {

    public function index(Request $request){

      $client = new \GuzzleHttp\Client;
      $response = $client->request('GET', 'https://github.com/loyison');
      $data = json_decode($response->getBody()->getContents(), true);

      return array(


      );

//was testing the controller helloworld
      //      return array(
//        '#title' => 'Hello World!',
//        '#markup' => 'Here is some content.',
//      );
    }

  }