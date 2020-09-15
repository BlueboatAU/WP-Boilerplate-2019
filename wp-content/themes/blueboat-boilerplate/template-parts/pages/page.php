<?php
/**
 * Template part for displaying posts
 *
 */

?>


<section>
    <div class="container">
        <div class="row">
            <div class="12">
                <h1><?php the_title(); ?></h1>
            </div>
        </div>
    </div>
</section>

<section>
	<div class="container">
		<div class="row">
			<div class="col-lg-9 col-xl-8">
                <div class="content-style">
                    <?php the_content(); ?>
                </div>
            </div>
        </div>
    </div>
</section>