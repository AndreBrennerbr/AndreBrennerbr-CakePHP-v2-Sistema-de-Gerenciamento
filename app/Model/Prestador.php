<?php

class Prestador extends AppModel {
    public $name = 'prestador';

    public $belongsTo = array(
        'TipoConta' => array(
            'className' => 'TipoConta'
        ),
        
        'TipoServico' => array(
            'className' => 'TipoServico'
        )
    );
    
   

     public $validate = array(
        'nome' => array(
            'rule' => 'notBlank'
        ),
        'cnpj' => array(
            'rule' => 'notBlank'
        ), 
        'cpf' => array(
            'rule' => 'notBlank'
        ),
        'endereco' => array(
            'rule' => 'notBlank'
        ),
        'email' => array(
            'rule' => 'notBlank'
        ),
        'contato' => array(
            'rule' => 'notBlank'
        ),
        'agencia' => array(
            'rule' => 'notBlank'
        ),
        'conta' => array(
            'rule' => 'notBlank'
        )
        
        
    ); 

    
    function importCsv($filename) {
        
        $handle = fopen($filename, "r");
        $headers = fgetcsv($handle, 1000, ",");
        
        while (($data = fgetcsv($handle)) !== FALSE) {
            //pr(fgetcsv($handle));
         
            $this->create();
           
            if(!empty($data) && isset($data[7])){ 
                $pres = array(
                    'nome' => (String) $data[0],
                    'cnpj' =>(String) $data[1],
                    'cpf' =>(String) $data[2],
                    'endereco' =>(String) $data[3],
                    'email' =>(String) $data[4],
                    'contato' =>(String) $data[5],
                    'agencia' =>(String) $data[6],
                    'conta' =>(String) $data[7],
                    'tipo_conta_id' => 1,
                    'tipo_servico_id' => 1
                );
            }

           

            $this->save($pres); 
            debug($pres);
        }
        fclose($handle);

    
    } 





}