<?php
global $base_url;
$request_path = request_path();
$editFlag = preg_match("/node\/[0-9]+/", $request_path);
$screen = empty($_GET['screen']) ? "0" : $_GET['screen'];

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
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="<?php echo $base_url;?>/listing?nid=<?php echo $node->nid;?>&iframe=1&content=about" target="listing-content">About</a></li>
                        <li><a href="<?php echo $base_url;?>/listing?nid=<?php echo $node->nid;?>&iframe=1&content=location"  target="listing-content">Location</a></li>
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
        <iframe class="listing-content" src="<?php echo $base_url;?>/listing?nid=<?php echo $node->nid;?>&iframe=1&content=about" name="listing-content"></iframe>
    </div>
    <div class="col-md-3"></div>
</div>