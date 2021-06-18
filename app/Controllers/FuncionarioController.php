<?php

namespace App\Controllers;

use App\Models\FuncionarioModel;

class FuncionarioController extends BaseController
{
	public function index()
	{
		return view('');
	}

    public function mostrarUsuario(){

        $data['session'] = \Config\Services::session();

        $codigoUsuario = $data['session']->get('codusuario');


        $FuncionarioModel = new \App\Models\FuncionarioModel();
       
        $registros = $FuncionarioModel->where('codusuFK', $codigoUsuario)->find();

        return $registros;
    }

}