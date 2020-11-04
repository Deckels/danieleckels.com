	<footer class="site-footer" id="footer">
		<div class="container">
			<div class="title-section">
				<div class="small-graphic small-graphic__4">
					<?php get_template_part('partials/graphic-section-small')?>
				</div>
				<h2 class="h2"><?=get_field('footer_title', 'options')?></h2>

				<?php if(have_rows('social_links', 'options')):?>
					<div class="social-links">
						<?php while(have_rows('social_links', 'options')): the_row();?>
							<a class="icon" href="<?= get_sub_field('link')?>" target="_blank">
								<span class="icon-<?= get_sub_field('title')?>"></span>
							</a>
						<?php endwhile;?>
					</div>
				<?php endif;?>
			</div>
		</div>
	</footer>
</div>

<?php wp_footer(); ?>

</body>
</html>
