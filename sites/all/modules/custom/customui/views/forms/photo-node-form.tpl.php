<?php
$form["body"]['#access'] = 0;
$form['actions']["preview"]['#access'] = 0;
?>

<div class="row">
    <div class="col-md-1"></div>
    <div class="col-md-4">
        <?php print drupal_render_children($form); ?>
    </div>
    <div class="col-md-6">

    </div>
    <div class="col-md-1"></div>
</div>