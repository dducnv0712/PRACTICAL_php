<?php
include_once "./models/Database_cn.php";

class WebControllers{
    public function home(){

    }

    public function listBooks(){
        $sql_txt = "select * from library";
        $list_books = queryDB($sql_txt);
        $count =1;
        include "views/listBooks.php";
    }
    public function searchBooks(){
        $sql_txt = "select * from library where like '%$name%'";
        $list_books = queryDB($sql_txt);
        $count =1;
        include "views/listBooks.php";
    }
}