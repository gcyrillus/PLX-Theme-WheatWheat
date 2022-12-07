<?php include __DIR__.'/header.php'; ?>
	<section>
		<article class="article">
			<header>
				<h2>
					<?php $plxShow->lang('ERROR'); ?>
				</h2>
			</header>
			<p>
				<?php $plxShow->erreurMessage(); ?>
			</p>
		</article>
	</section>
	<?php include __DIR__.'/sidebar.php'; ?>
<?php include __DIR__.'/footer.php'; ?>

