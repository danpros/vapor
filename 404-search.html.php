<?php if (!defined('HTMLY')) die('HTMLy'); ?>
<article class="post page">
    <header>
        <h1 class="post-title">Search results not found!</h1>
    </header>
    <section class="post-content" style="text-align:center;">
        <p>Please search again, or would you like to try our <a href="<?php echo site_url() ?>">homepage</a> instead?</p>
        <div class="404-search">
            <?php echo search() ?>
        </div>
    </section>
</article>