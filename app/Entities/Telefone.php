<?php
/**
 * Created by PhpStorm.
 * User: R HUMANOS4
 * Date: 15/01/2018
 * Time: 15:52
 */

namespace CodeAgenda\Entities;


use Illuminate\Database\Eloquent\Model;

class Telefone extends Model
{
    protected $table = 'telefones';
    protected $fillable = [
        'descricao',
        'codpais',
        'ddd',
        'prefixo',
        'sufixo'
    ];
}