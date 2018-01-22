<?php
/**
 * Created by PhpStorm.
 * User: R HUMANOS4
 * Date: 15/01/2018
 * Time: 15:50
 */

namespace CodeAgenda\Entities;


use Illuminate\Database\Eloquent\Model;

class Pessoas extends Model
{
    protected $table = 'pessoas';
    protected  $fillable = [
        'nome',
        'apelido',
        'sexo'
    ];

    public function telefones(){
        //
    }
}