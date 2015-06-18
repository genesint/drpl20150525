<?php

$nid = empty($_GET['nid']) ? "" : $_GET['nid'];
$node = node_load($nid);
$content = empty($_GET['content']) ? "" : $_GET['content'];

#$output = field_view_field('node', $node, 'field_location_on_map');
#print $output[0]['#markup'];
//$display = array('label' => 'hidden');
//$view = field_view_field('node', $node, 'field_location_on_map', $display);
//print drupal_render($view);
?>

<div class="row">
    <div class="col-sm-12">
        <?php
        $display = array('label' => 'hidden');
        $view = field_view_field('node', $node, 'field_listing_location',$display);
        print drupal_render($view);
        ?>
    </div>
</div>