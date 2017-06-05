<?php

namespace Drupal\hello_world\Controller;

use Drupal\Core\Controller\ControllerBase;
use Symfony\Component\HttpFoundation\Request;
use Drupal\Component\Utility\Html ;

class HelloController extends ControllerBase {
    public function content(Request $request) {
        $type = node_type_load("offene_stellen"); // replace this with the node type in which we need to display the form for
        $node = $this->entityManager()->getStorage('node')->create(array(
          'type' => $type->id(),
        ));
        $node_create_form = $this->entityFormBuilder()->getForm($node);

        return array(
            '#type' => 'markup',
            '#markup' => render($node_create_form),
        );
    }

}
