<?php

class TipoServicosController extends AppController {
    public $helpers = array ('Html','Form');
    public $name = 'TipoServicos';

    public function index() {
        $this->set('DataTipoServicos',$this->TipoServico->find('all'));
    }

    public function view($id = null) {
        
        if ($this->TipoServico->findById($id)) {
            $this->set('DataTipoServicos', $this->TipoServico->findById($id));
        }
       
    }

    public function add() {
        if ($this->request->is('post')) {
            try {
                if ($this->TipoServico->save($this->request->data)) {
                    $this->Flash->success('Tipo Servicos cadastrador com sucesso!');
                    $this->redirect(array('action' => 'index'));
                }
            } catch (Exception $th) {
                $this->Flash->error('Erro ao registrar novo tipo de serviço');
                $this->redirect(array('action' => 'index'));
            }
            
        }
    }

    public function edit($id = null) {
        
        $this->TipoServico->id = $id;
        
        if (empty($this->request->data)) {
            $this->request->data = $this->TipoServico->findById($id);
        }else{
            try {
                if ($this->TipoServico->save($this->request->data)) {
                    $this->Flash->success('Serviço editado com sucesso!');
                    $this->redirect(array('action' => 'index'));
                }
            } catch (Exception $th) {
                $this->Flash->error('Erro ao editar tipo de serviço');
                $this->redirect(array('action' => 'index'));
            }
            
        }
    }

    function delete($id) {
        if (!$this->request->is('post')) {
            throw new MethodNotAllowedException();
        }
       
        try {
            if ($this->TipoServico->delete($id)) {
                $this->Flash->success('Tipo Servicos deletado com sucesso!');
                $this->redirect(array('action' => 'index'));
            }
        
        } catch (Exception $th) {
            $this->Flash->error('Erro ao deletar tipo de serviço');
            $this->redirect(array('action' => 'index'));
        }
       
    }
}