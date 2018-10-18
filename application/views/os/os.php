<link rel="stylesheet" href="<?php echo base_url();?>assets/js/jquery-ui/css/smoothness/jquery-ui-1.9.2.custom.css" />
<script type="text/javascript" src="<?php echo base_url()?>assets/js/jquery-ui/js/jquery-ui-1.9.2.custom.js"></script>

<div class="span12" style="margin-left: 0">
    <form method="get" action="<?php echo base_url(); ?>index.php/os/gerenciar">
        <?php if ($this->permission->checkPermission($this->session->userdata('permissao'), 'aOs')) { ?>
            <div class="span2">
                <a href="<?php echo base_url(); ?>index.php/os/adicionar" class="btn btn-success span12"><i class="icon-plus icon-white"></i> Adicionar</a>
            </div>
        <?php } ?>

        <div class="span3">
            <input type="text" name="pesquisa"  id="pesquisa"  placeholder="Pesquisar Cliente" class="span10" value="" >
        </div>
        <div class="span3">
            <input type="text" name="pes"  id="pes"  placeholder="Pesquisar Técnicos" class="span10" value="" >
        </div>
        <div class="span3">
            <input type="text" name="quisa"  id="quisa"  placeholder="Pesquisar Cidade" class="span10" value="" >
        </div>
        <div class="span3">
            <input type="text" name="quis"  id="quis"  placeholder="Pesquisar Bairro" class="span10" value="" >
        </div>
        <div class="span2">
            <select name="garantia" id="garantia" class="span10">
                <option value="">Status Interno</option>
<option value="Aberto">Aberto</option>
                                                <option value="Fechado">Fechado</option>
                                                
            </select>

        </div>
        <div class="span2">
            <select name="status" id="status" class="span10">
                <option value="">Status OS</option>
<option value="Aguardando Agendamento">Aguardando Agendamento</option>
                                                <option value="Aguardando Produção">Aguardando Produção</option>
                                                <option value="Cobrança">Cobrança</option>
                                                <option value="Conserto">Conserto</option>
                                                <option value="Conserto e Manutenção">Conserto e Manutenção</option>
                                                <option value="Entrega">Entrega</option>
                                                 <option value="Faturado">Faturado</option>
                                                <option value="Feedback Cliente">Feedback Cliente</option>
                                                <option value="Manutenção">Manutenção</option>
                                                <option value="Orçamento">Orçamento</option>
                                                <option value="Orçamento de Manutenção">Orçamento de Manutenção</option>
                                                <option value="Orçamento e Conserto">Orçamento e Conserto</option>
                                                <option value="Orçamento e Manutenção">Orçamento e Manutenção</option>
                                                <option value="Orçamento e Trabalho">Orçamento e Trabalho</option>
                                                <option value="Panfletagem">Panfletagem</option>
                                                <option value="Pendência">Pendência</option>
                                                <option value="Retirada">Retirada</option>
                                                <option value="Solicitação de Conserto">Solicitação de Conserto</option>
                                                <option value="Solicitação de Manutenção">Solicitação de Manutenção</option>
                                                <option value="Solicitação de Orçamento">Solicitação de Orçamento</option>
                                                <option value="Solicitação de Visita Técnica">Solicitação de Visita Técnica</option>
                                                <option value="Tarefa Miami">Tarefa Miami</option>
                                                <option value="Término de Trabalho">Término de Trabalho</option>
                                                <option value="Trabalho">Trabalho</option>
                                                <option value="Trabalho e Conserto">Trabalho e Conserto</option>
                                                <option value="Trabalho e Manutenção">Trabalho e Manutenção</option>
                                                <option value="Venda Direta">Venda Direta</option>
                                                <option value="Visita Técnica ">Visita Técnica</option>
            </select>

        </div>

        <div class="span3">
            <input type="text" name="data"  id="data"  placeholder="Data Inicial" class="span6 datepicker" value="">
          <input type="text" name="osdata"  id="osdata"  placeholder="Horário" class="span6" value="" >
        </div>
        <div class="span1">
            <button class="span12 btn"> <i class="icon-search"></i> </button>
        </div>
    </form>
</div>

