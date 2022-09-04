<?php

namespace Drupal\paragraphs_view_layout\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Returns responses for paragraphs view layout routes.
 */
class ParagraphsViewLayoutController extends ControllerBase {

  /**
   * Builds the response.
   */
  public function build() {
    $build['content'] = [
      '#type' => 'item',
      '#markup' => $this->t('It works!')
    ];
    //
    return $build;
  }

}
