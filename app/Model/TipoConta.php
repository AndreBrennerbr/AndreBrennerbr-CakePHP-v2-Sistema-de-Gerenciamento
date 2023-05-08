<?php

class TipoConta extends AppModel {
    public $name = 'tipoconta';
    
    public $hasMany = array(
        'Prestador' => array(
            'className' => 'Prestador'
        )
    );
   
}