<?php

namespace App\Controllers;

use App\Models\FuncionarioModel;
use App\Models\UsuarioModel;

class Home extends BaseController
{
	public function index()
	{
		return view('acesso');
	}

	public function logar()
	{

		$request = service('request');
		$usuario = $request->getVar('usuario');
		$senha = $request->getVar('senha');

		$usuModel = new \App\Models\UsuarioModel();
		$registros = $usuModel->where('loginusu', $usuario)->find();

		foreach ($registros as $logado) {
			$nivelusu = $logado->nivelusu;
			$senhaBanco = $logado->senhausu;
			$codUsuario = $logado->codusu;
		}

		$FuncionarioModel = new \App\Models\FuncionarioModel();
       
        $registrosFuncionario = $FuncionarioModel->where('codusuFK', $codUsuario)->find();
		
		foreach ($registrosFuncionario as $regFun) {
			$nomeFun = $regFun->nomefun;
		}

		if ($registros) {
			if (password_verify($senha, $senhaBanco)) {

				$data['session'] = \Config\Services::session();

				$sessionData = [
					'usuario' => $usuario,
					'codusuario' => $codUsuario,
					'nivelusu' => $nivelusu,
					'nomeFunc' => $nomeFun,
					'log_acesso' => True
				];

				$data['session']->set($sessionData);

				return redirect()->to(base_url('Home/principal'));
			} else {
				return redirect()->to(base_url('Home'));
			}
		} else {
			return redirect()->to(base_url('Home'));
		}
	}


	public function principal()
	{
		$data['session'] = \Config\Services::session();

		if (!$data['session']->get('log_acesso')) {

			return redirect()->to(base_url('Home'));
		}
		echo view('header');
		echo view('pagina_principal');
		echo view('footer');
	}


	public function esqueciSenha()
	{
		$request = service('request');

		$usuario = $request->getVar('usuario');
		$pin = $request->getVar('pin');
	
		$usuModel = new \App\Models\UsuarioModel();
		$registros = $usuModel->where('loginusu', $usuario)->find();

		foreach ($registros as $logado) {
			$codusu = $logado->codusu;
			$pinBanco = $logado->recupsenhausu;
		}

		if ($registros) {
		
			if ($pinBanco == $pin) {

				$opcao = ['cost' => 8];
				$hast = password_hash($request->getPost('senha'),PASSWORD_BCRYPT,$opcao);
				
				$registros['senhausu'] = $hast;

				if($usuModel->update($codusu,$registros)){
					$data['msg'] = 'Dados alterados com sucesso';
				}else{
					$data['msg'] = 'Os dados não foram alterados';
				}
			return redirect()->to(base_url('Home/principal'));

			} else {

				return redirect()->to(base_url('Home/buscatelanovasenha'));

			}
		}else{
			return redirect()->to(base_url('Home/buscatelanovasenha'));
		}
	}

	public function logout(){
		
		session()->destroy();

		return redirect()->to(base_url('Home'));
	}

	public function buscatelanovasenha(){

		echo view('cad_novasenha');

	}
}
