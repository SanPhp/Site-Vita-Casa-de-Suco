<?php $title = 'Home - Vita Leve Casa de Sucos'; ?>
<?php require 'header.php'; ?>

<body>

<section id="all_conteudo">

	<?php $menuHome = 'active'; ?>
	<?php require 'cabecalho.php'; ?>
    
    <h1>Especialidades da casa</h1>
    
    <nav class="horizontal">
    	<ul>
        	<li class="menu_sucos"><a href="sucos.php" title="">Sucos</a></li>
            <li class="menu_lanches"><a href="cardapio.php" title="">Lanches</a></li>
            <li class="menu_sobremesas"><a href="cardapio.php" title="">Sobremesas</a></li>
            <li class="menu_prato"><a href="cardapio.php" title="">Pratos</a></li>
        </ul>
    </nav>

    <section class="hist_index">
    
    	<article>
    	<h2>Vita Leve - Casa de Sucos</h2>
        <p>A grande variedade de frutas e o clima tropical fazem de tudo 
           para matar a sede no calor. Afinal, ninguém resiste a um suco 
           de frutas fresquinho, espremido na hora. A Vita Leve tem produtos 
           bem selecionados e uma boa localização.</p>
        </article>
    	
    </section><!--hist_index-->
    
    	<div class="saiba_mais">
        	<p>Saiba quais são</p>
             <p class="last">nossos produtos</p>
             	<a href="cardapio.php" title="Clique e saiba um pouco mais sobre nossos produtos">Clique aqui</a>                
        </div><!--saiba_mais-->
        
        <?php require 'footer.php'; ?>


</section><!--all_conteudo-->

</body>
</html>