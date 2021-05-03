<?php
namespace views; 
public static function render($file){
    include('pages/.'.$file.'.php');
}
?>
