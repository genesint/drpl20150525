<?php
module_load_include('inc', 'customui', 'search');
$cid=$_GET['cid'];
$tskey=$_GET['tskey'];
?>
<div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">
        <?php
        $args = array($cid);
        $view = views_get_view('listings');
        $view->set_display('block');
        $view->set_arguments($args);
        /* Filter criterion: Content: Title */
        $filter=array(
            'id'=>'title',
            'table'=>'node',
            'field'=>'title',
            'operator'=>'contains',
            'value'=>$tskey,
        );
        #$view->add_item($view->current_display, 'filter', $filter['table'], $filter['field'], $filter);
        $view->pre_execute();
        $view->execute();
        print $view->preview();
        ?>
    </div>
    <div class="col-md-2"></div>
</div>