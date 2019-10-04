<?php $title = 'Home - Vita Leve Casa de Sucos'; ?>
<?php require 'header.php'; ?>

<body>

<section id="all_conteudo">

	<?php $menuContato = 'active'; ?>
	<?php require 'cabecalho.php'; ?>
    
    <section id="contato">
    
    <h1>Contato</h1>
    
    <p>Entre em contato e solicite seu orçamento que estaremos sempre à disposição para atendê-lo</p>
       
       
       
       <div class="formulario">
       	
        	<form id="formContato" action="contato_ok.php" method="post">
            
            	<label for="nome">Nome</label>
                <input type="text" id="nome" name="txtNome">
                
                <label for="fone">Fone</label>
                <input type="text" id="fone" name="txtFone">
                
                <label for="email">Email</label>
                <input type="text" id="email" name="txtEmail">
                
                <label for="assunto">Assunto</label>
                <input type="text" id="assunto" name="txtAssunto">
                
                <label for="mensagem">Mensagem</label>
                <textarea id="mensagem" name="txtMensagem"></textarea><br>
                
                <input type="submit" id="submit" name="submit" value="Enviar">
            
            </form>
        
       </div><!--formulario-->
       
    
    </section><!--contato-->
    
        
        <?php require 'footer.php'; ?>


</section><!--all_conteudo-->

</body>
</html>