<?php

if (!$results) {?>
    <div class="widget-box">
     <div class="widget-title">
        <span class="icon">
            <i class="icon-tags"></i>
         </span>
        <h5>Ordens de Serviço</h5>

     </div>

<div class="widget-content nopadding">


<table class="table table-bordered ">
 <thead>
        <tr style="backgroud-color: #2D335B">
            <th>Código</th>
            <th>Cliente</th>
            <th>Bairro</th>
            <th>Cidade</th>
            <th>Técnicos</th>
            <th>Data</th>
            <th>Horário</th>
            <th>Status</th>
            <th>Status Interno</th>
            <th></th>
        </tr>
    </thead>  

        <tr>
            <td colspan="6">Nenhuma OS Cadastrada</td>
        </tr>
    </tbody>
</table>
</div>
</div>
<?php } else {?>


<div class="widget-box">
     <div class="widget-title">
        <span class="icon">
            <i class="icon-tags"></i>
         </span>
        <h5>Ordens de Serviço</h5>

     </div>

<div class="widget-content nopadding">

<table class="table table-bordered ">
    <thead>
        <tr style="backgroud-color: #2D335B">
            <th><a style="margin-right: 1%" href="#" onclick="imprimirSelecionados()" class="btn btn-inverse tip-top" title="Imprimir"><i class="icon-print"></i></a></th>
            <th>Código</th>
            <th>Cliente</th>
            <th>Bairro</th>
            <th>Cidade</th>
            <th>Técnicos</th>
            <th>Data</th>
            <th>Horário</th>
            <th>Status</th>
            <th>Status Interno</th>
            <th></th>
        </tr>
    </thead>  
    <tbody>
        <?php foreach ($results as $r) {
            $dataInicial = date(('d/m/Y'), strtotime($r->dataInicial));
            $dataFinal = date(('d/m/Y'), strtotime($r->dataFinal));

            switch ($r->status) {
                case 'Aguardando Agendamento':
                    $cor = '#8A9B0F';
                    break;
                case 'Aguardando Produção':
                    $cor = '#0d615c';
                    break;
                case 'Cobrança':
                    $cor = '#CDB380';
                    break;
                case 'Conserto':
                    $cor = '#E97F02';
                    break;
                case 'Conserto e Manutenção':
                    $cor = '#0B486B';
                    break;
                case 'Entrega':
                    $cor = '#B266FF';
                    break;
                case 'Faturado':
                    $cor = '#B266FF';
                    break;
                case 'Feedback Cliente':
                    $cor = '#56130e';
                    break;
                case 'Manutenção':
                    $cor = '#336521';
                    break;
                case 'Orçamento':
                    $cor = '#76491e';
                    break;    
                case 'Orçamento de Manutenção':
                    $cor = '#5f5f5f';
                    break;  
                case 'Orçamento e Conserto':
                    $cor = '#837b00';
                    break;
                case 'Orçamento e Manutenção':
                    $cor = '#0d4f28';
                    break;
                case 'Orçamento e Trabalho':
                    $cor = '#4d7b7e';
                    break;
                case 'Panfletagem':
                    $cor = '#173e66';
                    break;
                case 'Pendência':
                    $cor = '#281aaa';
                    break;
                case 'Retirada':
                    $cor = '#02445d';
                    break;
                case 'Solicitação de Conserto':
                    $cor = '#54138c';
                    break;
                case 'Solicitação de Manutenção':
                    $cor = '#73135b';
                    break;
                case 'Solicitação de Orçamento':
                    $cor = '#981d5d';
                    break;
                    case 'Solicitação de Visita Técnica':
                    $cor = '#861212';
                    break;
                case 'Tarefa Miami':
                    $cor = '#ea5858';
                    break;
                case 'Término de Trabalho':
                    $cor = '#5b3535';
                    break;
                     case 'Trabalho':
                    $cor = '#104c0e';
                    break;
                case 'Trabalho e Conserto':
                    $cor = '#433252';
                    break;
                case 'Trabalho e Manutenção':
                    $cor = '#003754';
                    break;
                case 'Venda Direta':
                    $cor = '#5e5e54';
                    break;
                case 'Visita Técnica':
                    $cor = '#9b6432';
                    break;
                default:
                    $cor = '#000';
                    break;
            }

            echo '<tr>';
            echo '<td><center><input type="checkbox" name="os" value="'.$r->idOs.'" /></center></td>';
            echo '<td>'.$r->codigoCliente.'</td>';
            echo '<td>'.$r->nomeCliente.'</td>';
            echo '<td>'.$r->bairro.'</td>';
            echo '<td>'.$r->cidade.'</td>';
           echo '<td>'.$r->nome.' - '.$r->defeito.'</td>';
            echo '<td>'.$dataInicial.'</td>';
            echo '<td>'.$r->osdata.'</td>';
             '<td>'.$dataFinal.'</td>';
            echo '<td><span class="badge" style="background-color: '.$cor.'; border-color: '.$cor.'">'.$r->status.'</span> </td>';
            echo '<td><span class="badge" style="background-color: '.$cor.'; border-color: '.$cor.'">'.$r->garantia.'</span> </td>';
            
            
            echo '<td>';
            if ($this->permission->checkPermission($this->session->userdata('permissao'), 'vOs')) {
                echo '<a style="margin-right: 1%" href="'.base_url().'index.php/os/visualizar/'.$r->idOs.'" class="btn tip-top" title="Ver mais detalhes"><i class="icon-eye-open"></i></a>';
                echo '<a style="margin-right: 1%" href="'.base_url().'index.php/os/imprimir/'.$r->idOs.'" target="_blank" class="btn btn-inverse tip-top" title="Imprimir"><i class="icon-print"></i></a>';
            }
            if ($this->permission->checkPermission($this->session->userdata('permissao'), 'eOs')) {
                echo '<a style="margin-right: 1%" href="'.base_url().'index.php/os/editar/'.$r->idOs.'" class="btn btn-info tip-top" title="Editar OS"><i class="icon-pencil icon-white"></i></a>';
            }
            if ($this->permission->checkPermission($this->session->userdata('permissao'), 'dOs')) {
                echo '<a href="#modal-excluir" role="button" data-toggle="modal" os="'.$r->idOs.'" class="btn btn-danger tip-top" title="Excluir OS"><i class="icon-remove icon-white"></i></a>  ';
            }
                               
                      
            echo  '</td>';
            echo '</tr>';
}?>
        <tr>
            
        </tr>
    </tbody>
</table>
</div>
</div>
    
<?php echo $this->pagination->create_links();
}?>


