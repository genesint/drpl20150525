<?php
global $user;
$nid = empty($_GET['nid']) ? "" : $_GET['nid'];
$node= node_load($nid);

?>

<div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">
        <?php
        $args=array();
        $view = views_get_view('review_view');
        $view->set_display('block');
        if($nid!=""){
            $args = array($nid);
            $view->set_arguments($args);
        }
        $view->pre_execute();
        $view->execute();
        print $view->preview();
        ?>
    </div>
    <div class="col-md-2"></div>
</div>

