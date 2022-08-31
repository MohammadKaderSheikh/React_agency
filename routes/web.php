<?php

/** @var \Laravel\Lumen\Routing\Router $router */
//use App\Http\Controllers\ChartDataController;

$router->get('/', function () use ($router) {
    return "Allahu akbar ";
});


$router->get('/chartData', ['middleware'=>'auth','uses'=>"ChartDataController@onAllSelect"]);
$router->get('/clintReview',['middleware'=>'auth','uses'=> "ClintReviewController@onAllSelect"]);
$router->post('/ContactSend', ['middleware'=>'auth','uses'=>"ContactController@onContactSendRequest"]);

$router->get('/CourseHome', ['middleware'=>'auth','uses'=>"CourseController@onSelectFour"]);
$router->get('/CourseAll', ['middleware'=>'auth','uses'=>"CourseController@onSelectAll"]);
$router->post('/CourseDetails', ['middleware'=>'auth','uses'=>"CourseController@onSelectDetails"]);

$router->get('/footer',['middleware'=>'auth','uses'=>"FooterController@onAllSelect"]);
$router->get('/information',['middleware'=>'auth','uses'=>"InformationController@onAllSelect"]);
$router->get('/Services',['middleware'=>'auth','uses'=>"serviceController@onSelect"]);

$router->get('/Project3',['middleware'=>'auth','uses'=>"ProjectController@onAllSelect3"]);
$router->get('/ProjectAll',['middleware'=>'auth','uses'=>"ProjectController@onAllSelectAll"]);
$router->post('/ProjectDetails',['middleware'=>'auth','uses'=>"ProjectController@onSelectDetail"]);


$router->get('/Video',['middleware'=>'auth','uses'=>'HomeEtcController@onAllSelectVideo']);
$router->get('/totalProject',['middleware'=>'auth','uses'=>'HomeEtcController@onProjectClint']);
$router->get('/TechDesc',['middleware'=>'auth','uses'=>'HomeEtcController@onAllSelectDesc']);
$router->get('/HomeTopTitle',['middleware'=>'auth','uses'=>'HomeEtcController@HomeTitle']);