<?php
require 'vendor/autoload.php';

use MyAwesomeNamespace\Core\Page;

try {
	$page = new Page();
	$text = $page->someMethod();
} catch(Exception $e) {
	echo 'Ocorreu um erro: '.$e->getMessage();
}
echo '<p>'.$text.'</p>';
