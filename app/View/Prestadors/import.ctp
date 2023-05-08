<div class="col-md-8">
<?php echo $this->Form->create('Prestador', array('url'   => array(
        'controller' => 'prestadors','action' => 'import'), 'type' => 'file')); ?>

<div class="mb-3">
<?php echo $this->Form->input('csv', array('type' => 'file', 'class'=>'form-control')); ?>
</div>

<?php $optionsFinalButton = array(
        'label'=>'Importar',
        'class' => 'btn btn-primary',
        'div'=>array('class'=>'mb-3')
       
    );
?>

<?php echo $this->Form->end($optionsFinalButton); ?>

</div>