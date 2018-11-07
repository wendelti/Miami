<?php $totalServico = 0;
$totalProdutos = 0;?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
<title>Miami Telas</title>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css" />
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap-responsive.min.css" />
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/matrix-style.css" />
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/matrix-media.css" />
<link href="<?php echo base_url();?>assets/font-awesome/css/font-awesome.css" rel="stylesheet" />

<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
<script type="text/javascript"  src="<?php echo base_url();?>assets/js/jquery-1.10.2.min.js"></script>

</head>
<body>

 
  <div class="container-fluid">
    <div class="row-fluid">
      <div class="span12">
       
        <div class="invoice-content">
                <div class="invoice-head" style="margin-bottom: 0">

                    <table class="table">
                        <tbody>
                            <?php if ($emitente == null) {?>
                                        
                            <tr>
                                <td colspan="3" class="alert">Você precisa configurar os dados do emitente. >>><a href="<?php echo base_url(); ?>index.php/mapos/emitente">Configurar</a><<<</td>
                            </tr>
                            <?php } else {?>
                            <tr>
                                <td style="width: 10%; text-align: center">#Protocolo: <span ><?php echo $result->idOs?></span> <span>Emissão: <?php echo $result->dataInicial?></span></td>
                            </tr>

                            <?php } ?>
                        </tbody>
                    </table>

            
                    
                   <center><h3><span><?php echo $result->nome?> - <?php echo $result->defeito?></span> <br/></h3></center>

                    <table class="table" style="margin-top: 0">
                        <tbody>
                               
                                    <td style="width: 10%; padding-left: 0">
                                        <ul>
                                            <li>
                                                <h7><span><?php echo $result->osdata?></span></br></h7>
                                                <h7><span><?php echo $result->status?></span></br></h7>
                                            </li>
                                        </ul>
                                    </td>
                                    <td style="width: 40%; padding-left: 0">
                                        <ul>
                                            <li>
                                                <h7><span><?php echo $result->nomeCliente?> - <?php echo $result->telefone?></span><br/></h7> 
                                                <h7><span><?php echo $result->rua?>, <?php echo $result->numero?>, <?php echo $result->complemento?></h7>
                                                <h7><span><?php echo $result->obs?></span><br></h7>
                                                <h7><span><?php echo $result->descricaoProduto?></span><br/></h7>
                                                <h7><span><?php echo $result->observacoes?></span><br/></h7>
                                                
                                            </li>
                                        </ul>
                                    </td>
                                    <td style="width: 10%; padding-left: 0">
                                        <ul>
                                            <li>
                                                <h7><span><?php echo $result->cidade?></span> </h7> </br>
                                               <H7><span><?php echo $result->bairro?><br/></H7>
                                            </li>
                                        </ul>
                                    </td>
                                    <td style="width: 10%; padding-left: 0">
                                        <ul>
                                            <li>
                                                <h7><span>CHEGADA:</span> </h7> </br>
                                                <h7><span>SAÍDA:</span> </h7></br>
                                                <h7><span>ASS:</span> </h7></br>
                                                <h7><span>ALMOÇO: __:__  a  __:__</span> </h7></br>
                                            </li>
                                        </ul>
                                    </td>
                                </tr>
                            </tbody>
                    </table> 
                </div>
                
            </div>                
      </div>
    </div>
  </div>



<script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script> 
<script src="<?php echo base_url();?>assets/js/matrix.js"></script> 

<script>
    window.print();
</script>

</body>
</html>







