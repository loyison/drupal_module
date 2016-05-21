<?php

  namespace Drupal\apidisplay\Controller;

  use Symfony\Component\HttpFoundation\Request;

  class ApidisplayController {

    public function index(Request $request) {

      $client   = new \GuzzleHttp\Client;
      $response = $client->request('GET', 'https://github.com/loyison');

      // get the github json fields to display

      $data = json_decode($response->getBody()->getContents(), TRUE);
      return [
        'avatar_url' => $data['avatar_url'],
        'name'       => $data['name'],
        'login'      => $data['login'],
        'details'    => [
          'company'   => $data['company'],
          'location'  => $data['location'],
          'joined_on' => 'Joined on ' . (new \DateTime($data['created_at']))->format('d m Y'),
        ],
      ];

      //was testing the controller helloworld
      //      return array(
      //        '#title' => 'Hello World!',
      //        '#markup' => 'Here is some content.',
      //      );

    }

  }
