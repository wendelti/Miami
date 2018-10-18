<?php
class Os_model extends CI_Model
{

    /**
     * author: Ramon Silva
     * email: silva018-mg@yahoo.com.br
     *
     */
    
    function __construct()
    {
        parent::__construct();
    }

    
    function get($table, $fields, $where = '', $perpage = 0, $start = 0, $one = false, $array = 'array')
    {
        
        $this->db->select($fields.',clientes.codigoCliente');
        $this->db->select($fields.',clientes.bairro');
        $this->db->select($fields.',clientes.cidade');
        $this->db->from($table);
        $this->db->join('clientes', 'clientes.idClientes = os.clientes_id');
        $this->db->join('clientes', 'clientes.bairro = os.clientes_id');
        $this->db->join('clientes', 'clientes.cidade = os.clientes_id');
        $this->db->join('clientes', 'os.defeito = os.clientes_id');
        $this->db->limit($perpage, $start);
        $this->db->order_by('codigoCliente', 'desc');
        if ($where) {
            $this->db->where($where);
        }
        
        $query = $this->db->get();
        
        $result =  !$one  ? $query->result() : $query->row();
        return $result;
    }


    function getOs($table, $fields, $where = '', $perpage = 0, $start = 0, $one = false, $array = 'array')
    {

        $lista_clientes = array();
        if ($where) {

            if (array_key_exists('pesquisa', $where)) {
                $this->db->select('idClientes');
                $this->db->like('nomeCliente', $where['pesquisa']);
                $this->db->or_like('codigoCliente', $where['pesquisa']);
                $this->db->limit(5);
                $clientes = $this->db->get('clientes')->result();

                foreach ($clientes as $c) {
                    array_push($lista_clientes, $c->idClientes);
                }

            }
        }
        
        $lista_clientess = array();
        if ($where) {

            if (array_key_exists('quisa', $where)) {
                $this->db->select('idClientes');
                $this->db->like('cidade', $where['quisa']);
                $this->db->limit(5);
                $clientes = $this->db->get('clientes')->result();

                foreach ($clientes as $c) {
                    array_push($lista_clientess, $c->idClientes);
                }

            }
        }
        
        $lista_clientesss = array();
        if ($where) {

            if (array_key_exists('quis', $where)) {
                $this->db->select('idClientes');
                $this->db->like('bairro', $where['quis']);
                $this->db->limit(5);
                $clientes = $this->db->get('clientes')->result();

                foreach ($clientes as $c) {
                    array_push($lista_clientesss, $c->idClientes);
                }

            }
        }
       
       
        $lista_clientesssss = array();
        if ($where) {

            if (array_key_exists('pes', $where)) {
                $this->db->select('idUsuarios');
                $this->db->like('nome', $where['pes']);
                $this->db->limit(5);
                $usuarios = $this->db->get('usuarios')->result();

                foreach ($usuarios as $c) {
                    array_push($lista_clientesssss, $c->idUsuarios);
                }

            }}
            
             $lista_clientessssss = array();
        if ($where) {
            
            if (array_key_exists('pes', $where)) {
                $this->db->select('idOs');
                $this->db->like('defeito', $where['pes']);
                $this->db->limit(5);
                $os = $this->db->get('os')->result();

                foreach ($os as $c) {
                    array_push($lista_clientessssss, $c->idOs);
                }

            }}
        

        $this->db->select($fields.',clientes.nomeCliente, usuarios.nome, clientes.bairro, clientes.cidade, os.defeito, clientes.codigoCliente');
        $this->db->from($table);
        $this->db->join('clientes', 'clientes.idClientes = os.clientes_id');
        $this->db->join('usuarios', 'usuarios.idUsuarios = os.usuarios_id', 'left');

        // condicionais da pesquisa

        // condicional de status
        if (array_key_exists('status', $where)) {
            $this->db->where('status', $where['status']);
        }
        
         // condicional de status
        if (array_key_exists('garantia', $where)) {
            $this->db->where('garantia', $where['garantia']);
        }
        
        // condicional de status
        if (array_key_exists('osdata', $where)) {
            $this->db->where('osdata', $where['osdata']);
        }

        // condicional de clientes
        if (array_key_exists('pesquisa', $where)) {
            if ($lista_clientes != null) {
                $this->db->where_in('os.clientes_id', $lista_clientes);
            }
        }
        
        // condicional de clientes
        if (array_key_exists('quisa', $where)) {
            if ($lista_clientess != null) {
                $this->db->where_in('os.clientes_id', $lista_clientess);
            }
        }
        
        if (array_key_exists('quis', $where)) {
            if ($lista_clientesss != null) {
                $this->db->where_in('os.clientes_id', $lista_clientesss);
            }
        }
        if (array_key_exists('pes', $where)) {
            if ($lista_clientesssss != null) {
                $this->db->where_in('os.usuarios_id', $lista_clientesssss);
            }
        }
        
        if (array_key_exists('pes', $where)) {
            if ($lista_clientessssss != null) {
                $this->db->where_in('os.clientes_id', $lista_clientessssss);
            }
        }

        // condicional data inicial
        if (array_key_exists('de', $where)) {
            $this->db->where('dataInicial >=', $where['de']);
        }
        // condicional data final
        if (array_key_exists('ate', $where)) {

            $this->db->where('dataFinal <=', $where['ate']);
        }
        
        $this->db->limit($perpage, $start);


        $this->db->order_by('os.idOs', 'desc');
        $query = $this->db->get();

        $result =  !$one  ? $query->result() : $query->row();
        return $result;
    }

