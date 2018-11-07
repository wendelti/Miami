<?php

class Clientes extends CI_Controller
{
    
    /**
     * author: Ramon Silva
     * email: silva018-mg@yahoo.com.br
     *
     */
    
    function __construct()
    {
        parent::__construct();
        if ((!session_id()) || (!$this->session->userdata('logado'))) {
            redirect('mapos/login');
        }
            $this->load->helper(array('codegen_helper'));
            $this->load->model('clientes_model', '', true);
            $this->data['menuClientes'] = 'clientes';
    }
    
    function index()
    {
        $this->gerenciar();
    }

    function gerenciar()
    {
               
        $this->load->library('pagination');

        
        $where_array = array();

        $codigoCliente = $this->input->get('codigoCliente');
        if ($codigoCliente) {
            $where_array['codigoCliente'] = $codigoCliente;
        }
                
        $nomeCliente = $this->input->get('nomeCliente');
        if ($nomeCliente) {
            $where_array['nomeCliente'] = $nomeCliente;
        }
                
        $rua = $this->input->get('rua');
        if ($rua) {
            $where_array['rua'] = $rua;
        }
              
        $bairro = $this->input->get('bairro');
        if ($bairro) {
            $where_array['bairro'] = $bairro;
        }
    
        $cidade = $this->input->get('cidade');
        if ($cidade) {
            $where_array['cidade'] = $cidade;
        }
        
        $data = $this->input->get('data');
        if ($data) {
            $where_array['data'] = $data;
        }
                

        if (!$this->permission->checkPermission($this->session->userdata('permissao'), 'vCliente')) {
            $this->session->set_flashdata('error', 'Você não tem permissão para visualizar clientes.');
            redirect(base_url());
        }
        $this->load->library('table');
        $this->load->library('pagination');
        
   
        $config['base_url'] = base_url().'index.php/clientes/gerenciar/';
        $config['total_rows'] = $this->clientes_model->count('clientes');
        $config['per_page'] = 5000;
        $config['next_link'] = 'Próxima';
        $config['prev_link'] = 'Anterior';
        $config['full_tag_open'] = '<div class="pagination alternate"><ul>';
        $config['full_tag_close'] = '</ul></div>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li><a style="color: #2D335B"><b>';
        $config['cur_tag_close'] = '</b></a></li>';
        $config['prev_tag_open'] = '<li>';
        $config['prev_tag_close'] = '</li>';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['first_link'] = 'Primeira';
        $config['last_link'] = 'Última';
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';
        
        $this->pagination->initialize($config);
        
        $this->data['results'] = $this->clientes_model->get('clientes', 'idClientes, codigoCliente, nomeCliente,documento,telefone,data,celular,email,rua,numero,bairro,cidade,estado,cep', $where_array, $config['per_page'], $this->uri->segment(3));
        
        $this->data['view'] = 'clientes/clientes';
        $this->load->view('tema/topo', $this->data);
      
       
        
    }
    
    function adicionar()
    {
        if (!$this->permission->checkPermission($this->session->userdata('permissao'), 'aCliente')) {
            $this->session->set_flashdata('error', 'Você não tem permissão para adicionar clientes.');
            redirect(base_url());
        }

        $this->load->library('form_validation');
        $this->data['custom_error'] = '';

        if ($this->form_validation->run('clientes') == false) {
            $this->data['custom_error'] = (validation_errors() ? '<div class="form_error">' . validation_errors() . '</div>' : false);
        } else {
            $data = array(
                'codigoCliente' => set_value('codigoCliente'),
                'nomeCliente' => set_value('nomeCliente'),
                'nomeCompleto' => set_value('nomeCompleto'),
                'documento' => set_value('documento'),
                'data' => set_value('data'),
                'rgie' => set_value('rgie'),
                'info' => set_value('info'),
                'telefone' => set_value('telefone'),
                'celular' => $this->input->post('celular'),
                'email' => set_value('email'),
                'obs' => set_value('obs'),
                'como' => set_value('como'),
                'rua' => set_value('rua'),
                'numero' => set_value('numero'),
                'bairro' => set_value('bairro'),
                'cidade' => set_value('cidade'),
                'estado' => set_value('estado'),
                'complemento' => set_value('complemento'),
                
                'cep' => set_value('cep'),
                'dataCadastro' => date('Y-m-d')
            );

            if ($this->clientes_model->add('clientes', $data) == true) {
                $this->session->set_flashdata('success', 'Cliente adicionado com sucesso!');
                redirect(base_url() . 'index.php/clientes/adicionar/');
            } else {
                $this->data['custom_error'] = '<div class="form_error"><p>Ocorreu um erro.</p></div>';
            }
        }
        $this->data['view'] = 'clientes/adicionarCliente';
        $this->load->view('tema/topo', $this->data);

    }

