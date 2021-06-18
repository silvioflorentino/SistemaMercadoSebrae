<?php
namespace App\Controllers;
class UsuController extends BaseController
{
    public function inserirusuario()
	{
        $data['session'] = \Config\Services::session();

		if (!$data['session']->get('log_acesso')) {

			return redirect()->to(base_url('Home'));
		}
        
        $data['msg'] = '';
        $request = service('request');

        if($request->getMethod() === 'post'){

            $UsuarioModel = new \App\Models\UsuarioModel();
            $UsuarioModel->set('loginusu',$request->getPost('usuario'));
            
            $opcao = ['cost' => 8];
            $hast = password_hash($request->getPost('senha'),PASSWORD_BCRYPT,$opcao);

            $UsuarioModel->set('senhausu',$hast);
            $UsuarioModel->set('recupsenhausu',$request->getPost('pin'));

            if($UsuarioModel->insert()){
                $data['msg'] = "Informações cadastrada com sucesso.";
            }else{
                $data['msg'] = "Informações Não cadastrada.";
            }
        }
 
        echo view('header');
		echo view('cad_usuario',$data);
        echo view('footer');
	}
}