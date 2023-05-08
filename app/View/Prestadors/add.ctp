<h2>Novo Prestador</h2>


<div class="col-md-8">
<?php
    echo $this->Form->create('Prestador', array('url'   => array(
        'controller' => 'prestadors','action' => 'add'
    )));
   
    echo $this->Form->input('nome',array('type'=>'text','class'=>'form-control',
    'div'=>array('class'=>'mb-3')));
    
    echo $this->Form->input('cnpj',array('type'=>'text','class'=>'form-control',
    'div'=>array('class'=>'mb-3')));
    
    echo $this->Form->input('cpf',array('type'=>'text','class'=>'form-control',
    'div'=>array('class'=>'mb-3')));
    
    echo $this->Form->input('endereco',array('type'=>'text','class'=>'form-control',
    'div'=>array('class'=>'mb-3')));
   
    echo $this->Form->input('email',array('type'=>'email','class'=>'form-control',
    'div'=>array('class'=>'mb-3')));
    
    echo $this->Form->input('contato',array('type'=>'number','class'=>'form-control',
    'div'=>array('class'=>'mb-3')));

  

    echo $this->Form->input('tipo_servico_id', array(
        'type' => 'select',
        'options' => $tipoServico,
        'class'=>'form-control',
        'div'=>array('class'=>'mb-3')
    ));

    echo $this->Form->input('tipo_conta_id', array(
        'type' => 'select',
        'options' => $tipocontas,
        'class'=>'form-control',
        'div'=>array('class'=>'mb-3')
    ));
   
    echo $this->Form->input('agencia',array('type'=>'number','class'=>'form-control',
    'div'=>array('class'=>'mb-3')));
   
    echo $this->Form->input('conta',array('type'=>'number','class'=>'form-control',
    'div'=>array('class'=>'mb-3')));

    $optionsFinalButton = array(
        'label'=>'Enviar',
        'class' => 'btn btn-primary',
        'div'=>array('class'=>'mb-3')
       
    );
    echo $this->Form->end($optionsFinalButton);
?>
</div>