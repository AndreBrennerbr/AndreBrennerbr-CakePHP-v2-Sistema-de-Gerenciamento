<h2>Editar Tipo de Serviço</h2>
<div class="col-md-8">
<?php
echo $this->Form->create('TipoServico', array('url'   => array(
    'controller' => 'tiposervicos', 'action' => 'edit'
)));


echo $this->Form->input('Nome', array('type' => 'text', 'class' => 'form-control',
'div'=>array('class'=>'mb-3'),'label'=>'Nome'));


$optionsFinalButton = array(
    'label' => 'Salvar',
    'class' => 'btn btn-primary',
    'div'=>array('class'=>'mb-3')

);

echo $this->Form->end($optionsFinalButton);

?>
</div>