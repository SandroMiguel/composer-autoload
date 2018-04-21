<?php
/**
 * File inside a folder.
 */

require '../vendor/autoload.php';

use MyAwesomeNamespace\Core\Page;

try {
	$page = new Page();
	$text = $page->someMethod();
} catch(Exception $e) {
	echo 'Ocorreu um erro: '.$e->getMessage();
}
echo '<p>File inside a folder.</p>';
echo '<p>'.$text.'</p>';

