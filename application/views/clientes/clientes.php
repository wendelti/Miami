<div class="span12" style="margin-left: 0">
    <form method="get" action="<?php echo base_url(); ?>index.php/clientes/gerenciar">
        <?php if ($this->permission->checkPermission($this->session->userdata('permissao'), 'aCliente')) { ?>
<div class="span2">
 
    <a href="<?php echo base_url();?>index.php/clientes/adicionar" class="btn btn-success"><i class="icon-plus icon-white"></i> Adicionar Cliente</a>   </div>
        <?php } ?>

        <div class="span3">
            <input type="text" name="codigoCliente"  id="p1"  placeholder="Pesquisar Codigo" class="span10" value="" >
        </div>
        <div class="span3">
            <input type="text" name="nomeCliente"  id="p2"  placeholder="Pesquisar Clientes" class="span10" value="" >
        </div>
        <div class="span3">
            <input type="text" name="rua"  id="p3"  placeholder="Pesquisar Rua" class="span10" value="" >
        </div>
        <div class="span3">
            <input type="text" name="bairro"  id="p4"  placeholder="Pesquisar Bairro" class="span10" value="" >
        </div>
        <div class="span3">
            <input type="text" name="cidade"  id="p5"  placeholder="Pesquisar Cidade" class="span10" value="" >
        </div>
        
        <div class="span3">
            <input type="text" name="data"  id="p6"  placeholder="Pesquisar Data Nascimento" class="span10" value="" >
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
                <i class="icon-user"></i>
            </span>
            <h5>Clientes</h5>

        </div>

        <div class="widget-content nopadding">
            <table class="table table-bordered">
                <thead>
                   <tr>
            <th>Codigo</th>
            <th>Nome / Nome Fantasia</th>
            <th>Rua</th>
            <th>Numero</th>
            <th>Bairro</th>
            <th>Cidade</th>
            <th>Data Nascimento</th>
            <th></th>
        </tr>
                </thead>
                <tbody>
                    <tr>
                        <td colspan="5">Nenhum Cliente Cadastrado</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

<?php } else {
    

?>
<div class="widget-box">
     <div class="widget-title">
        <span class="icon">
            <i class="icon-user"></i>
         </span>
        <h5>Clientes</h5>

     </div>

<div class="widget-content nopadding">


<table class="table table-bordered ">
    <thead>
        <tr>
            <th>Codigo</th>
            <th>Nome / Nome Fantasia</th>
            <th>Rua</th>
            <th>Numero</th>
            <th>Bairro</th>
            <th>Cidade</th>
            <th>Data Nascimento</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($results as $r) {
            echo '<tr>';
            echo '<td>'.$r->codigoCliente.'</td>';
            echo '<td>'.$r->nomeCliente.'</td>';
            echo '<td>'.$r->rua.'</td>';
            echo '<td>'.$r->numero.'</td>';
            echo '<td>'.$r->bairro.'</td>';
            echo '<td>'.$r->cidade.'</td>';
            echo '<td>'.$r->data.'</td>';
            echo '<td>';
            if ($this->permission->checkPermission($this->session->userdata('permissao'), 'vCliente')) {
                echo '<a href="'.base_url().'index.php/clientes/visualizar/'.$r->idClientes.'" style="margin-right: 1%" class="btn tip-top" title="Ver mais detalhes"><i class="icon-eye-open"></i></a>';
            }
            if ($this->permission->checkPermission($this->session->userdata('permissao'), 'eCliente')) {
                echo '<a href="'.base_url().'index.php/clientes/editar/'.$r->idClientes.'" style="margin-right: 1%" class="btn btn-info tip-top" title="Editar Cliente"><i class="icon-pencil icon-white"></i></a>';
            }
            if ($this->permission->checkPermission($this->session->userdata('permissao'), 'dCliente')) {
                echo '<a href="#modal-excluir" role="button" data-toggle="modal" cliente="'.$r->idClientes.'" style="margin-right: 1%" class="btn btn-danger tip-top" title="Excluir Cliente"><i class="icon-remove icon-white"></i></a>';
            }

              
            echo '</td>';
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
  <form action="<?php echo base_url() ?>index.php/clientes/excluir" method="post" >
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h5 id="myModalLabel">Excluir Cliente</h5>
  </div>
  <div class="modal-body">
    <input type="hidden" id="idCliente" name="id" value="" />
    <h5 style="text-align: center">Deseja realmente excluir este cliente e os dados associados a ele (OS, Vendas, Receitas)?</h5>
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
        
        var cliente = $(this).attr('cliente');
        $('#idCliente').val(cliente);

    });

});

</script>
