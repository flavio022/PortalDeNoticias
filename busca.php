<?php require_once 'includes/header.php';?>
<main>
		<section id="content">
				<section id="conteudo">
				
			<?php
			$termo = $_GET["busca-organica"];
			$busca = mysql_query("SELECT * FROM noticias WHERE tags LIKE '%$termo%' ");

			if(mysql_num_rows($busca)!=0){

			while ($src = mysql_fetch_array($busca)) {

				# code...
			

			?>
					<section id="buscar">
					<h2><?php echo $src['titulo']; ?></h2>
				<section id="buscar-img"><img src="paineldecontrole/imagens/imgNoticia/<?php echo $src['imagem'];?>" alt="<?php echo $src['titulo']; ?>"/></section>
				<section id="buscar-conteudo"><?php echo sbsrtr($src, 0,550); ?><a href="">Continue lendo</a></section>
					</section>
					<?php } } else{?>
						<section id="buscar">
					<h2>Desculpe, não foi encontrado resultados na busca</h2>
				
						<?php }?>
				</section> <!---Conteudo -->
						<section id="sidebar"><?php require_once 'includes/sidebar.php';?></section>
		</section> <!-- Content -->
</main>