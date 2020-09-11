<?php

namespace Drupal\block_moduled8\Plugin\Block;


use Drupal\Core\Block\BlockBase;
/**
 * Provides a 'Module' Block.
 *
 * @Block(
 *   id = "module_block",
 *   admin_label = @Translation("Module block"),
 *   category = @Translation("First Module Block Drupal 8"),
 * )
 */

class ModuleBlockd8 extends BlockBase {

    /**
     * {@inheritdoc}
     */
    public function build() {
        return \Drupal::formBuilder()->getForm('Drupal\block_moduled8\Form\SimpleForm');
    }

}