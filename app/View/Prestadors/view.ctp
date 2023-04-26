
<div class="form-group">

<h1><?php echo $DataPrestadores['Prestador']['Nome']?></h1>

<div class="md-3">
<label>CNPJ:</label>

        <?php if(!empty($DataPrestadores['Prestador']['Cnpj'])):?>
           <p><?php echo $DataPrestadores['Prestador']['Cnpj']; ?></p> 
        <?php else:?>
            <p>Nenhum dado cadastrado!</p>
        <?php endif; ?>
    
</div>

<div class="md-3">
<label>CPF:</label>
        <?php if(!empty($DataPrestadores['Prestador']['Cpf'])):?>
            <p><?php echo $DataPrestadores['Prestador']['Cpf']; ?></p> 
        <?php else:?>
            <p>Nenhum dado cadastrado!</p>
        <?php endif; ?>
</div>

<div class="md-3">
<label>Endereço:</label>
        <?php if(!empty($DataPrestadores['Prestador']['Endereco'])):?>
            <p><?php echo $DataPrestadores['Prestador']['Endereco']; ?></p>
        <?php else:?>
            <p>Nenhum dado cadastrado!</p>
        <?php endif; ?>
</div>

<div class="md-3">
<label>Contato:</label>
        <?php if(!empty($DataPrestadores['Prestador']['Contato'])):?>
            <p> <?php echo $DataPrestadores['Prestador']['Contato']; ?></p>
        <?php else:?>
            <p>Nenhum dado cadastrado!</p>
        <?php endif; ?>
</div>

<div class="md-3">
<label>Email:</label>
        <?php if(!empty($DataPrestadores['Prestador']['Email'])):?>
            <p><?php echo $DataPrestadores['Prestador']['Email']; ?></p>
        <?php else:?>
            <p>Nenhum dado cadastrado!</p>
        <?php endif; ?>
</div>

<div class="md-3">
<label>Tipo de Serviço:</label>
        <?php if(!empty($DataTipoServico['TipoServico']['Nome'])):?>
            <p><?php echo $DataTipoServico['TipoServico']['Nome']; ?></p>
        <?php else:?>
            <p>Nenhum dado cadastrado!</p>
        <?php endif; ?>
</div>

<div class="md-3">
<label>Tipo de Conta:</label>

        <?php if(!empty($DataTipoConta['TipoConta']['Nome'])):?>
            <p><?php echo $DataTipoConta['TipoConta']['Nome']; ?></p>
        <?php else:?>
            <p>Nenhum dado cadastrado!</p>
        <?php endif; ?>

</div>

<div class="md-3">
<label>Agência:</label>

        <?php if(!empty($DataPrestadores['Prestador']['Agencia'])):?>
            <p><?php echo $DataPrestadores['Prestador']['Agencia']; ?></p>
        <?php else:?>
            <p>Nenhum dado cadastrado!</p>
        <?php endif; ?>

</div>

<div class="md-3">
<label>Conta:</label>

        <?php if(!empty($DataPrestadores['Prestador']['Conta'])):?>
            <p><?php echo $DataPrestadores['Prestador']['Conta']; ?></p>
        <?php else:?>
            <p>Nenhum dado cadastrado!</p>
        <?php endif; ?>

</div>
</div>
