<?php


class Admin extends Controller
{
   
    public function index()
    {
        require 'application/views/admin/index.php';
    }

    public function grafik()
    {
        require 'application/views/admin/grafik.php';
    }

}
