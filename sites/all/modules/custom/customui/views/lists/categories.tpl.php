<?php
$tskey=empty($_GET['tskey']) ? "":$_GET['tskey'];
?>
<div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">
        <?php
        $filter=array();
        $args=array();
        $view = views_get_view('categories');
        $view->set_display('block_1');
        if($tskey!=""){
            /* Filter criterion: Content: Title */
            $filter=array(
                'id'=>'title',
                'table'=>'node',
                'field'=>'title',
                'operator'=>'contains',
                'value'=>$tskey,
            );
            $view->add_item($view->current_display, 'filter', $filter['table'], $filter['field'], $filter);

        }
        $view->pre_execute();
        $view->execute();
        print $view->preview();
        ?>
    </div>
    <div class="col-md-2"></div>
</div>