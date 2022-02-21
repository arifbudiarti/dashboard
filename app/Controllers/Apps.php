<?php

namespace App\Controllers;

class Apps extends BaseController
{

    public function __construct()
    {
        $this->month = date('m');
        $this->year = date('Y');
        $this->db1 = \Config\Database::connect();
        $this->mainUrl = 'Apps';
    }

    public function index()
    {
        $data['title'] = 'Dashboard';
        $data['url'] = $this->mainUrl;
        $data['child'] = "";
        // echo "<pre>";
        // print_r($data);
        // echo "</pre>";
        return view('pages/app/home', $data);
    }
}
