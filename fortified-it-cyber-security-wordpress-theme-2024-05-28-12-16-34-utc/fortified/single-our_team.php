<?php get_header(); 
$fb = get_post_meta(get_the_ID(), 'team_member_facebook_link', true);
$twitter = get_post_meta(get_the_ID(), 'team_member_twitter_link', true);
$instagram = get_post_meta(get_the_ID(), 'team_member_instagram_link', true);?>
<div id="primary" class="content-area fortified-page-containerr fortified-services-details fortified-teams-details">
		<main id="main" class="site-main">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-12 col-sm-12 mb-lg-0 mb-4">
                        <?php if (has_post_thumbnail()) : ?>
                            <div class="featured-image">
                                <?php the_post_thumbnail('full'); ?>
                            </div>
                            <h5><?php echo get_the_excerpt(); ?></h5>
                        <?php endif; ?>
                        <div class="social-icons">
                            <ul class="list-unstyled" data-aos="fade-up" data-aos-duration="700">
                                <?php
                                    if($fb){
                                        ?>
                                        <li class='d-inline-block'><a href='<?php echo esc_url($fb); ?>'><i class='fa-brands fa-facebook-f'></i></a></li>
                                        <?php
                                    }
                                    if($twitter) {
                                        ?>
                                        <li class='d-inline-block'><a href='<?php echo esc_url($twitter); ?>'><i class='fa-brands fa-twitter'></i></a></li>
                                        <?php
                                    }
                                    if($instagram) {
                                        ?>
                                        <li class='d-inline-block'><a href='<?php echo esc_url($instagram); ?>'><i class='fa-brands fa-instagram'></i></a></li>
                                        <?php
                                    }
                                ?>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-12 col-sm-12">
                        <div class="team-content">
                            <?php while (have_posts()) : the_post(); ?>
                                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                                    <header class="entry-header">
                                        <h3 class="entry-title"><?php the_title(); ?></h3>
                                    </header>
                                    <div class="entry-content">
                                        <?php the_content(); ?>
                                    </div>
                                </article>
                            <?php endwhile; ?>
                        </div>
                    </div>
                </div>
            </div>
        </main><!-- #main -->
    </div>
<?php get_footer(); ?>
