<?php namespace App\Models;

use CodeIgniter\Model;

class UsuarioModel extends Model{
   protected $table = 'tbusu';
   protected $primaryKey = 'codusu'; 
   protected $allowedFields = ['loginusu','senhausu','recupsenhausu'];
   protected $returnType = 'object';
}