<?php namespace App\Models;

use CodeIgniter\Model;

class CaixaModel extends Model{
   protected $table = 'tbcaixa';
   protected $primaryKey = 'codcaixa'; 
   protected $allowedFields = ['codped','codfunfk','codclifk','codestfk', 'qtdcxitem','totalcxitem','tipopg'];
   protected $returnType = 'object';
}