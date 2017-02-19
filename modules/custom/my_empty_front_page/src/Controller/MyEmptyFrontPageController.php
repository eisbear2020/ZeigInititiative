<?php
namespace Drupal\my_empty_front_page\Controller;

use Drupal\Core\Controller\ControllerBase;

class MyEmptyFrontPageController extends ControllerBase {
	public function emptyContent() {
		return array('#markup' => '');
	}
}
