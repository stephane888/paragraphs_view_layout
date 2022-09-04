<?php

namespace Drupal\paragraphs_view_layout\Controller;

use Drupal\Core\Controller\ControllerBase;
use Drupal\Core\Entity\Controller\EntityViewController;

/**
 * Returns responses for paragraphs view layout routes.
 */
class ParagraphsEditLayoutController extends EntityViewController {

  /**
   * Builds the response.
   */
  public function build($paragraph) {
    // dump($paragraph);
    $build['content'] = [
      '#type' => 'item',
      '#markup' => ' It works! '
    ];
    return $build;
  }

  //
}
