<?php
global $user;
$cid=$user->uid;
?>
<div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">
        <?php
        $filter=array();
        $args=array();
        $view = views_get_view('listing');
        $view->set_display('block');
        if($cid!=""){
            $args = array($cid);
            $view->set_arguments($args);
        }
        $view->pre_execute();
        $view->execute();
        print $view->preview();
        ?>
    </div>
    <div class="col-md-2"></div>
</div>