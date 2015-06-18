<?php
function setRole($account, $role){

    $query = "select name from role where rid='$role'";
    $records = db_query($query);
    $name=array();
    foreach ($records as $record) {
    $name[]=$record->name;
    }
    $account->roles[$role]=$name[0];
}