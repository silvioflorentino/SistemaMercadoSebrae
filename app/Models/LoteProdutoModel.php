<?php namespace App\Models;

use CodeIgniter\Model;

class LoteProdutoModel extends Model{
   protected $table = 'tblote';
   protected $primaryKey = 'codlote'; 
   protected $allowedFields = ['codprodFK','dataval','qtdval','unidade','precounitfinprod'];
   protected $returnType = 'object';
}