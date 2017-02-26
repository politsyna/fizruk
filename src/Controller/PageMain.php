<?php

namespace Drupal\fizruk\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Controller routines for page example routes.
 */
class PageMain extends ControllerBase {

  /**
   * Page.
   */
  public function page() {
    $output = [
      'mssg' => [
        '#type' => 'markup',
        '#markup' => 'R: <a href="/fizruk/results">/fizruk/results</a>',
      ],
      'tpl' => [
        '#theme' => 'fizruk-tpl',
        '#data' => 'asdfasdf',
      ],
    ];

    return $output;
  }

}
