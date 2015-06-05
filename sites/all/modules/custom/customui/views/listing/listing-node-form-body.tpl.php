<?php
module_load_include('inc', 'node', 'node.pages');
global $user;
$nid = empty($_GET['nid']) ? "" : $_GET['nid'];
$node = node_load($nid);
$form = drupal_get_form('listing' . '_node_form', $node);

$form["title"]['#access'] = 0;
$form["field_address"]['#access'] = 0;
$form["field_listing_location"]['#access'] = 0;
$form["body"]['#access'] = 1;
$form['actions']["preview"]['#access'] = 0;
print drupal_render($form);
?>


