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
                                <td style="width: 25%"><img src=" <?php echo $emitente[0]->url_logo; ?> "></td>
                                <td></span> <span>CNPJ - <?php echo $emitente[0]->cnpj; ?> -  <?php echo $emitente[0]->rua.', '.$emitente[0]->numero.' - '.$emitente[0]->bairro.' - '.$emitente[0]->cidade.' - '.$emitente[0]->uf; ?> </span>  <span></td>
                                <td style="width: 10%; text-align: center">#Protocolo: <span ><?php echo $result->idOs?></span> <span>Emissão: <?php echo date('d/m/Y')?></span></td>
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
                                                <h7><span><?php echo $result->cidade?></span> </h7> 
                                               <H7><span><?php echo $result->bairro?><br/></H7>
                                            </li>
                                        </ul>
                                    </td>
                                    <td style="width: 10%; padding-left: 0">
                                        <ul>
                                            <li>
                                                <h7><span>CHEGADA:</span> </h7> </br>
                                                <h7><span>SAÍDA:</span> </h7></br>
                                                <h7><span>ASS:</span> </h7>
                                            </li>
                                        </ul>
                                    </td>
                                </tr>
                            </tbody>
                    </table> 
                </div>
                <div style="margin-top: 0; padding-top: 0">

                    <?php if ($result->descricaoProduto != null) {?>
                    <hr style="margin-top: 0">
                    
                    <?php }?>

                    <?php if ($result->defeito != null) {?>
                    
                    <?php }?>
                    <?php if ($result->laudoTecnico != null) {?>
                    <hr style="margin-top: 0">
                    <h6>Laudo Técnico</h6>
                    <p>
                        <?php echo $result->laudoTecnico?>
                    </p>
                    <?php }?>
                    <?php if ($result->observacoes != null) {?>
                    <hr style="margin-top: 0">
                    
                    <?php }?>

                        <?php if ($produtos != null) {?>
                        <br />
                        <table class="table table-bordered" id="tblProdutos">
                                    <thead>
                                        <tr>
                                            <th>Produto</th>
                                            <th>Quantidade</th>
                                            <th>Sub-total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        
                                        foreach ($produtos as $p) {

                                            $totalProdutos = $totalProdutos + $p->subTotal;
                                            echo '<tr>';
                                            echo '<td>'.$p->descricao.'</td>';
                                            echo '<td>'.$p->quantidade.'</td>';
                                            
                                            echo '<td>R$ '.number_format($p->subTotal, 2, ',', '.').'</td>';
                                            echo '</tr>';
                                        }?>

                                        <tr>
                                            <td colspan="2" style="text-align: right"><strong>Total:</strong></td>
                                            <td><strong>R$ <?php echo number_format($totalProdutos, 2, ',', '.');?></strong></td>
                                        </tr>
                                    </tbody>
                                </table>
                                <?php }?>
                        
                        <?php if ($servicos != null) {?>
                        <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Serviço</th>
                                                <th>Sub-total</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            setlocale(LC_MONETARY, 'en_US');
                                            foreach ($servicos as $s) {
                                                $preco = $s->preco;
                                                $totalServico = $totalServico + $preco;
                                                echo '<tr>';
                                                echo '<td>'.$s->nome.'</td>';
                                                echo '<td>R$ '.number_format($s->preco, 2, ',', '.').'</td>';
                                                echo '</tr>';
                                            }?>

                                        <tr>
                                            <td colspan="1" style="text-align: right"><strong>Total:</strong></td>
                                            <td><strong>R$ <?php  echo number_format($totalServico, 2, ',', '.');?></strong></td>
                                        </tr>
                                        </tbody>
                                    </table>
                        <?php }?>
                        <hr />
                    
                        

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







