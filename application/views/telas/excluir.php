<div id="content">
<?php 
$iduser = $this->uri->segment(3);
if ($iduser == NULL) 
{
	redirect('principal/pesquisar');
}
$query = $this->principal_model->get_byid($iduser)->row();
	echo form_open("principal/excluir/".$iduser);
	echo form_fieldset('Formulario para Editar registro de contato.');
	echo '<div style=color:red;font-size:10px>'.validation_errors().'</div>'; 
	echo form_label('Nome:');
	echo form_input(array('name'=>'nome','maxlength'=>'15'),set_value('nome',$query->nome),'autofocus');
	echo form_label('Empresa:');
	echo form_input(array('name'=>'empresa','maxlength'=>'10'),set_value('empresa',$query->empresa));
	echo form_label('Telefone:');
	echo form_input(array('name'=>'telefone','maxlength'=>'20'),set_value('telefone',$query->telefone));
	echo form_label('Celular:');
	echo form_input(array('name'=>'celular','maxlength'=>'20'),set_value('celular',$query->celular));
	echo form_label('Email:');
	echo form_input(array('name'=>'email','maxlength'=>'50'),set_value('email',$query->email));
	echo "<br/>";
	echo form_hidden('idusuario',$query->id);
	echo form_button(array('name'=>'button','class'=>'btn','value'=>'true', 'type'=>'submit', 'content'=>'Excluir contato ? '));
?>
</div>