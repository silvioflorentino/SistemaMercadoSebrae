<?php namespace App\Models;

use CodeIgniter\Model;

class ProdutoModel extends Model{
   protected $table = 'tbprodutos';
   protected $primaryKey = 'codprod'; 
   protected $allowedFields = ['nomeprod','categoriaprod','marcaprod'];
   protected $returnType = 'object';
}