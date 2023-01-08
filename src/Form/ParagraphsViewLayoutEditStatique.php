<?php

namespace Drupal\generate_style_theme\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Stephane888\Debug\debugLog;
use Drupal\Core\Plugin\Context\EntityContext;
use Drupal\Core\Form\SubformState;
use Drupal\Core\Plugin\ContextAwarePluginInterface;
use Drupal\layout_builder\Section;
use Drupal\Core\Layout\LayoutInterface;
use Drupal\Core\Plugin\PluginWithFormsInterface;
use Drupal\Core\Plugin\PluginFormInterface;

/**
 * Class LayoutEnteteForm.
 * /layout_builder/configure/section/defaults/block_content.layout_entete_m1.default/1/formatage_models_header1
 * //
 * /layout_builder/configure/section/{defaults}/{block_content.layout_entete_m1.default}/{1}/{formatage_models_header1}
 * /layout_builder/configure/section/defaults/block_content.layout_entete_m1.default/0
 * /layout_builder/configure/section/{section_storage_type}/{section_storage}/{delta}/{plugin_id}
 * // **
 * section_storage_type = defaults
 * section_storage = block_content.layout_entete_m1.default
 * delta = 1
 * plugin_id = formatage_models_header1
 */
// class ParagraphsViewLayoutEditStatique extends FormBase {

//   /**
//    *
//    * {@inheritdoc}
//    */
//   public function getFormId() {
//     return 'layout_entete_form_v2';
//   }

// }