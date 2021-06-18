<?php

namespace App\Controllers;

class LoteProdutoController extends BaseController
{
	public function index()
	{
		echo view('header');
        echo view('cad_loteproduto');
        echo view('footer');
	}

    public function listaCodProduto(){
        
        $data['session'] = \Config\Services::session();

		if (!$data['session']->get('log_acesso') || $data['session']->get('nivelusu') == "Assistente") {

			return redirect()->to(base_url('Home'));
		}

        $request = service('request');

        $ProdutoModel = new \App\Models\ProdutoModel();
        $codprod = $request->getPost('codprod');
        $registros = $ProdutoModel->find($codprod);

        $data['produtos'] = $registros;
       
        if($request->getPost('codprodFK')){
            $this->inserirlote();
        }

        echo view('header');
        echo view('cad_loteproduto',$data);
        echo view('footer');

    }

    public function inserirlote(){
        
        $data['msg'] = '';
        $request = service('request');

        if($request->getMethod() === 'post'){

            $LoteProdutoModel = new \App\Models\LoteProdutoModel();
            $LoteProdutoModel->set('codprodFK',$request->getPost('codprodFK'));
            $LoteProdutoModel->set('dataval',$request->getPost('dataval'));
            $LoteProdutoModel->set('qtdval',$request->getPost('qtdval'));
            $LoteProdutoModel->set('unidade',$request->getPost('unidade'));
            $LoteProdutoModel->set('precounitfinprod',$request->getPost('precounitfinprod'));
            
            if($LoteProdutoModel->insert()){
                $data['msg'] = "Informações cadastrada com sucesso.";
            }else{
                $data['msg'] = "Informações Não cadastrada.";
            }
        }
         
        
    }

    public function listaCodEnvia(){
        
        $request = service('request');
        $registros = 0;

        if($request->getPost('codprod')){

            $ProdutoModel = new \App\Models\ProdutoModel();
            $codprod = $request->getPost('codprod');
            $registros = $ProdutoModel->find($codprod);
        }
       
        if($request->getPost('codprodFK')){

            $LoteProdutoModel = new \App\Models\LoteProdutoModel();
            $LoteProdutoModel->set('codprodFK',$request->getPost('codprodFK'));
            $LoteProdutoModel->set('dataval',$request->getPost('dataval'));
            $LoteProdutoModel->set('qtdval',$request->getPost('qtdval'));
            $LoteProdutoModel->set('unidade',$request->getPost('unidade'));
            $LoteProdutoModel->set('precounitfinprod',$request->getPost('precounitfinprod'));
            
            if($LoteProdutoModel->insert()){
                $data['msg'] = "Informações cadastrada com sucesso.";
            }else{
                $data['msg'] = "Informações Não cadastrada.";
            }
        }

             $data['produtos'] = $registros;

            echo view('header');
            echo view ('cad_loteproduto',$data);
            echo view('footer');
        
    }


}