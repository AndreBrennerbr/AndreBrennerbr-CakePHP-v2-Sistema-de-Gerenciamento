<?php

class ClientesController extends AppController {
    public $helpers = array ('Html','Form');
    public $name = 'Clientes';

    public function index() {
        $this->set('DataClientes',$this->Cliente->find('all')); 
      
    }

    public function view($id = null) {
      
        if($cliente = $this->Cliente->findById($id)){
            $this->set('DataClientes',$cliente);
        }else{
            $this->Flash->error('Cliente não existe!');
            $this->redirect(array('action' => 'index'));
        }
       
    }

    public function add() {
        
        if ($this->request->is('get')) {
            
            $this->loadModel('TipoDocumento');
            $tipodocumento = $this->TipoDocumento->find('list', array(
                'fields' => array('Id', 'Nome')
            ));

            $this->set(compact('tipodocumento'));
        }

        if ($this->request->is('post')) {

            try {
               
                if ($this->Cliente->save($this->request->data)) {
                    $this->Flash->success('Cliente cadastrador com sucesso!');
                    $this->redirect(array('action' => 'index'));
                }
            
            } catch (Exception $err) {
                $this->Flash->error('Erro ao cadastrar cliente!');
                $this->redirect(array('action' => 'index'));
            }

          
        }
    }

    public function edit($id = null) {
        
        $this->Cliente->id = $id;

        if(empty($this->request->data)){
            $this->request->data = $this->Cliente->findById($id);
            
            $this->loadModel('TipoDocumento');
            $tipodocumento = $this->TipoDocumento->find('list', array(
                'fields' => array('Id', 'Nome')
            ));

            $this->set(compact('tipodocumento'));
        }else{
            
            if ($this->Cliente->save($this->request->data)) {
                $this->Flash->success('Cliente editado com sucesso!');
                $this->redirect(array('action' => 'index'));
            }
        }
    }

    
}