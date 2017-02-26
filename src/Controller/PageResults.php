<?php

namespace Drupal\fizruk\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Controller routines for page example routes.
 */
class PageResults extends ControllerBase {

  /**
   * Page.
   */
  public function page() {
    $output = [
      '#markup' => '<p>MyPage</p>',
    ];
    return $output;
  }

}
