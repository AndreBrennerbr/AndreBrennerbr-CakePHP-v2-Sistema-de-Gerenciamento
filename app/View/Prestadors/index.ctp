<h2>Prestadores</h2>

<div class="mb-3">
    <div class="add-button-container">

    <button class="btn btn-primary">
        <i class="ri-add-fill" ></i>  
        <?php echo $this->Html->link('Adicionar Novo', array('action' => 'add'),array('class' => 'link-botao'));?>
    </button>

    </div>
</div>


<div class="mb-3">
    <button  class="btn btn-primary">
    <?php echo $this->Html->link('Importar Arquivo', array('action' => 'import'),array('class' => 'link-botao'));?>
    </button>
</div>





<br>
<br>

<table class="datatable">
    <thead>
        <th>Nome</th>
        <th>Alterar</th>
        <th>Deletar</th>
    </thead>
    <tbody>
<?php foreach($DataPrestadores as $Prestadores):?>
        <tr>
            <td><?php echo $this->Html->link($Prestadores['Prestador']['Nome'], array('action' => 'view', $Prestadores['Prestador']['Id']));?></td> 
            <td><?php echo $this->Html->link('Edit', array('action' => 'edit', $Prestadores['Prestador']['Id']));?></td>
            <td>   
                <?php echo $this->Form->postLink(
                            'Delete',
                            array('action' => 'delete', $Prestadores['Prestador']['Id']),
                            array('confirm' => 'Tem certeza que deseja deletar?')
                        )
                ?>
            </td>
        </tr>
<?php endforeach; ?>
</tbody>
</table>