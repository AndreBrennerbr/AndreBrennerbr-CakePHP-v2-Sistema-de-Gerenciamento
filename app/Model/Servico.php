<?php

class Servico extends AppModel {
    public $name = 'servico';
    
    
    public $belongsTo = array(

        'Prestador' => array('className' => 'Prestador'),
        'TipoServico' => array('className' => 'TipoServico'),
        'Cliente' => array('className' => 'Cliente'),
        'SituacaoServico' => array('className' => 'SituacaoServico')
    );
    
    public $validate = array(
        'TituloServico' => array(
            'rule' => 'notBlank'
        ),
        'DescricaoServico' => array(
            'rule' => 'notBlank'
        ), 
        'Endereco' => array(
            'rule' => 'notBlank'
        ),
        'DataExecucao' => array(
            'rule' => 'notBlank'
        )
    );
   
}