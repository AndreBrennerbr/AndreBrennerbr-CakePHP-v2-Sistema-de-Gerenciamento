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
        <th>Alterar</th>
        <th>Deletar</th>
    </thead>
    <tbody>

<?php foreach($DataServicos as $Servicos):?>
        <tr>
            <td><?php echo $this->Html->link($Servicos['Servico']['TituloServico'], array('action' => 'view', $Servicos['Servico']['Id']));?></td> 
            <td><?php echo $this->Html->link('Edit', array('action' => 'edit', $Servicos['Servico']['Id']));?></td>
            <td>   
                <?php echo $this->Form->postLink(
                    'Delete',
                    array('action' => 'delete', $Servicos['Servico']['Id']),
                    array('confirm' => 'Tem certeza que deseja deletar?')
                )
                ?>
            </td>
        </tr>
<?php endforeach; ?>
</tbody>
</table>