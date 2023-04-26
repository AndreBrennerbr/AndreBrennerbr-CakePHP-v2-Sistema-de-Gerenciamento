<h2>Novo Prestador</h2>


<div class="col-md-8">
<?php
    echo $this->Form->create('Prestador', array('url'   => array(
        'controller' => 'prestadors','action' => 'add'
    )));
   
    echo $this->Form->input('Nome',array('type'=>'text','class'=>'form-control',
    'div'=>array('class'=>'mb-3')));
    echo $this->Form->input('Cnpj',array('type'=>'text','class'=>'form-control',
    'div'=>array('class'=>'mb-3')));
    echo $this->Form->input('Cpf',array('type'=>'text','class'=>'form-control',
    'div'=>array('class'=>'mb-3')));
    echo $this->Form->input('Endereco',array('type'=>'text','class'=>'form-control',
    'div'=>array('class'=>'mb-3')));
   
    echo $this->Form->input('Email',array('type'=>'email','class'=>'form-control',
    'div'=>array('class'=>'mb-3')));
    echo $this->Form->input('Contato',array('type'=>'number','class'=>'form-control',
    'div'=>array('class'=>'mb-3')));

  

    echo $this->Form->input('TipoConta_id', array(
        'type' => 'select',
        'options' => $tipoServico,
        'class'=>'form-control',
        'div'=>array('class'=>'mb-3')
    ));

    echo $this->Form->input('TipoConta_id', array(
        'type' => 'select',
        'options' => $tipocontas,
        'class'=>'form-control',
        'div'=>array('class'=>'mb-3')
    ));
   
    echo $this->Form->input('Agencia',array('type'=>'number','class'=>'form-control',
    'div'=>array('class'=>'mb-3')));
    echo $this->Form->input('Conta',array('type'=>'number','class'=>'form-control',
    'div'=>array('class'=>'mb-3')));
    



    $optionsFinalButton = array(
        'label'=>'Enviar',
        'class' => 'btn btn-primary',
        'div'=>array('class'=>'mb-3')
       
    );
    echo $this->Form->end($optionsFinalButton);
?>
</div>