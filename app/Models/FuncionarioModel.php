<?php namespace App\Models;

use CodeIgniter\Model;

class FuncionarioModel extends Model{
   protected $table = 'tbfun';
   protected $primaryKey = 'codfun'; 
   protected $allowedFields = ['codusuFK','nomefun','cpffun','cepfun','celfun'];
   protected $returnType = 'object';
}