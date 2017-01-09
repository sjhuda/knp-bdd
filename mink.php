<?php

require __DIR__.'/vendor/autoload.php';

$driver = new \Behat\Mink\Driver\GoutteDriver();
$session = new \Behat\Mink\Session($driver);

$session->visit('http://jurassicpark.wikia.com');
var_dump($session->getStatusCode(), $session->getCurrentUrl());

// Document element
$page = $session->getPage();
var_dump(substr($page->getText(), 0, 75));
