<?php
get_header();
?>

	<main id="primary" class="home site-main">
		<section class="hero">
			<div class="inner-section">
				<div class="graphic-section">
					<div class="segment segment__1"></div>
					<div class="segment segment__2"></div>
					<div class="segment segment__3"></div>
					<div class="segment segment__4"></div>
					<div class="segment segment__5"></div>
					<div class="segment segment__6"></div>
				</div>

				<div class="content-area">
					<div class="content">
						<?= get_the_content()?>
					</div>

					<?php if(have_rows('hero_links')):?>
						<div class="hero-link-list">
							<?php $index = 1;?>
							<?php while(have_rows('hero_links')): the_row();?>
								<a class="h4 hero-link hero-link__<?=$index?>">
									<?= get_sub_field('title')?>
								</a>
								<?php $index += 1;?>
							<?php endwhile;?>
						</div>
					<?php endif;?>
				</div>
			</div>
		</section>
	</main>

<?php
get_footer();
