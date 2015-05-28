<?php

#$form["title"]['#access'] = 0;
#$form["field_address"]['#access'] = 0;
#$form["field_listing_location"]['#access'] = 0;
$form["body"]['#access'] = 0;
$form['actions']["preview"]['#access'] = 0;
?>
<div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-4">
        <?php print render($form['title']); ?>
    </div>
    <div class="col-md-6"></div>
</div>

<div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-4">
        <?php print render($form['field_address']); ?>
    </div>
    <div class="col-md-6"></div>
</div>

<div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-6">
        <?php print render($form['field_listing_location']); ?>
    </div>
    <div class="col-md-4"></div>
</div>

<div class="row">
    <div class="col-md-2">
    </div>
    <div class="col-md-8">
        <?php print drupal_render_children($form); ?>
    </div>
    <div class="col-md-2"></div>
</div>

