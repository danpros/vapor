<?php if (!defined('HTMLY')) die('HTMLy'); ?>
<article class="post page">
    <header>
        <h1 class="post-title">This page doesn't exist!</h1>
    </header>
    <section class="post-content" style="text-align:center;">
        <p>Please search to find what you're looking for or visit our <a href="<?php echo site_url() ?>">homepage</a> instead.</p>
        <div class="404-error">
            <?php echo search() ?>
        </div>
    </section>
</article>