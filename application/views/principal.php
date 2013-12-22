<?php 
echo link_tag('/application/assets/css/style.css');
echo link_tag('/application/assets/css/bootstrap.css');
$this->load->view('includes/header');
$this->load->view('includes/menu');
if($telas != '') $this->load->view('telas/'.$telas);
$this->load->view('includes/footer');
?>