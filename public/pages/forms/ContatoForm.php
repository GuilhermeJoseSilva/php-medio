<?php
require "./bootstap.php";


$validate = validate([
    'name' => 's',
    'email' => 'e',
    'subject' => 's',
    'message' => 's'
]);

dd($validate->subject);