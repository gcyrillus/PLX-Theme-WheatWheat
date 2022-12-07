<?php include __DIR__.'/header.php'; ?>
	<section>
		<article class="article static" id="static-page-<?php echo $plxShow->staticId(); ?>">
			<header>
				<h2>
					<?php $plxShow->staticTitle(); ?>
				</h2>
			</header>
			<?php $plxShow->staticContent(); ?>
		</article>
	</section>
<?php include __DIR__.'/footer.php'; 