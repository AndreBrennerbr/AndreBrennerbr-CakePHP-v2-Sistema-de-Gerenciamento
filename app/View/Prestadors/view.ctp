
<div class="form-group">

<h1><?php echo $DataPrestadores['Prestador']['nome']?></h1>

<div class="md-3">
<label>CNPJ:</label>

        <?php if(!empty($DataPrestadores['Prestador']['cnpj'])):?>
           <p><?php echo $DataPrestadores['Prestador']['cnpj']; ?></p> 
        <?php else:?>
            <p>Nenhum dado cadastrado!</p>
        <?php endif; ?>
    
</div>

<div class="md-3">
<label>CPF:</label>
        <?php if(!empty($DataPrestadores['Prestador']['cpf'])):?>
            <p><?php echo $DataPrestadores['Prestador']['cpf']; ?></p> 
        <?php else:?>
            <p>Nenhum dado cadastrado!</p>
        <?php endif; ?>
</div>

<div class="md-3">
<label>Endereço:</label>
        <?php if(!empty($DataPrestadores['Prestador']['endereco'])):?>
            <p><?php echo $DataPrestadores['Prestador']['endereco']; ?></p>
        <?php else:?>
            <p>Nenhum dado cadastrado!</p>
        <?php endif; ?>
</div>

<div class="md-3">
<label>Contato:</label>
        <?php if(!empty($DataPrestadores['Prestador']['contato'])):?>
            <p> <?php echo $DataPrestadores['Prestador']['contato']; ?></p>
        <?php else:?>
            <p>Nenhum dado cadastrado!</p>
        <?php endif; ?>
</div>

<div class="md-3">
<label>Email:</label>
        <?php if(!empty($DataPrestadores['Prestador']['email'])):?>
            <p><?php echo $DataPrestadores['Prestador']['email']; ?></p>
        <?php else:?>
            <p>Nenhum dado cadastrado!</p>
        <?php endif; ?>
</div>

<div class="md-3">
<label>Tipo de Serviço:</label>
        <?php if(!empty($DataPrestadores['TipoServico']['Nome'])):?>
            <p><?php echo $DataPrestadores['TipoServico']['Nome']; ?></p>
        <?php else:?>
            <p>Nenhum dado cadastrado!</p>
        <?php endif; ?>
</div>

<div class="md-3">
<label>Tipo de Conta:</label>

        <?php if(!empty($DataPrestadores['TipoConta']['Nome'])):?>
            <p><?php echo $DataPrestadores['TipoConta']['Nome']; ?></p>
        <?php else:?>
            <p>Nenhum dado cadastrado!</p>
        <?php endif; ?>

</div>

<div class="md-3">
<label>Agência:</label>

        <?php if(!empty($DataPrestadores['Prestador']['agencia'])):?>
            <p><?php echo $DataPrestadores['Prestador']['agencia']; ?></p>
        <?php else:?>
            <p>Nenhum dado cadastrado!</p>
        <?php endif; ?>

</div>

<div class="md-3">
<label>Conta:</label>

        <?php if(!empty($DataPrestadores['Prestador']['conta'])):?>
            <p><?php echo $DataPrestadores['Prestador']['conta']; ?></p>
        <?php else:?>
            <p>Nenhum dado cadastrado!</p>
        <?php endif; ?>

</div>
</div>
