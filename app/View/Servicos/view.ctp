
<div class="md-3">
        <?php if(!empty($DataServicos['Servico']['TituloServico'])):?>
          <h1><?php echo $DataServicos['Servico']['TituloServico']; ?></h1> 
        <?php else:?>
            <p>Nenhum dado cadastrado!</p>
        <?php endif; ?>
</div>




<div class="md-3">
<label>Prestador:</label>
        <?php if(!empty($DataServicos['Prestador']['nome'])):?>
           <p><?php echo $DataServicos['Prestador']['nome']; ?></p> 
        <?php else:?>
            <p>Nenhum dado cadastrado!</p>
        <?php endif; ?>
</div>




<div class="md-3">
<label>Tipo de Serviço:</label>
        <?php if(!empty($DataServicos['TipoServico']['Nome'])):?>
           <p><?php echo $DataServicos['TipoServico']['Nome']; ?></p> 
        <?php else:?>
            <p>Nenhum dado cadastrado!</p>
        <?php endif; ?>
</div>


<div class="md-3">
<label>Cliente:</label>
        <?php if(!empty($DataServicos['Cliente']['Nome'])):?>
           <p><?php echo $DataServicos['Cliente']['Nome']; ?></p> 
        <?php else:?>
            <p>Nenhum dado cadastrado!</p>
        <?php endif; ?>
</div>



<div class="md-3">
<label>Situação do Serviço:</label>
        <?php if(!empty($DataServicos['SituacaoServico']['Nome'])):?>
           <p><?php echo $DataServicos['SituacaoServico']['Nome']; ?></p> 
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
           <p><?php echo date('d-m-Y',strtotime($DataServicos['Servico']['DataExecucao'])); ?></p> 
        <?php else:?>
            <p>Nenhum dado cadastrado!</p>
        <?php endif; ?>
</div>











