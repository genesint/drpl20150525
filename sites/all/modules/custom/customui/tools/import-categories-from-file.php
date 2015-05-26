<?php
module_load_include('inc', 'node', 'node.pages');
$categories = array();
$myfile = fopen("/var/www/html/ugdirect/sites/all/modules/custom/customui/tools/CategoryList.txt", "r") or die("Unable to open file!");
while(!feof($myfile)) {
    $f=trim(fgets($myfile));
    if($f==""){
        continue;
    }
    $categories[]= $f;
}
fclose($myfile);
function addnode($line)
{
    global $user;
    $node = (object)array(
        'uid' => $user->uid,
        'name' => $user->name,
        'type' => 'category',
        'language' => 'und',
    );

    node_object_prepare($node);

    $fields = field_info_instances('node');
    $form_state = array();
    foreach ($fields['menu'] as $field_name => $values) {
        $form_state['values'][$field_name] = array('und' => array());
    }
    $form_state['values']['title'] = $line;
    $form_state['values']['op'] = t('Save');
    drupal_form_submit('menu_node_form', $form_state, $node);
}

foreach ($categories as $line) {
    addnode($line);
}


