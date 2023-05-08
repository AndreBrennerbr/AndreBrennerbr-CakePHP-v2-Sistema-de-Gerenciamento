<h2>Serviços</h2>

<div class="add-button-container">

<button class="btn btn-primary">
    <i class="ri-add-fill" ></i>  
    <?php echo $this->Html->link('Adicionar Novo', array('action' => 'add'),array('class' => 'link-botao'));?>
</button>

</div>

<br>
<br>
<table class="datatable">
    <thead>
        <th>Título</th>
        <th>Prestador</th>
        <th>Cliente</th>
        <th>Situação</th>
        <th>Valor</th>
        <th>Execução</th>
        <th>Alterar</th>
       
    </thead>
    <tbody>

<?php foreach($DataServicos as $Servicos):?>
        <tr>
            <td><?php echo $this->Html->link($Servicos['Servico']['TituloServico'], array('action' => 'view', $Servicos['Servico']['id']));?></td> 
            <td><?php echo $Servicos['Prestador']['nome'];?></td>
            <td><?php echo $Servicos['Cliente']['Nome'];?></td>
            <td><?php echo $this->Html->link($Servicos['SituacaoServico']['Nome'], array('action' => 'update_status', $Servicos['Servico']['id']));?></td>
            
            
            <td><?php echo 'R$'.number_format(intval($Servicos['Servico']['Valor']), 2, ',', '.');?></td>
            <td><?php echo date('d-m-Y',strtotime($Servicos['Servico']['DataExecucao']));?></td>
            <td><?php echo $this->Html->link('Editar', array('action' => 'edit', $Servicos['Servico']['id']));?></td>
           
        </tr>
<?php endforeach; ?>
</tbody>
</table>