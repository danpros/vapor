<?php foreach ($posts as $p): ?>
<article class="preview">
    <header>
        <?php if (!empty($p->link)) { ?>
            <div class="featured featured-link">
                <h2 class="post-title"><a target="_blank" href="<?php echo $p->link ?>"><?php echo $p->title ?> <i class="fa fa-external-link"></i></a></h2>
            </div>
        <?php } else { ?>
            <h2 class="post-title"><a href="<?php echo $p->url; ?>"><?php echo $p->title; ?></a></h2>
        <?php } ?>
        <div class="post-meta"><time><?php echo date('l, F d, Y', $p->date) ?></time></div>
    </header>
    <?php if (!empty($p->image)) { ?>
        <div class="featured featured-image">
            <a href="<?php echo $p->url; ?>"><img itemprop="image" width="100%" src="<?php echo $p->image; ?>" alt="<?php echo $p->title ?>"/></a>
        </div>
    <?php } ?>
    <?php if (!empty($p->video)) { ?>
        <div class="featured featured-video">
            <iframe width="100%" height="315px;" class="embed-responsive-item" src="https://www.youtube.com/embed/<?php echo $p->video; ?>" frameborder="0" allowfullscreen></iframe>
        </div>
    <?php } ?>
    <?php if (!empty($p->audio)) { ?>
        <div class="featured featured-audio">
            <iframe width="100%" height="200px;" class="embed-responsive-item" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=<?php echo $p->audio;?>&amp;auto_play=false&amp;visual=true"></iframe>
        </div>
    <?php } ?>
    <?php if (!empty($p->quote)) { ?>
        <div class="featured featured-quote">
            <blockquote class="quote"><p><i class="fa fa-quote-left"></i> <?php echo $p->quote ?> <i class="fa fa-quote-right"></i></p></blockquote>
        </div>
    <?php } ?>
    <section class="post-excerpt">
        <?php echo get_teaser($p->body, $p->url); ?>
        <?php if (config('teaser.type') === 'trimmed'):?><p class="readmore"><a href="<?php echo $p->url; ?>">Read this article <i class="fa fa-chevron-circle-right"></i></a></p><?php endif;?>
    </section>
</article>
<?php endforeach;?>
<?php if (!empty($pagination['prev']) || !empty($pagination['next'])): ?>
<nav class="pagination" role="pagination">
    <?php if (!empty($pagination['prev'])): ?>
        <a class="newer-posts" href="?page=<?php echo $page - 1 ?>"><i class="fa fa-chevron-circle-left"></i> Newer</a>
    <?php endif; ?>
    <?php echo $pagination['pagenum'];?>
    <?php if (!empty($pagination['next'])): ?>
        <a class="older-posts" href="?page=<?php echo $page + 1 ?>">Older <i class="fa fa-chevron-circle-right"></i></a>
    <?php endif; ?>
</nav>
<?php endif; ?>