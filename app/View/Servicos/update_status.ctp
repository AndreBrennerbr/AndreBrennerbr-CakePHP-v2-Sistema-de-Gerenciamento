<h2>Situação do Serviço</h2>
<div class="mb-3" style="font-weight: bold;">
<?php
    echo $dataServicos['Servico']['TituloServico'];
?>
</div>
<?php
echo $this->Form->create('Servico', array('url'   => array(
    'controller' => 'servicos', 'action' => 'update_status'
)));


echo $this->Form->input(
    'situacao_servico_id',
    array(
        'type' => 'select',
        'options' => $situacao,
        'class' => 'form-control',
        'label' => 'Situação do serviço',
        'div'=>array('class'=>'mb-3')
    )
);

echo $this->Form->input('id', array('type' => 'hidden'));

$optionsFinalButton = array(
    'label' => 'Enviar',
    'class' => 'btn btn-primary',
    'div'=>array('class'=>'mb-3')

);

echo $this->Form->end($optionsFinalButton);

?>



