<?php
module_load_include('inc', 'node', 'node.pages');
$categories = array("Accomodation",
    "Bars",
    "Cars",
    "Economy",
    "Finance",
    "Airlines",
    "Chatrooms and Blogs",
    "Dating",
    "Districs",
    "Education",
    "Emergency Numbers",
    "Entertainment",
    "Exports",
    "Health",
    "Hotels",
    "Internet",
    "Ministries",
    "Moneey and Banking",
    "Music",
    "Newspapers",
    "Radio Stations",
    "Real Estate",
    "Real Estate",
    "Regulatory Bodies",
    "Restaurants",
    "Restaurants",
    "Websites",
    "SMS",
    "Tax",
    "Taxi and Boda Boda",
    "Tourism and Travel Agents",
    "Internet",
    "Internet",
    "Internet"
);
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


