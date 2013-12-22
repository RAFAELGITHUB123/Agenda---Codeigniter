<div id="content">
	<h2>Cadastrar Contato</h2>

	<?php
		echo form_open('principal/cadastrar');
		echo form_fieldset('Formulario para cadastro de contato.');
		echo '<div style=color:red;font-size:10px>'.validation_errors().'</div>'; 
		echo form_label('Nome:');
		echo form_input(array('name'=>'nome','maxlength'=>'15'),set_value('nome'),'autofocus');
		echo form_label('Empresa:');
		echo form_input(array('name'=>'empresa','maxlength'=>'10'),set_value('empresa'));
		echo form_label('Telefone:');
		echo form_input(array('name'=>'telefone','maxlength'=>'20'),set_value('telefone'));
		echo form_label('Celular:');
		echo form_input(array('name'=>'celular','maxlength'=>'20'),set_value('celular'));
		echo form_label('Email:');
		echo form_input(array('name'=>'email','maxlength'=>'50'),set_value('email'));
		echo "<br/>";
		echo form_button(array('name'=>'button','class'=>'btn','value'=>'true', 'type'=>'submit', 'content'=>'Enviar Cadastro'));
		
	?>
</div>
