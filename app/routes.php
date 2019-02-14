<?php 

$router->get('', 'PagesController@home');
$router->get('about', 'PagesController@about');
$router->get('contact', 'PagesController@contact');
$router->get('users', 'UsersController@index');
$router->post('users', 'UsersController@store');
$router->post('deleteUser', 'UsersController@delete');
$router->get('tasks', 'PagesController@tasks');
$router->post('tasks', 'PagesController@tasks');
$router->post('names-update', 'controller/update-name.php');
$router->get('about/culture', 'controller/about-culture.php');
$router->get('create-product', 'ProductController@create');


