<?php
module_load_include('inc', 'node', 'node.pages');
global $user;
$node = (object) array(
    'uid' => $user->uid,
    'name' => (isset($user->name) ? $user->name : ''),
    'type' => 'listing',
    'language' => LANGUAGE_NONE,
);

$nid=empty($_GET['nid'])?"":$_GET['nid'];
if($nid!=""){
    $node=node_load($nid);
}
$form = drupal_get_form('listing' . '_node_form', $node);
$form["title"]['#access'] = 0;
$form["field_listing_location"]['#access'] = 0;
$form["field_address"]['#access'] = 0;
$form["body"]['#access'] = 0;
$form['actions']["preview"]['#access'] = 0;
?>
<div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-6">
        <?php print drupal_render($form); ?>
    </div>
    <div class="col-md-4"></div>
</div>