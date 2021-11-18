<?php
	require_once('pages/servicos.php');
	
	$id = null;

	if(isset($_GET['id'])){
		$id = $_GET['id'];

		if(!isset($servicos[$id]))
			$id = null;
	}

	if (is_null($id)) {
?>
	<div>
		código nulo ou não existente.
	</div>
<?php	
	}else{
?>
	
<section class="about" id="about">
        <div class="max-width">
        	<div class="about-content">
	<div class="prod-cl">
		<img src="images/<?php echo $servicos[$id]['imagem']?>" alt="<?php echo $servicos[$id]['nome']?>">
	</div>
	<div class="column right">
		<h2><?php echo $servicos[$id]['nome']?></h2>
		<p>
			<?php echo $servicos[$id]['descricao']?>
		</p>
		<a href="index.php?page=contato" class="button__contratar">
			CONTRATAR
		</a>
	</div>
</div>
</div>
</section>
<?php
	}
?>
