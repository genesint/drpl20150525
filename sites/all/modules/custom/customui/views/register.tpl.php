<?php
$role = empty($_GET['role']) ? "" : $_GET['role'];
$elements = drupal_get_form("user_register_form");
$elements['role'] = array(
    '#name' => 'role',
    '#type' => 'hidden',
    '#value' => $role,
);
$form = drupal_render($elements);
echo $form;
?>