<?php

class PrestadorsController extends AppController {
    public $helpers = array ('Html','Form');
    public $name = 'Prestadors';

    public function index() {
         $this->set('DataPrestadores',$this->Prestador->find('all')); 
         

        
    }

    public function view($id = null) {
       
           if($prestador = $this->Prestador->findById($id)) {
                $this->set('DataPrestadores', $prestador);
                
            
            }else{
                $this->Flash->error('Prestador não encontrado!');
                $this->redirect(array('action' => 'index'));
            } 
    }

    public function add() {

        if ($this->request->is('get')) {
            
            $this->loadModel('TipoConta');
            
            $tipocontas = $this->TipoConta->find('list', array(
                'fields' => array('Id', 'Nome')
            ));


            $this->loadModel('TipoServico');
            
            $tipoServico = $this->TipoServico->find('list', array(
                'fields' => array('Id', 'Nome')
            ));

            $this->set(compact('tipocontas'));
            $this->set(compact('tipoServico'));
        
        }
        
        if ($this->request->is('post')) {
           
            try{

                $GetEmailForValidation =  $this->Prestador->find('first',
                    array('conditions'=>
                        array('Prestador.Email'=>$this->request->data['Prestador']['email'])));
                
                if($GetEmailForValidation){
                   throw new Exception("Email já cadastrado!");
                }
              
                
                if ($this->Prestador->save($this->request->data)) {
                    $this->Flash->success('Prestador cadastrador com sucesso!');
                    $this->redirect(array('action' => 'index'));
                }
            
            }catch (Exception $err) {
                $this->Flash->error($err);
                $this->redirect(array('action' => 'index'));
            }
            
        }
    }

    public function edit($id = null) {
      
        $this->Prestador->id = $id;
        if(empty($this->request->data)){
            $this->request->data = $this->Prestador->findById($id);

            $this->loadModel('TipoConta');
            
            $tipocontas = $this->TipoConta->find('list', array(
                'fields' => array('Id', 'Nome')
            ));

            $this->loadModel('TipoServico');
            
            $tipoServico = $this->TipoServico->find('list', array(
                'fields' => array('Id', 'Nome')
            ));

            $this->set(compact('tipocontas'));
            $this->set(compact('tipoServico'));
        }else{
           
            if ($this->Prestador->save($this->request->data)) {
                $this->Flash->success("Pretador editado com sucesso!");
                $this->redirect(array('action' => 'index'));
            } 
        }
         
       
    }

   



    function import() {

        if ($this->request->is('post')) {
            if (!empty($this->data)) {
                
                $this->Prestador->importCsv($this->request->data['Prestador']['csv']['tmp_name']);
                
                $this->Flash->success('Inserido com sucesso !');
                $this->redirect(array('action' => 'index'));
            }
        }
    }  


   /*  public function import()
    {
	    if ($this->request->is('post')) {
		
            if (!empty($this->request->data['Prestador']['csv']['name'])) {	
                
                $file = $this->request->data['Prestador']['csv'];
                $ext = substr(strtolower(strrchr($file['name'], '.')), 1);
                $arr_ext = array('csv');	
                
                if (in_array($ext, $arr_ext) === true) {	
                    
                    $handle = fopen($file['tmp_name'], 'r');	
                    
                    if ($handle !== false) {		
                        
                        while (($data = fgetcsv($handle)) !== false) {		
                            
                            $service = array(
                                'nome' => $data[0],
                                'cnpj' => $data[1],
                                'cpf' => $data[2],
                                'endereco' => $data[3],
                                'email' => $data[4],
                                'contato' => $data[5],
                                'agencia' => $data[6],
                                'conta' => $data[7]
                               
                               

                            );	
                            
                            $this->Prestador->create();
                            

                            pr($service);
                          
                           
                            if (!$this->Prestador->save($service)) {
                                $this->Flash->error(__('Error importing services'));
                                fclose($handle);
                                return $this->redirect(array('action' => 'import_csv'));
                            }
                        }
                       
                        fclose($handle);
                        exit;
                        $this->Flash->success(__('The importation has been saved.'));
                        
                        return $this->redirect(array('action' => 'index'));
                    }
                }
                
                $this->Flash->error(__('Invalid file format. Please upload a CSV file.'));
            }   
        
        } else {
			$this->Flash->error(__('Please select a file to upload.'));
		}
	}  */
       



}