<?php
global $base_url;
$request_path=request_path();
$editFlag=preg_match("/node\/[0-9]+\/edit/",$request_path);
$screen = empty($_GET['screen']) ? "0" : $_GET['screen'];

$form["title"]['#access'] = 0;
$form["field_acronym"]['#access'] = 0;
$form["field_website"]['#access'] = 0;
$form["field_category"]['#access'] = 0;
$form["field_organisation_type"]['#access'] = 0;
$form["field_products_and_services"]['#access'] = 0;
$form["field_street_address"]['#access'] = 0;
$form["field_mobile"]['#access'] = 0;
$form["field_telephone"]['#access'] = 0;
$form["field_fax"]['#access'] = 0;
$form["field_city"]['#access'] = 0;
$form["field_e_mail"]['#access'] = 0;
$form["field_logo"]['#access'] = 0;
$form["field_attachment"]['#access'] = 0;
$form["field_country"]['#access'] = 0;
$form["field_location_on_map"]['#access'] = 0;
$form["body"]['#access'] = 0;
$form['actions']["preview"]['#access'] = 0;
switch ($screen) {
    case "0":
        $form["title"]['#access'] = 1;
        $form["field_acronym"]['#access'] = 1;
        $form["field_website"]['#access'] = 1;
        $form["field_category"]['#access'] = 1;
        $form["field_organisation_type"]['#access'] = 1;
        break;
    case "1":
        $form["title"]['#access'] = 1;
        $form["field_acronym"]['#access'] = 1;
        $form["field_website"]['#access'] = 1;
        $form["field_category"]['#access'] = 1;
        $form["field_organisation_type"]['#access'] = 1;
        break;
    case "2":
        $form["field_mobile"]['#access'] = 1;
        $form["field_telephone"]['#access'] = 1;
        $form["field_fax"]['#access'] = 1;
        $form["field_e_mail"]['#access'] = 1;
        break;
    case "3":
        $form["field_street_address"]['#access'] = 1;
        $form["field_city"]['#access'] = 1;
        $form["field_country"]['#access'] = 1;
        $form["field_location_on_map"]['#access'] = 1;
        break;
    case "4":
        $form["body"]['#access'] = 1;
        break;
    case "5":
        $form["field_logo"]['#access'] = 1;
        $form["field_attachment"]['#access'] = 1;
        break;
}
?>
<div class="row">
    <div class="col-md-2">
        <ul class="nav nav-pills nav-stacked">
            <li class="<?php echo ($screen < 2) ? "active" : ""; ?>">
                <a href="<?php echo $base_url."/".$request_path; ?>?screen=1">Basic information</a>
            </li>
            <?php
            if($screen!=0 or $editFlag){
            ?>
            <li class="<?php echo ($screen == 2) ? "active" : ""; ?>">
                <a href="<?php echo $base_url."/".$request_path; ?>?screen=2">Contact information</a>
            </li>
            <li class="<?php echo ($screen == 3) ? "active" : ""; ?>">
                <a href="<?php echo $base_url."/".$request_path; ?>?screen=3">Location</a>
            </li>
            <li class="<?php echo ($screen == 4) ? "active" : ""; ?>">
                <a href="<?php echo $base_url."/".$request_path; ?>?screen=4">Organisation page</a>
            </li>
            <li class="<?php echo ($screen == 5) ? "active" : ""; ?>">
                <a href="<?php echo $base_url."/".$request_path; ?>?screen=5">Attachments</a>
            </li>
            <?php } ?>
        </ul>
    </div>
    <div class="col-md-8">
        <div class="row">
            <div class="col-md-12"><?php print render($form['field_location_on_map']); ?></div>
        </div>
        <div class="row">
            <div class="col-md-12"><?php print render($form['body']); ?></div>
        </div>
        <div class="row">
            <div class="col-md-6"><?php print drupal_render_children($form); ?></div>
            <div class="col-md-6"></div>
        </div>
    </div>
    <div class="col-md-2"></div>
</div>

