<h2>Clientes</h2>

<button class="btn btn-primary">
    <i class="ri-add-fill" ></i>  
    <?php echo $this->Html->link('Adicionar Novo', array('action' => 'add'),array('class' => 'link-botao'));?>
</button>

<br>
<br>

<table class="datatable">
    <thead>
        <th>Nome</th>
        <th>Alterar</th>
    
    </thead>
    <tbody>

<?php foreach($DataClientes as $Clientes):?>
        <tr>
            <td> <?php echo $this->Html->link($Clientes['Cliente']['Nome'], array('action' => 'view', $Clientes['Cliente']['id']));?></td> 
            <td> <?php echo $this->Html->link('Editar', array('action' => 'edit', $Clientes['Cliente']['id']));?></td>
            
        </tr>
<?php endforeach; ?>
</tbody>
</table>