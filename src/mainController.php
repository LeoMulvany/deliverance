<?php
function aboutAction()
{
    $pageTitle = 'About Us';
    require_once __DIR__ . '../templates/about.php';
}
function contactAction()
{
    $pageTitle = 'Contact Us';
    require_once __DIR__ . '../templates/contact.php';
}
function indexAction()
{
    $pageTitle = 'Home Page';
    require_once __DIR__ . '../templates/index.php';
}
function listAction()
{
    $pageTitle = 'Bikes';
    require_once __DIR__ . '/../templates/list.php';
}
function registerAction()
{
    $pageTitle = 'Site Map';
    require_once __DIR__ . '../templates/register.php';
}