
<div class="md-3">
        <?php if(!empty($DataServicos['Servico']['TituloServico'])):?>
          <h1><?php echo $DataServicos['Servico']['TituloServico']; ?></h1> 
        <?php else:?>
            <p>Nenhum dado cadastrado!</p>
        <?php endif; ?>
</div>




<div class="md-3">
<label>Prestador:</label>
        <?php if(!empty($DataPrestador['Prestador']['Nome'])):?>
           <p><?php echo $DataPrestador['Prestador']['Nome']; ?></p> 
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
<label>Cliente:</label>
        <?php if(!empty($DataCliente['Cliente']['Nome'])):?>
           <p><?php echo $DataCliente['Cliente']['Nome']; ?></p> 
        <?php else:?>
            <p>Nenhum dado cadastrado!</p>
        <?php endif; ?>
</div>



<div class="md-3">
<label>Situação do Serviço:</label>
        <?php if(!empty($DataSituacao['SituacaoServico']['Nome'])):?>
           <p><?php echo $DataSituacao['SituacaoServico']['Nome']; ?></p> 
        <?php else:?>
            <p>Nenhum dado cadastrado!</p>
        <?php endif; ?>
</div>




<div class="md-3">
<label>Descrição do Serviço:</label>
        <?php if(!empty($DataServicos['Servico']['DescricaoServico'])):?>
           <p><?php echo $DataServicos['Servico']['DescricaoServico']; ?></p> 
        <?php else:?>
            <p>Nenhum dado cadastrado!</p>
        <?php endif; ?>
</div>


<div class="md-3">
<label>Endereço:</label>
        <?php if(!empty($DataServicos['Servico']['Endereco'])):?>
           <p><?php echo $DataServicos['Servico']['Endereco']; ?></p> 
        <?php else:?>
            <p>Nenhum dado cadastrado!</p>
        <?php endif; ?>
</div>



<div class="md-3">
<label>Data da Execução:</label>
        <?php if(!empty($DataServicos['Servico']['DataExecucao'])):?>
           <p><?php echo $DataServicos['Servico']['DataExecucao']; ?></p> 
        <?php else:?>
            <p>Nenhum dado cadastrado!</p>
        <?php endif; ?>
</div>











