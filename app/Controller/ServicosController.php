<?php

class ServicosController extends AppController {
    public $helpers = array ('Html','Form');
    public $name = 'Servicos';

    public function index() {
        $this->set('DataServicos',$this->Servico->find('all'));
       /*  pr($this->Servico->find('all'));
        exit; */
    }

    public function view($id = null) {
        
        if ($servicos = $this->Servico->findById($id)) {
             
            $this->set('DataServicos', $servicos);
       }else{
        $this->Flash->error('Serviço não existe!');
        $this->redirect(array('action' => 'index'));

       }        
      
    }

    public function add() {
        
        if($this->request->is('get')){
            $this->loadModel('Cliente');

            $clientes = $this->Cliente->find('list',array(
                'fields' => array('Id', 'Nome')
            )); 

            $this->loadModel('TipoServico');
            
            $tipoServico = $this->TipoServico->find('list', array(
                'fields' => array('Id', 'Nome')
            ));

            $this->set(compact('clientes'));
            $this->set(compact('tipoServico'));
        };

        if ($this->request->is('post')) {
            try {
                
                $this->request->data['Servico']['situacao_servico_id'] = 2;

                if ($this->Servico->save($this->request->data)) {
                    $this->Flash->success('Servico cadastrador com sucesso!');
                    $this->redirect(array('action' => 'index'));
                }

            } catch (Exception $th) {
                
                $this->Flash->error('Erro ao registrar serviço');
                $this->redirect(array('action' => 'index'));
            }
            
        }
    }

    public function update_status($id = null)
    {
        $this->Servico->id = $id;
        $idToUpdate = $id;
        /*   pr($idToUpdate);
        exit;  */
        
       if(empty($this->request->data)){    

            $idToUpdate = $id;
            
            $this->loadModel('SituacaoServico');

            $situacao =  $this->SituacaoServico->find('list',array(
                    'fields' => array('Id', 'Nome')
            ));


            $servico = $this->Servico->findById($id);
           
            $this->request->data['Servico']['id'] =  $servico['Servico']['id'];
            
            $this->set('dataServicos',$servico);
            $this->set(compact('situacao'));
        }else{
           
            try {
               
                $data = $this->request->data['Servico']['situacao_servico_id'];
                $id = $this->request->data['Servico']['id'];
                
                $this->Servico->updateAll(
                    array('Servico.situacao_servico_id' => $data),
                    array('Servico.id' => $id) 
             
                ); 
                
            
                $this->Flash->success('Situação atualizada!');
                $this->redirect(array('action' => 'index'));

            } catch (Exception $th) {
                $this->Flash->error('Erro ao editar serviço');
                $this->redirect(array('action' => 'index'));
            }


        }
        

    }


    public function edit($id = null) {
        
        $this->Servico->id = $id;
        
        if (empty($this->request->data)) {
            $this->request->data = $this->Servico->findById($id);
            $this->loadModel('Cliente');

            $clientes = $this->Cliente->find('list',array(
                'fields' => array('Id', 'Nome')
            )); 

            $this->loadModel('TipoServico');
            
            $tipoServico = $this->TipoServico->find('list', array(
                'fields' => array('Id', 'Nome')
            ));

            $this->set(compact('clientes'));
            $this->set(compact('tipoServico'));
            
        }else{
           
            try {
                if ($this->Servico->save($this->request->data)) {
                    $this->Flash->success('Serviço editado com sucesso!');
                    $this->redirect(array('action' => 'index'));
                }
            } catch (Exception $th) {
                $this->Flash->error('Erro ao editar serviço');
                $this->redirect(array('action' => 'index'));
            }
          
        
        }
    }



    public function getPrestadorById()
    {
        $this->autoRender = false;
        $this->response->type('json');

        $serviceId = $this->request->data['service_id'];

        $this->loadModel('Prestador');

        $providers = $this->Prestador->find('list', array(
            'conditions' => array(
                'Prestador.tipo_servico_id' => $serviceId
                
            ),
            'fields' => array('Id', 'Nome')
        ));

        echo json_encode($providers); 

    }
}