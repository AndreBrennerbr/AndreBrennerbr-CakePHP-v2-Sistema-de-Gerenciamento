<?php

class Cliente extends AppModel {
    public $name = 'Cliente';
    public $belongsTo = array('TipoDocumento' => array('className'=>'TipoDocumento'));
    
    public $validate = array(
        'Nome' => array(
            'rule' => 'notBlank'
        ),
        'Endereco' => array(
            'rule' => 'notBlank'
        ), 
        'Email' => array(
            'rule' => 'notBlank'
        ),
        'Contato' => array(
            'rule' => 'notBlank'
        ),
        'NumeroDocumento' => array(
            'rule' => 'notBlank'
        ),
        
        
    );
   
}