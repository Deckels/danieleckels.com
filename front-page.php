<?php
get_header();
?>

	<main id="primary" class="home site-main">
		<section class="hero">
			<div class="inner-section">
				<div class="graphic-section">
					<div class="segment home segment__1"></div>
					<div class="segment home segment__2"></div>
					<div class="segment home segment__3"></div>
					<div class="segment home segment__4"></div>
					<div class="segment home segment__5"></div>
					<div class="segment home segment__6"></div>
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

		<?php if(have_rows('about')):?>
		<section class="about">
			<?php while(have_rows('about')): the_row();?>
				<div class="title-section">
					<div class="small-graphic small-graphic__3">
						<?php get_template_part('partials/graphic-section-small')?>
					</div>
					<h2 class="h2"><?=get_sub_field('title')?></h2>
				</div>

				<div class="content-section">
					<div class="inner-section">
						<div class="content">
							<?= get_sub_field('content')?>
						</div>
						<figure class="image">
							<?= wp_get_attachment_image(get_sub_field('image'), 'medium')?>
						</figure>
					</div>
				</div>
			<?php endwhile;?>
		</section>
		<?php endif;?>

		<?php if(have_rows('leibowitz')):?>
		<section class="leibowitz-portfolio">
			<?php while(have_rows('leibowitz')): the_row();?>
				<div class="container">
					<div class="title-section">
						<div class="small-graphic small-graphic__3">
							<?php get_template_part('partials/graphic-section-small')?>
						</div>
						<h2 class="h2"><?=get_sub_field('title')?></h2>
					</div>
				</div>

				<div class="portfolio-grid">
					<?php foreach(get_sub_field('portfolio') as $item):?>
						<a class="portfolio-item-link" href="<?= get_field('url', $item->ID)?>" target="_blank">
							<div class="portfolio-item">
								<figure>
									<img src="<?= get_the_post_thumbnail_url($item->ID)?>" alt="<?=get_the_title($item->ID)?>">
								</figure>
							</div>
						</a>
					<?php endforeach;?>
				</div>
			<?php endwhile;?>
		</section>
		<?php endif;?>

		<?php if(have_rows('freelance')):?>
		<section class="freelance-portfolio">
			<?php while(have_rows('freelance')): the_row();?>
				<div class="container">
					<div class="title-section">
						<div class="small-graphic small-graphic__4">
							<?php get_template_part('partials/graphic-section-small')?>
						</div>
						<h2 class="h2"><?=get_sub_field('title')?></h2>
					</div>
				</div>

				<?php if(get_sub_field('portfolio')):?>
					<div class="portfolio-grid">
						<?php foreach(get_sub_field('portfolio') as $item):?>
							<a class="portfolio-item-link" href="<?= get_field('url', $item->ID)?>" target="_blank">
								<div class="portfolio-item">
									<figure>
										<img src="<?= get_the_post_thumbnail_url($item->ID)?>" alt="<?=get_the_title($item->ID)?>">
									</figure>
								</div>
							</a>
						<?php endforeach;?>
					</div>
				<?php endif;?>

			<?php endwhile;?>
		</section>
		<?php endif;?>
	</main>

<?php
get_footer();
