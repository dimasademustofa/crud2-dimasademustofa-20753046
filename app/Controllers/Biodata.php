<?php
namespace App\Controllers;
class Biodata extends BaseController {
    function index() {
        $data['title']  =  "Biodata Dimas";
        return view('vw_form', $data);
    }
}