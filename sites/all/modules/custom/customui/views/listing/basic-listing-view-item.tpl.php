<?php

$nid = empty($_GET['nid']) ? "" : $_GET['nid'];
$node = node_load($nid);
#$output = field_view_field('node', $node, 'field_location_on_map');
#print $output[0]['#markup'];
//$display = array('label' => 'hidden');
//$view = field_view_field('node', $node, 'field_location_on_map', $display);
//print drupal_render($view);
?>

<div class="row">
    <div class="col-sm-4">
        <ul style="list-style: none">
            <li>
                <?php
                $view = field_view_field('node', $node, 'title');
                print drupal_render($view);
                ?>
            </li>
            <li>
                <?php
                $view = field_view_field('node', $node, 'field_address');
                print drupal_render($view);
                ?>
            </li>
        </ul>
    </div>
    <div class="col-sm-4">

    </div>
    <div class="col-sm-4">

    </div>
</div>

