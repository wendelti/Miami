<link rel="stylesheet" href="<?php echo base_url();?>assets/js/jquery-ui/css/smoothness/jquery-ui-1.9.2.custom.css" />
<script type="text/javascript" src="<?php echo base_url()?>assets/js/jquery-ui/js/jquery-ui-1.9.2.custom.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>assets/js/jquery.validate.js"></script>
<div class="row-fluid" style="margin-top:0">
    <div class="span12">
        <div class="widget-box">
            <div class="widget-title">
                <span class="icon">
                    <i class="icon-tags"></i>
                </span>
                <h5>Cadastro de OS</h5>
            </div>
            <div class="widget-content nopadding">
                

                <div class="span12" id="divProdutosServicos" style=" margin-left: 0">
                    <ul class="nav nav-tabs">
                        <li class="active" id="tabDetalhes"><a href="#tab1" data-toggle="tab">Detalhes da OS</a></li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active" id="tab1">

                            <div class="span12" id="divCadastrarOs">
                                <?php if ($custom_error == true) { ?>
                                <div class="span12 alert alert-danger" id="divInfo" style="padding: 1%;">Dados incompletos, verifique os campos com asterisco ou se selecionou corretamente cliente e responsável.</div>
                                <?php } ?>
                                <form action="<?php echo current_url(); ?>" method="post" id="formOs">

                                    <div class="span12" style="padding: 1%">
                                        
                                            <label for="cliente">Cliente<span class="required">*</span></label>
                                            <input id="cliente" class="span12" type="text" name="cliente" value=""  />
                                            <input id="clientes_id" class="span12" type="hidden" name="clientes_id" value=""  />
                                        
                                        
                                            <label for="tecnico">Técnico.Responsável<span class="required">*</span></label>
                                            <input id="tecnico" class="span12" type="text" name="tecnico" value=""  />
                                            <input id="usuarios_id" class="span12" type="hidden" name="usuarios_id" value=""  />
                                            
                                            
                                            <label for="defeito">Técnico Ajudante</label>
                                            <input class="span12" type="text" name="defeito" id="defeito" value=""></input>
                                        
                                            
                                            
                                    </div>
                                    <div class="span12" style="padding: 1%; margin-left: 0">
                                        <div class="span3">
                                            <label for="status">Status<span class="required">*</span></label>
                                            <select class="span12" name="status" id="status" value="">
                            
                                                
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
                                        <label for="garantia">Status Interno<span class="required">*</span></label>
            <select name="garantia" id="garantia" class="span10">
                            <label for="status">Status Interno<span class="required">*</span></label>
<option value="Aberto">Aberto</option>
                                                <option value="Fechado">Fechado</option>
                                                
            </select>
            

        </div>
                                        <div class="span3">
                                            <label for="dataInicial">Data Inicial<span class="required">*</span></label>
                                            <input id="dataInicial" class="span12 datepicker" type="text" name="dataInicial" value="<?php echo date('d/m/Y'); ?>"  />
                                        </div>
                                        <div class="span3">
                                           <label for="osdata">Horário</label>
                                            <input class="span12" type="text" name="osdata" id="osdata" value=""></input>
                                        </div>
                                        
                        
                                        
                                    </div>

                                    <div class="span12" style="padding: 1%; margin-left: 0">

                                        
                                            <label for="descricaoProduto">Descrição Produto/Serviço</label>
                                            <textarea class="span12" name="descricaoProduto" id="descricaoProduto" cols="30" rows="5"></textarea>
                                        

                                    </div>
                                    <div class="span12" style="padding: 1%; margin-left: 0">
                                        <div class="span6">
                                            <label for="observacoes">Observações</label>
                                            <textarea class="span12" name="observacoes" id="observacoes" cols="30" rows="5"></textarea>
                                        </div>
                                        <div class="span6">
                                            <label for="laudoTecnico">Laudo Técnico</label>
                                            <textarea class="span12" name="laudoTecnico" id="laudoTecnico" cols="30" rows="5"></textarea>
                                        </div>
                                    </div>
                                    <div class="span12" style="padding: 1%; margin-left: 0">
                                        <div class="span6 offset3" style="text-align: center">
                                            <button class="btn btn-success" id="btnContinuar"><i class="icon-share-alt icon-white"></i> Continuar</button>
                                            <a href="<?php echo base_url() ?>index.php/os" class="btn"><i class="icon-arrow-left"></i> Voltar</a>
                                        </div>
                                    </div>
                                </form>
                            </div>

                        </div>

                    </div>

                </div>

                
.
             
        </div>
        
    </div>
</div>
</div>



<script type="text/javascript">
$(document).ready(function(){

      $("#cliente").autocomplete({
            source: "<?php echo base_url(); ?>index.php/os/autoCompleteCliente",
            minLength: 1,
            select: function( event, ui ) {

                 $("#clientes_id").val(ui.item.id);
                

            }
      });

      $("#tecnico").autocomplete({
            source: "<?php echo base_url(); ?>index.php/os/autoCompleteUsuario",
            minLength: 1,
            select: function( event, ui ) {

                 $("#usuarios_id").val(ui.item.id);
                 


            }
      });
      
      $("#defeito").autocomplete({
            source: "<?php echo base_url(); ?>index.php/os/autoCompleteUsuario",
            minLength: 1,
            select: function( event, ui ) {

                 $("#defeito").val(ui.item.id);
                 


            }
      });
    
      
  

      $("#formOs").validate({
          rules:{
             cliente: {required:true},
             tecnico: {required:true},
             dataInicial: {required:true}
          },
          messages:{
             cliente: {required: 'Campo Requerido.'},
             tecnico: {required: 'Campo Requerido.'},
             dataInicial: {required: 'Campo Requerido.'}
          },

            errorClass: "help-inline",
            errorElement: "span",
            highlight:function(element, errorClass, validClass) {
                $(element).parents('.control-group').addClass('error');
            },
            unhighlight: function(element, errorClass, validClass) {
                $(element).parents('.control-group').removeClass('error');
                $(element).parents('.control-group').addClass('success');
            }
       });

    $(".datepicker" ).datepicker({ dateFormat: 'dd/mm/yy' });
   
});

</script>

