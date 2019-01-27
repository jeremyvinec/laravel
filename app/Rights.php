<?php

namespace App;

class Rights {

public static function is($user_id, $role_name) {
//$user_id INT, $role_name STRING
//L'utilisateur $user_id possède t-il le rôle $role_name ?
}

public static function can($user_id, $permission_name) {
//$user_id INT, $permission_name STRING
//L'utilisateur $user_id possède t-il la permission $permission_name ?
}

public static function canAtLeast($user_id, $permissions_names) {
//$user_id INT, $permissions_names ARRAY de STRING
//L'utilisateur $user_id possède t-il au moins une permission du tableau $permission_name ?
}

public static function canAll($user_id, $permissions_names) {
//$user_id INT, $permissions_names ARRAY de STRING
//L'utilisateur $user_id possède t-il toutes les permissions du tableau $permission_name ?
}

public static function authIs($role_name) {}

public static function authCan($permission_name) {}

public static function authCanAtLeast($permissions_names) {}

public static function authCanAll($permissions_names) {}
}