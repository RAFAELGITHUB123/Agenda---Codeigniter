<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Principal_model extends CI_Model
{
	public function do_insert($dados=NULL)
	{
		if ($dados != NULL)
		{
			$this->db->insert('contatos',$dados);
		}
	}

	public function get_all()
	{
		return $this->db->get('contatos');
	}

	public function get_byid($id='')
	{
		if ($id != '')
		{
			$this->db->where('id',$id);
			$this->db->limit(1);
			return $this->db->get('contatos');
		}
		else
		{
			return FALSE;
		}
	}

	public function delete($condicao = NULL)
	{
		if ($condicao != NULL) 
		{
			$this->db->delete('contatos',$condicao);
			$this->session->set_flashdata('excluiok','Cadastro delete com sucesso');
			redirect('principal/pesquisar');
		}
	}
}