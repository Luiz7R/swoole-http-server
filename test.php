<?php

echo 'teste';
$value = 'car';
$result = filter_var($value, FILTER_VALIDATE_BOOLEAN, FILTER_NULL_ON_FAILURE);

if ($result) {
    echo 'true';
    var_dump($result);
}