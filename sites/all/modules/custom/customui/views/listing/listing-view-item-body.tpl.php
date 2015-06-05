
<?php
global $base_url;
$nid = empty($_GET['nid']) ? "" : $_GET['nid'];
$node = node_load($nid);
?>
<?php
if($user->uid==$node->uid){
    ?>
    <ul class="nav nav-pills">
        <li role="presentation" class="active"><a href="listing-node-form-body?iframe=1&nid=<?php echo $nid; ?>">Edit profile</a></li>
    </ul>

<?php
}
?>
<div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">
        <?php
        $display = array('label' => 'hidden');
        $view = field_view_field('node', $node, 'body', $display);
        print drupal_render($view);
        ?>
    </div>
    <div class="col-md-2"></div>
</div>

