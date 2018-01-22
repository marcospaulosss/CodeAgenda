<?php
/**
 * Created by PhpStorm.
 * User: R HUMANOS4
 * Date: 16/01/2018
 * Time: 15:56
 */

namespace CodeAgenda\Http\Controllers;


class AgendaController extends Controller
{
    public function index(){
        return view('agenda');
    }
}