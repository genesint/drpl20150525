<?php
global $user;
$nid = empty($_GET['nid']) ? "" : $_GET['nid'];
$node= node_load($nid);

?>
<?php
if($user->uid==$node->uid){
    ?>
    <ul class="nav nav-pills">
        <li role="presentation" class="active"><a href="node/add/facility?iframe=1&nid=<?php echo $nid; ?>">Add facility</a></li>
    </ul>

<?php
}
?>
<div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">
        <?php
        $view = views_get_view('facility_view');
        $view->set_display('block');
        $view->pre_execute();
        $view->execute();
        print $view->preview();
        ?>
    </div>
    <div class="col-md-2"></div>
</div>

