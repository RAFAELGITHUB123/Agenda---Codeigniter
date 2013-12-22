<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Principal extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('html');
		$this->load->helper('form');
		$this->load->helper('array');
		$this->load->library('table');
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->library('pagination');
		$this->load->model('principal_model');
	}
	
	public function index()
	{
		$dados = array(
			'telas' => '',
			);
		$this->load->view('principal',$dados);	
	}

	public function cadastrar()
	{
		//validação do formulario
		$this->form_validation->set_rules('nome','NOME','trim|required|ucwords');
		$this->form_validation->set_rules('empresa','EMPRESA','trim|required|ucwords');
		$this->form_validation->set_rules('telefone','TELEFONE','trim|required');
		$this->form_validation->set_rules('celular','CELULAR','trim');
		$this->form_validation->set_rules('email','EMAIL','trim|required|strtolower|valid_email');

		if($this->form_validation->run() == TRUE)
		{
			$dados = elements(array('nome','empresa','telefone','celular','email'),$this->input->post());
			$this->principal_model->do_insert($dados);
		}
		$dados = array(
				'telas' => 'cadastrar',
				);
			$this->load->view('principal',$dados);	
	}

	public function pesquisar()
	{
		$dados = array(
			'telas' => 'pesquisar',
			'contato' => $this->principal_model->get_all(),
			/* 
			Para criar validação
 			'config' => array(
				'base_url'=>'http://127.0.0.1:8080/principal/pesquisar',
				'total_rows'=>'4',
				'per_page'=>'1',
			),
			*/		
		);
		$this->load->view('principal',$dados);	
	}

	public function editar()
	{
		//validação do formulario
		$this->form_validation->set_rules('nome','NOME','trim|required|ucwords');
		$this->form_validation->set_rules('empresa','EMPRESA','trim|required|ucwords');
		$this->form_validation->set_rules('telefone','TELEFONE','trim|required');
		$this->form_validation->set_rules('celular','CELULAR','trim');
		$this->form_validation->set_rules('email','EMAIL','trim|required|strtolower|valid_email');

		if($this->form_validation->run() == TRUE)
		{
			$dados = elements(array('nome','empresa','telefone','celular','email'),$this->input->post());
			$this->principal_model->do_insert($dados);
		}
		$dados = array(
				'telas' => 'editar',
				);
			$this->load->view('principal',$dados);	
	}

	public function excluir()
	{

		if ($this->input->post('idusuario') > 0 )
		{
			$this->principal_model->delete(array('id' => $this->input->post('idusuario')));
		}
		
		$dados = array(
			'telas' => 'excluir',
		);

		$this->load->view('principal',$dados);
	}
}