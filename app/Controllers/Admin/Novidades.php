<?php

namespace App\Controllers\Admin;
use App\Controllers\BaseController;

class Novidades extends BaseController{
    public function index(){
        return view('admin/novidades');
    }
}

?>