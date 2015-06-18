<?php
global $user;
?>
<div class="row">
  <div class="col-md-2"></div>
  <div class="col-md-8">
	<?php
	$filter = array();
	$args = array();
	$view = views_get_view('listings');
	$view->set_display('block');
	$uid = $user->uid;
	$args = array($uid);
	$view->set_arguments($args);
	$view->pre_execute();
	$view->execute();
	print $view->preview();
	?>
  </div>
  <div class="col-md-2"></div>
</div>