<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package medusa
 */
$about_image = get_field('about_image', 'option');
$about_text = get_field('about_description', 'option');
$about_title = get_field('about_title', 'option');

$partenaires_title = get_field('partenaires_title', 'option');
$partnaires_logos = get_field('partenaires_logo', 'option');

$events_title = get_field('events_title', 'option');
get_header();?>

	<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">
        <!-- ABOUT -->
    <?php if ($about_text): ?>
        <section id="about">
        <?php if ($about_title): ?>
            <h2 class="title section-title is-2"><?php echo $about_title ?></h2>
        <?php endif;?>
            <div class="columns">
                <div class=" column is-6">
                    <?php echo $about_text ?>
                </div>
                <?php if ($about_image): ?>
                <div class="column is-6 about-img">
                    <img src="<?php echo $about_image['url']; ?>" alt="">
                </div>
                <?php endif;?>
            </div>
        </section>
    <?php endif;?>
    <!-- EVENTS -->
        <section id="events">
        <?php if ($events_title): ?>
            <h2 class="title section-title is-2"><?php echo $events_title ?></h2>
        <?php endif;?>
        </section>
    <!-- PARTENAIRES -->
        <section id="partenaires">
        <?php if ($partenaires_title): ?>
            <h2 class="title section-title is-2"><?php echo $partenaires_title ?></h2>
        <?php endif;?>

       <?php if( $partnaires_logos ): ?>
    <ul class="list-logos columns">
        <?php foreach( $partnaires_logos as $image ): ?>
            <li class="partenaire-logo column is-2">
            	<?php echo wp_get_attachment_image( $image['ID'], 'full' ); ?>
            </li>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>
        </section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();