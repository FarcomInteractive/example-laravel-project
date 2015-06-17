<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    //return view('welcome');

    $books = array(
        array('number' => 'Книга 1', 'title' => 'Гарри Поттер и философский камень', 'date' => '30.06.1997'),
        array('number' => 'Книга 2', 'title' => 'Гарри Поттер и Тайная комната', 'date' => '2.07.1998'),
        array('number' => 'Книга 3', 'title' => 'Гарри Поттер и узник Азкабана', 'date' => '8.07.1999'),
        array('number' => 'Книга 4', 'title' => 'Гарри Поттер и Кубок огня', 'date' => '8.07.2000'),
        array('number' => 'Книга 5', 'title' => 'Гарри Поттер и Орден Феникса', 'date' => '21.07.2003'),
        array('number' => 'Книга 6', 'title' => 'Гарри Поттер и Принц-полукровка', 'date' => '16.07.2005'),
        array('number' => 'Книга 7', 'title' => 'Гарри Поттер и Дары Смерти', 'date' => '21.07.2007')
    );
    return View::make('index', array('books' => $books));//Twig::render('welcom', $data);
});