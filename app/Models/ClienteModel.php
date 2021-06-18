<?php namespace App\Models;

use CodeIgniter\Model;

class ClienteModel extends Model{
   protected $table = 'tbcliente';
   protected $primaryKey = 'codcli';
   protected $allowedFields = ['nomecli','cpfcli','celcli'];
   protected $returnType = 'object';
}