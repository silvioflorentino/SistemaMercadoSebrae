<?php

namespace App\Controllers;

class ProdController extends BaseController
{
	public function index()
	{
		return view('cad_prod');
	}

    public function inserir(){
        
        $data['msg'] = '';
        $request = service('request');

        if($request->getMethod() === 'post'){

            $ProdutoModel = new \App\Models\ProdutoModel();
            $ProdutoModel->set('nomeprod',$request->getPost('nomeprod'));
            $ProdutoModel->set('categoriaprod',$request->getPost('categoriaprod'));
            $ProdutoModel->set('marcaprod',$request->getPost('marcaprod'));

            if($ProdutoModel->insert()){
                $data['msg'] = "Informações cadastrada com sucesso.";
            }else{
                $data['msg'] = "Informações Não cadastrada.";
            }
        }

            echo view ('cad_prod',$data);
        
    }

    public function lista(){
        
        $ProdutoModel = new \App\Models\ProdutoModel();

        $registros = $ProdutoModel->find();

        $data['produtos'] = $registros;

        echo view('header');
        echo view('visutudo_prod',$data);
        echo view('footer');

    }

    public function listaAltCodProd(){
        
        $data['session'] = \Config\Services::session();

		if (!$data['session']->get('log_acesso') || $data['session']->get('nivelusu') == "Assistente") {

			return redirect()->to(base_url('Home'));
		}


        $request = service('request');

        $ProdutoModel = new \App\Models\ProdutoModel();
        $codprod = $request->getPost('codprod');
        $registros = $ProdutoModel->find($codprod);
       
        if($request->getPost('codprodFK')){
            
            $this->alterarprod($request->getPost('codprodFK'));
        }

        $data['produtos'] = $registros;
        echo view('header');
        echo view('visutelaalterarprod',$data);
        echo view('footer');
    }

    public function alterarprod($codprod){
        $data['session'] = \Config\Services::session();

		if (!$data['session']->get('log_acesso') || $data['session']->get('nivelusu') == "Assistente") {

			return redirect()->to(base_url('Home'));
		}
        $produtomodel = new \App\Models\ProdutoModel();

        $registros = $produtomodel->find($codprod);
        
        $request = service('request');

        
        if($request->getPost('codprodFK')){
            $registros->nomeprod = $request->getPost('nomeprod');
            $registros->categoriaprod = $request->getPost('categoriaprod');
            $registros->marcaprod = $request->getPost('marcaprod');

            if($produtomodel->update($codprod,$registros)){
                $data['msg'] = 'Dados alterados com sucesso';
            }else{
                $data['msg'] = 'Os dados não foram alterados';
            }
        }
    }

    public function listaApagarCodProd(){
        $data['session'] = \Config\Services::session();

		if (!$data['session']->get('log_acesso') || $data['session']->get('nivelusu') == "Assistente") {

			return redirect()->to(base_url('Home'));
		}

        $request = service('request');

        $ProdutoModel = new \App\Models\ProdutoModel();
        $codprod = $request->getPost('codprod');
        $registros = $ProdutoModel->find($codprod);
       
        if($request->getPost('codprodFK')){
            
            $this->apagarprod($request->getPost('codprodFK'));
        }

        $data['produtos'] = $registros;
        echo view('header');
        echo view('visutelaapagarprod',$data);
        echo view('footer');
    }

    public function apagarprod($codprod=null){
        $data['session'] = \Config\Services::session();

		if (!$data['session']->get('log_acesso') || $data['session']->get('nivelusu') == "Assistente") {

			return redirect()->to(base_url('Home'));
		}
        if(is_null($codprod)){
            return redirect()->to(base_url('prodController/listaApagarCodProd'));
        }

        $ProdutoModel = new \App\Models\ProdutoModel();

        if($ProdutoModel->delete($codprod)){
            
            return redirect()->to(base_url('prodController/listaApagarCodProd'));
        }else{
            return redirect()->to(base_url('prodController/'));
        }

        return redirect()->to(base_url('prodController/listaApagarCodProd'));
    }
}