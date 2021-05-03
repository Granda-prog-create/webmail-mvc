<?php
namespace controllers;
class Homecontroller
{
    public function index (){
        \views\mainView::render('home.php'); 
    }

}
?> 