    function editar()
    {

        if (!$this->uri->segment(3) || !is_numeric($this->uri->segment(3))) {
            $this->session->set_flashdata('error', 'Item não pode ser encontrado, parâmetro não foi passado corretamente.');
            redirect('mapos');
        }


        if (!$this->permission->checkPermission($this->session->userdata('permissao'), 'eCliente')) {
            $this->session->set_flashdata('error', 'Você não tem permissão para editar clientes.');
            redirect(base_url());
        }

        $this->load->library('form_validation');
        $this->data['custom_error'] = '';

        if ($this->form_validation->run('clientes') == false) {
            $this->data['custom_error'] = (validation_errors() ? '<div class="form_error">' . validation_errors() . '</div>' : false);
        } else {
            $data = array(
                'nomeCliente' => set_value('nomeCliente'),
                'nomeCompleto' => set_value('nomeCompleto'),
                'documento' => set_value('documento'),
                'data' => set_value('data'),
                'rgie' => set_value('rgie'),
                'info' => set_value('info'),
                'telefone' => set_value('telefone'),
                'celular' => $this->input->post('celular'),
                'email' => set_value('email'),
                'rua' => set_value('rua'),
                'numero' => set_value('numero'),
                'bairro' => set_value('bairro'),
                'cidade' => set_value('cidade'),
                'estado' => set_value('estado'),
                'complemento' => set_value('complemento'),
                'obs' => set_value('obs'),
                'como' => set_value('como'),
                'cep' => set_value('cep'),
            );

            if ($this->clientes_model->edit('clientes', $data, 'idClientes', $this->input->post('idClientes')) == true) {
                $this->session->set_flashdata('success', 'Cliente editado com sucesso!');
                redirect(base_url() . 'index.php/clientes/editar/'.$this->input->post('idClientes'));
            } else {
                $this->data['custom_error'] = '<div class="form_error"><p>Ocorreu um erro</p></div>';
            }
        }


        $this->data['result'] = $this->clientes_model->getById($this->uri->segment(3));
        $this->data['view'] = 'clientes/editarCliente';
        $this->load->view('tema/topo', $this->data);

    }

    public function visualizar()
    {

        if (!$this->uri->segment(3) || !is_numeric($this->uri->segment(3))) {
            $this->session->set_flashdata('error', 'Item não pode ser encontrado, parâmetro não foi passado corretamente.');
            redirect('mapos');
        }

        if (!$this->permission->checkPermission($this->session->userdata('permissao'), 'vCliente')) {
            $this->session->set_flashdata('error', 'Você não tem permissão para visualizar clientes.');
            redirect(base_url());
        }

        $this->data['custom_error'] = '';
        $this->data['result'] = $this->clientes_model->getById($this->uri->segment(3));
        $this->data['results'] = $this->clientes_model->getOsByCliente($this->uri->segment(3));
        $this->data['view'] = 'clientes/visualizar';
        $this->load->view('tema/topo', $this->data);

        
    }
    
    public function excluir()
    {

            
        if (!$this->permission->checkPermission($this->session->userdata('permissao'), 'dCliente')) {
            $this->session->set_flashdata('error', 'Você não tem permissão para excluir clientes.');
            redirect(base_url());
        }

            
            $id =  $this->input->post('id');
        if ($id == null) {

            $this->session->set_flashdata('error', 'Erro ao tentar excluir cliente.');
            redirect(base_url().'index.php/clientes/gerenciar/');
        }

            //$id = 2;
            // excluindo OSs vinculadas ao cliente
            $this->db->where('clientes_id', $id);
            $os = $this->db->get('os')->result();

        if ($os != null) {

            foreach ($os as $o) {
                $this->db->where('os_id', $o->idOs);
                $this->db->delete('servicos_os');

                $this->db->where('os_id', $o->idOs);
                $this->db->delete('produtos_os');


                $this->db->where('idOs', $o->idOs);
                $this->db->delete('os');
            }
        }

            // excluindo Vendas vinculadas ao cliente
            $this->db->where('clientes_id', $id);
            $vendas = $this->db->get('vendas')->result();

        if ($vendas != null) {

            foreach ($vendas as $v) {
                $this->db->where('vendas_id', $v->idVendas);
                $this->db->delete('itens_de_vendas');


                $this->db->where('idVendas', $v->idVendas);
                $this->db->delete('vendas');
            }
        }

            //excluindo receitas vinculadas ao cliente
            $this->db->where('clientes_id', $id);
            $this->db->delete('lancamentos');



            $this->clientes_model->delete('clientes', 'idClientes', $id);

            $this->session->set_flashdata('success', 'Cliente excluido com sucesso!');
            redirect(base_url().'index.php/clientes/gerenciar/');
    }
}
