<?php
global $base_url;
?>
<div class="row">
    <div class="col-md-1"></div>
    <div class="col-md-8"><h1><?php print $node->title; ?></h1></div>
    <div class="col-md-3"></div>
</div>
<div class="row">
    <div class="col-md-1"></div>
    <div class="col-md-8">
        <nav class="navbar navbar-default" role="navigation">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">

                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">&nbsp;</a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="<?php echo $base_url;?>/about?nid=<?php echo $node->nid;?>&iframe=1" target="listing-content">About</a></li>
                        <li><a href="<?php echo $base_url;?>/gallery?nid=<?php echo $node->nid;?>&iframe=1"  target="listing-content">Gallery</a></li>
                        <li><a href="<?php echo $base_url;?>/location?nid=<?php echo $node->nid;?>&iframe=1"  target="listing-content">Location</a></li>
                        <li><a href="<?php echo $base_url;?>/facility?nid=<?php echo $node->nid;?>&iframe=1"  target="listing-content">Facilities</a></li>
                        <li><a href="<?php echo $base_url;?>/review?nid=<?php echo $node->nid;?>&iframe=1"  target="listing-content">Reviews</a></li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
    </div>
    <div class="col-md-3"></div>
</div>
<div class="row">
    <div class="col-md-1"></div>
    <div class="col-md-8">
        <iframe class="listing-content" src="<?php echo $base_url;?>/about?nid=<?php echo $node->nid;?>&iframe=1" name="listing-content"></iframe>
    </div>
    <div class="col-md-3"></div>
</div>


<?php

$nid = empty($_GET['nid']) ? "" : $_GET['nid'];
$node = node_load($nid);
$content = empty($_GET['content']) ? "" : $_GET['content'];

#$output = field_view_field('node', $node, 'field_location_on_map');
#print $output[0]['#markup'];
//$display = array('label' => 'hidden');
//$view = field_view_field('node', $node, 'field_location_on_map', $display);
//print drupal_render($view);
?>
<?php
if ($content == "about") {
    ?>

    <div class="row">
        <div class="col-sm-4">
            <?php
            $display = array('label' => 'hidden');
            $view = field_view_field('node', $node, 'field_logo', $display);
            print drupal_render($view);
            ?>
        </div>
        <div class="col-sm-8"></div>
    </div>
    <div class="row">
        <div class="col-sm-4">
            <ul style="list-style: none">

                <li>
                    <?php
                    $view = field_view_field('node', $node, 'field_acronym');
                    print drupal_render($view);
                    ?>
                </li>
                <li>
                    <?php
                    $view = field_view_field('node', $node, 'field_website');
                    print drupal_render($view);
                    ?>

                </li>

                <li>
                    <?php
                    $view = field_view_field('node', $node, 'field_category');
                    print drupal_render($view);
                    ?>

                </li>

                <li>
                    <?php
                    $view = field_view_field('node', $node, 'field_organisation_type');
                    print drupal_render($view);
                    ?>

                </li>
            </ul>

        </div>
        <div class="col-sm-4">
            <ul style="list-style: none">
                <li>
                    <?php
                    $view = field_view_field('node', $node, 'field_mobile');
                    print drupal_render($view);
                    ?>

                </li>

                <li>
                    <?php
                    $view = field_view_field('node', $node, 'field_telephone');
                    print drupal_render($view);
                    ?>

                </li>
                <li>
                    <?php
                    $view = field_view_field('node', $node, 'field_fax');
                    print drupal_render($view);
                    ?>

                </li>
                <li>
                    <?php
                    $view = field_view_field('node', $node, 'field_e_mail');
                    print drupal_render($view);
                    ?>

                </li>
            </ul>
        </div>
        <div class="col-sm-4">
            <ul style="list-style: none">

                <li>
                    <?php
                    $view = field_view_field('node', $node, 'field_attachment');
                    print drupal_render($view);
                    ?>

                </li>
            </ul>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-12">
            <?php
            $display = array('label' => 'hidden');
            $view = field_view_field('node', $node, 'body', $display);
            print drupal_render($view);
            ?>
        </div>
    </div>
<?php
}
?>



<?php
if ($content == "location") {
    ?>

    <div class="row">

        <div class="col-sm-4">
            <ul style="list-style: none">
                <li>
                    <?php
                    $view = field_view_field('node', $node, 'field_street_address');
                    print drupal_render($view);
                    ?>

                </li>
                <li>
                    <?php
                    $view = field_view_field('node', $node, 'field_city');
                    print drupal_render($view);
                    ?>

                </li>
                <li>
                    <?php
                    $view = field_view_field('node', $node, 'field_country');
                    print drupal_render($view);
                    ?>

                </li>
            </ul>
        </div>
        <div class="col-sm-6">
            <?php
            $view = field_view_field('node', $node, 'field_location_on_map');
            print drupal_render($view);
            ?>
        </div>

        <div class="col-sm-2"></div>
    </div>
<?php
}
?>