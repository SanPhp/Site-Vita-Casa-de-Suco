<?php
if (isset($_POST['submit'])){	
$nome = $_POST['txtNome'];
$email = $_POST['txtEmail'];
$fone = $_POST['txtFone'];
$assunto = $_POST['txtAssunto'];
$mensagem = $_POST['txtMensagem'];
$output_form = 'no';

if (empty($nome) || empty($email) || empty($fone) || empty($assunto) || empty($mensagem)){
	$output_form = 'yes';
  }
}
else {
	 $output_form = 'yes';
 }

if (!empty($nome) && !empty($email) && !empty($fone) && !empty($assunto) && !empty($mensagem)) {
    $from = 'Vita Leve';
	$to = 'sandro@hrsweb.com.br';
	$subject = 'Contato Site Vita Leve';
	$msg = "Formulário de Contato do Site: $from \n" .
	        "Nome: $nome \n" .
	        "Email: $email \n" .
			"Fone: $fone \n" .
			"Assunto: $assunto \n" .
			"Mensagem: $mensagem";
	        mail($to, $subject, $msg);
			$output_form = 'no';
				
}	
header("refresh:5; url=http://www.vitaleve.com.br/mostruario/contato.php");

?>

<?php $title = 'Home - Vita Leve Casa de Sucos'; ?>
<?php require 'header.php'; ?>

<body>

<section id="all_conteudo">

	<?php $menuSucos = 'active'; ?>
	<?php require 'cabecalho.php'; ?>
    
    <section id="contato">
    
    <h1>Contato</h1>
    
    <p>Entre em contato e solicite seu orçamento que estaremos sempre à disposição para atendê-lo</p>
       
       
     <center><h1>Mensagem Enviada com sucesso!<br><a href="http://www.vitaleve.com.br/mostruario/contato.php" title="Voltar" style="font-size: 20px; color:#00C;">Voltar</a></h1></center><br>
     
        
       </div><!--formulario-->
       
    
    </section><!--contato-->
    
        
        <?php require 'footer.php'; ?>


</section><!--all_conteudo-->

</body>
</html>