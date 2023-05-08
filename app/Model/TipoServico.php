<?php

class TipoServico extends AppModel {
    public $name = 'tiposervico';

  /*   public $hasMany = array(
        'Prestador' => array(
            'className' => 'Prestador'
        )
    ); */

    public $validate = array(
        'Nome' => array(
            'rule' => 'notBlank'
        )

    );
}