<?php
/**
 * @file
 * Block file for orgchart module.
 */

/**
 * Provides a 'orgchart' Block
 *
 * @Block(
 *   id = "orgchart",
 *   admin_label = @Translation("orgchart"),
 * )
 */

namespace Drupal\orgchart\Plugin\Block;

use Drupal\Core\Block\BlockBase;

class Orgchart extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {

 
    return array(
      '#theme' => 'orgchart_block',
      '#attached' => array(
        'library' => array(
          'orgchart/orgchart',
        ),
      ),
    );
  }
}
