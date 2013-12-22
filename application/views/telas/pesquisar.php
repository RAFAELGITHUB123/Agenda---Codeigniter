<div id="content">
	<h2>Lista de Usuarios cadastrados</h2>
	<?php 
		$this->table->set_heading('Nome','Empresa','Telefone','Celular','Email','Opção');
		foreach ($contato->result() as $linha) 
		{
			$this->table->add_row($linha->nome, $linha->empresa, $linha->telefone, $linha->celular, $linha->email,anchor("principal/editar/$linha->id",'Editar').' - 
				'.anchor("principal/excluir/$linha->id",'Deletar'));			
		}
		echo '<br /	>';
		echo '<br /	>';
		echo $this->table->generate();
		
		/*PAGINAÇÃO
	 	$this->pagination->initialize($config);
		echo $this->pagination->create_links();
		*/
		
	?>
</div>