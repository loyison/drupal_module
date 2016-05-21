<?php

namespace Drupal\apidisplay\Contoller;

  class ApidisplayController {

    public function index(){

      return array(
        '#title' => 'Hello World!',
        '#markup' => 'Here is some content.',
      );
    }

  }