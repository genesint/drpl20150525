<?php
$form["body"]['#access'] = 0;
$form['actions']["preview"]['#access'] = 0;
$tskey=empty($_GET['tskey']) ? "":$_GET['tskey'];
?>

<div class="row">
    <div class="col-md-1"></div>
    <div class="col-md-4">
        <?php print drupal_render_children($form); ?>
    </div>
    <div class="col-md-6">
        <?php
        $filter=array();
        $args=array();
        $view = views_get_view('organisation_types');
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
    <div class="col-md-1"></div>
</div>