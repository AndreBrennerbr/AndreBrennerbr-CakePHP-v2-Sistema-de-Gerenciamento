<h2>Novo Serviços</h2>
<?php
echo $this->Form->create('Servico', array('url'   => array(
    'controller' => 'servicos', 'action' => 'add'
)));


echo $this->Form->input('TituloServico', array('type' => 'text', 'class' => 'form-control',
'div'=>array('class'=>'mb-3'),'label'=>'Titulo do Serviço'));

echo $this->Form->input('DescricaoServico', array('type' => 'text', 'class' => 'form-control',
'div'=>array('class'=>'mb-3'),'label'=>'Descrição do Serviço'));


echo $this->Form->input('Endereco', array('type' => 'text', 'class' => 'form-control',
'div'=>array('class'=>'mb-3'),'label'=>'Endereço'));



echo $this->Form->input('Valor', array('type' => 'text', 'class' => 'form-control',
'div'=>array('class'=>'mb-3'),'label'=>'Valor do Serviço'));




echo $this->Form->input('DataExecucao', array('type' => 'date',
'dateFormat' => 'DMY',
'div'=>array('class'=>'mb-3'),'label'=> 'Data de Execução'));




echo $this->Form->input(
    'Cliente_id',
    array(
        'type' => 'select',
        'options' => $clientes,
        'class' => 'form-control',
        'div'=>array('class'=>'mb-3'),
        'empty' => 'Selecione - Cliente '
    )
);


echo $this->Form->input('TipoServico_id', array(
    'type' => 'select',
    'options' => $tipoServico,
    'class'=>'form-control',
    'div'=>array('class'=>'mb-3'),
    'label'=>'Tipo de Serviço',
    'empty' => 'Selecione - Tipo de Serviço'
));

$providers = array();

echo $this->Form->input(
    'Prestador_id',
    array(
        'type' => 'select',
        'options' => $providers,
        'class' => 'form-control',
        'div'=>array('class'=>'mb-3'),
        'empty' => 'Selecione - Prestador'
    )
);



$optionsFinalButton = array(
    'label' => 'Enviar',
    'class' => 'btn btn-primary',
    'div'=>array('class'=>'mb-3')

);

echo $this->Form->end($optionsFinalButton);

?>



<script>
    $(document).ready(function() {
        $('#ServicoTipoServicoId').change(function() {
            var serviceId = $(this).val();
            $.ajax({
                url: '<?php echo $this->Html->url(array("controller" => "servicos", "action"=> "getPrestadorById")); ?>',
                data: { service_id: serviceId },
                type: 'POST',
                success: function(data) {
                    $('#ServicoPrestadorId').empty();

                    $.each(data, function(key, value) {
                        $('#ServicoPrestadorId').append($('<option>', {
                            value: key,
                            text: value
                        }));
                    });
                },
                error:(XMLHttpRequest, textStatus, errorThrown)=> console.log(errorThrown)
            });
        });
    });
</script>