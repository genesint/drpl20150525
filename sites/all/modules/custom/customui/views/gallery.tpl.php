<?php
global $user;
$nid = empty($_GET['nid']) ? "" : $_GET['nid'];
$node= node_load($nid);

?>
<?php
if($user->uid==$node->uid){
?>
<ul class="nav nav-pills">
    <li role="presentation" class="active"><a href="node/add/photo?iframe=1&nid=<?php echo $nid; ?>">Upload</a></li>
</ul>

<?php
}
?>
<div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">
        <?php
        $args=array();
        $view = views_get_view('photo_view');
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
