<?php namespace App\Models;

use CodeIgniter\Model;

class EstoqueModel extends Model{
   protected $table = 'tbestoque';
   protected $primaryKey = 'codest'; 
   protected $allowedFields = ['codloteFK','qtdentradaest','qtdsaidaest','saldoest'];
   protected $returnType = 'object';
}