    function getById($id)
    {
        $this->db->select('os.*, clientes.*, usuarios.telefone, usuarios.email,usuarios.nome');
        $this->db->from('os');
        $this->db->join('clientes', 'clientes.idClientes = os.clientes_id');
        $this->db->join('usuarios', 'usuarios.idUsuarios = os.usuarios_id');
        $this->db->where('os.idOs', $id);
        $this->db->limit(1);
        $os = $this->db->get()->row();
        $os->historico = $this->db->where('idOs', $os->idOs)->order_by('dataAlteracao desc')->get('historico_os')->result();
        return $os;
    }

    public function getProdutos($id = null)
    {
        
        $this->db->select('produtos_os.*, produtos.*');
        $this->db->from('produtos_os');
        $this->db->join('produtos', 'produtos.idProdutos = produtos_os.produtos_id');
        $this->db->where('os_id', $id);
        return $this->db->get()->result();
    }

    public function getServicos($id = null)
    {
        $this->db->select('servicos_os.*, servicos.*');
        $this->db->from('servicos_os');
        $this->db->join('servicos', 'servicos.idServicos = servicos_os.servicos_id');
        $this->db->where('os_id', $id);
        return $this->db->get()->result();
    }
    
    function add($table, $data, $returnId = false)
    {

        $this->db->insert($table, $data);
        if ($this->db->affected_rows() == '1') {
            if ($returnId == true) {
                return $this->db->insert_id($table);
            }
            return true;
        }
        
        return false;
    }
    
    function edit($table, $data, $fieldID, $ID, $usuarioQueEstaEditando)
    {
        
        $os = $this->db->where($fieldID, $ID)->get('os')->row();
        $os->usuarioAlteracao = $usuarioQueEstaEditando;
        $this->db->insert('historico_os', $os);

        $this->db->where($fieldID, $ID);
        $this->db->update($table, $data);

        if ($this->db->affected_rows() >= 0) {
            return true;
        }
        
        return false;
    }
    
    function delete($table, $fieldID, $ID)
    {
        $this->db->where($fieldID, $ID);
        $this->db->delete($table);
        if ($this->db->affected_rows() == '1') {
            return true;
        }
        
        return false;
    }

    function count($table)
    {
        return $this->db->count_all($table);
    }

    public function autoCompleteProduto($q)
    {

        $this->db->select('*');
        $this->db->limit(5);
        $this->db->like('descricao', $q);
        $query = $this->db->get('produtos');
        if ($query->num_rows() > 0) {
            foreach ($query->result_array() as $row) {
                $row_set[] = array('label'=>$row['descricao'].' | Preço: R$ '.$row['precoVenda'].' | Estoque: '.$row['estoque'],'estoque'=>$row['estoque'],'id'=>$row['idProdutos'],'preco'=>$row['precoVenda']);
            }
            echo json_encode($row_set);
        }
    }

    public function autoCompleteProdutoSaida($q)
    {
        
        $this->db->select('*');
        $this->db->limit(5);
        $this->db->like('descricao', $q);
        $this->db->where('saida', 1);
        $query = $this->db->get('produtos');
        if ($query->num_rows() > 0) {
            foreach ($query->result_array() as $row) {
                $row_set[] = array('label'=>$row['descricao'].' | Preço: R$ '.$row['precoVenda'].' | Estoque: '.$row['estoque'],'estoque'=>$row['estoque'],'id'=>$row['idProdutos'],'preco'=>$row['precoVenda']);
            }
            echo json_encode($row_set);
        }
    }
    

    public function autoCompleteCliente($q)
    {

        $this->db->select('*');
        $this->db->limit(5);
        $this->db->like('codigoCliente', $q);
        $this->db->or_like('nomeCliente', $q);
        $query = $this->db->get('clientes');
        if ($query->num_rows() > 0) {
            foreach ($query->result_array() as $row) {
                $row_set[] = array('label'=>$row['nomeCliente'].' | Código: '.$row['codigoCliente'],'id'=>$row['idClientes']);
            }
            echo json_encode($row_set);
        }
    }

    public function autoCompleteUsuario($q)
    {

        $this->db->select('*');
        $this->db->limit(5);
        $this->db->like('nome', $q);
        $this->db->where('situacao', 1);
        $query = $this->db->get('usuarios');
        if ($query->num_rows() > 0) {
            foreach ($query->result_array() as $row) {
                $row_set[] = array('label'=>$row['nome'],'id'=>$row['idUsuarios']);
            }
            echo json_encode($row_set);
        }
    }

    public function autoCompleteServico($q)
    {

        $this->db->select('*');
        $this->db->limit(5);
        $this->db->like('nome', $q);
        $query = $this->db->get('servicos');
        if ($query->num_rows() > 0) {
            foreach ($query->result_array() as $row) {
                $row_set[] = array('label'=>$row['nome'].' | Preço: R$ '.$row['preco'],'id'=>$row['idServicos'],'preco'=>$row['preco']);
            }
            echo json_encode($row_set);
        }
    }


    public function anexar($os, $anexo, $url, $thumb, $path)
    {
        
        $this->db->set('anexo', $anexo);
        $this->db->set('url', $url);
        $this->db->set('thumb', $thumb);
        $this->db->set('path', $path);
        $this->db->set('os_id', $os);

        return $this->db->insert('anexos');
    }

    public function getAnexos($os)
    {
        
        $this->db->where('os_id', $os);
        return $this->db->get('anexos')->result();
    }
}