<!-- Modal -->
<div id="modal-excluir" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <form action="<?php echo base_url() ?>index.php/os/excluir" method="post" >
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h5 id="myModalLabel">Excluir OS</h5>
  </div>
  <div class="modal-body">
    <input type="hidden" id="idOs" name="id" value="" />
    <h5 style="text-align: center">Deseja realmente excluir esta OS?</h5>
  </div>
  <div class="modal-footer">
    <button class="btn" data-dismiss="modal" aria-hidden="true">Cancelar</button>
    <button class="btn btn-danger">Excluir</button>
  </div>
  </form>
</div>


<script type="text/javascript">
$(document).ready(function(){


   $(document).on('click', 'a', function(event) {
        
        var os = $(this).attr('os');
        $('#idOs').val(os);

    });

   $(document).on('click', '#excluir-notificacao', function(event) {
       event.preventDefault();
       
       $.ajax({
           url: '<?php echo site_url() ?>/os/excluir_notificacao',
           type: 'GET',
           dataType: 'json',
       })
       .done(function(data) {
           if(data.result == true){
              alert('Notificação excluída com sucesso');
              location.reload();
           }else{
              alert('Ocorreu um problema ao tentar exlcuir notificação.');
           }   


       });
       

   });

   $(".datepicker" ).datepicker({ dateFormat: 'dd/mm/yy' });

});

function imprimirSelecionados(){

    var url = "<?php echo base_url() ?>index.php/os/imprimir/";
    var osSelecionadas = [];
    $('input[name="os"]:checked').each(function(){
        osSelecionadas.push(this.value);
    })

    window.open(url + osSelecionadas.join("-"));


}
</script>