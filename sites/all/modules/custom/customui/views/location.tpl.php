<?php
$nid = empty($_GET['nid']) ? "" : $_GET['nid'];
$node= node_load($nid);
?>
<div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-4">
        <?php
        $display = array('label' => 'hidden');
        $view = field_view_field('node', $node, 'field_listing_location', $display);
        print drupal_render($view);
        ?>
    </div>
    <div class="col-md-4"></div>
    <div class="col-md-2"></div>
</div>

