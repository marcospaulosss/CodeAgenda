<?php
/**
 * Created by PhpStorm.
 * User: R HUMANOS4
 * Date: 08/01/2018
 * Time: 13:13
 */

namespace CodeAgenda\Http\Controllers;


class IndexController extends Controller
{
    public function index(){
        return view('layout');
    }
}