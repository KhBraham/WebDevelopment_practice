<?php
class User {
    public $name;
}

$user = new User();
$user->name = "Seth";

$serializedUser = serialize($user);
var_dump($serializedUser);
echo $serializedUser . "\n\n";

$user2 = unserialize($serializedUser);
var_dump($user2);
print_r($user2);

?>