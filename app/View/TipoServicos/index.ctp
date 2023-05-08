<h2>Tipo de Serviços</h2>

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
        <th>Tipo de Serviço</th>
        <th>Alterar</th>
       
    </thead>
    <tbody>

<?php foreach($DataTipoServicos as $DataTipoServico):?>
        <tr>
            <td><?php echo $DataTipoServico['TipoServico']['Nome'];?></td> 
            <td><?php echo $this->Html->link('Edit', array('action' => 'edit', $DataTipoServico['TipoServico']['id']));?></td>
           
        </tr>
<?php endforeach; ?>
</tbody>
</table>