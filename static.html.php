<?php if (!defined('HTMLY')) die('HTMLy'); ?>
<article class="post page">
    <?php if (login()) { echo tab($p); } ?> 
    <header>
        <h1 class="post-title"><?php echo $p->title;?></h1>
    </header>
    <section class="post-content">
        <?php echo $p->body; ?>
    </section>
</article>