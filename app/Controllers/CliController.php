<?php namespace App\Controllers;

use App\Controllers\BaseController;

class CliController extends BaseController{

    public function inserir(){
        
        $data["msg"] = '';
        $request = service('request');
        if($request->getMethod() === 'post'){
            $ClienteModel = new \App\Models\ClienteModel();
            $ClienteModel->set('nomecli',$request->getPost('nomecli'));
            $ClienteModel->set('cpfcli',$request->getPost('cpfcli'));
            $ClienteModel->set('celcli',$request->getPost('celcli'));
        
            if($ClienteModel->insert()){
                $data['msg'] = "Informações cadastrada com sucesso.";
            }else{
                $data['msg'] = "Informações Não cadastrada.";
            }
        }
            echo view ('cad_cli',$data);   
        
    }

    public function lista(){

        $ClienteModel = new \App\Models\ClienteModel();
    
        $registros = $ClienteModel -> find();

        $data['produtos'] = $registros;
 
        echo view('visutudo_cli', $data);

    }
}