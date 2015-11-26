<article class="post full">
    <?php if (login()) { echo tab($p); } ?> 
    <header>
        <div class="post-meta tags">Posted in <?php echo $p->category;?></div>
        <?php if (!empty($p->link)) { ?>
            <div class="featured featured-link">
                <h1 class="post-title"><a target="_blank" href="<?php echo $p->link ?>"><?php echo $p->title ?> <i class="fa fa-external-link"></i></a></h1>
            </div>
        <?php } else { ?>
            <h1 class="post-title"><?php echo $p->title; ?></h1>
        <?php } ?>
        <div class="post-meta"><time><?php echo date('l, F d, Y', $p->date) ?></time></div>
    </header>
    <?php if (!empty($p->image)) { ?>
        <div class="featured featured-image">
            <img itemprop="image" width="100%" src="<?php echo $p->image; ?>" alt="<?php echo $p->title ?>"/>
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
    <section class="post-content">
        <?php echo $p->body; ?>
    </section>
    <section class="share">
        <div class="A">
            <p class="tag">Tagged: <?php echo $p->tag;?></p>
        </div>
        <div class="B">
            <p class="info prompt">Share: </p>
            <a onclick="window.open(this.href, 'twitter-share', 'width=550,height=235');return false;" href="https://twitter.com/share?url=<?php echo $p->url ?>&text=<?php echo $p->title ?>">
            <i class="fa fa-2x fa-fw fa-twitter"></i> <span class="hidden">Twitter</span>
            </a>
            <a onclick="window.open(this.href, 'facebook-share','width=580,height=296');return false;" href="https://www.facebook.com/sharer.php?u=<?php echo $p->url ?>&t=<?php echo $p->title ?>">
            <i class="fa fa-2x fa-fw fa-facebook-square"></i> <span class="hidden">Facebook</span>
            </a>
            <a onclick="window.open(this.href, 'google-plus-share', 'width=490,height=530');return false;" href="https://plus.google.com/share?url=<?php echo $p->url ?>">
            <i class="fa fa-2x fa-fw fa-google-plus-square"></i> <span class="hidden">Google+</span>
            </a>
        </div>
        <div class="clear"></div>
    </section>
    <footer class="post-footer">
        <section class="author">
            <div style="background: url(<?php echo site_url();?>themes/vapor/images/avatar.png)" class="authorimage"></div>
            <p class="attr">Author</p>
            <h4><a href="<?php echo $p->authorUrl;?>"><?php echo $author->name;?></a></h4>
            <?php echo $author->about;?>
        </section>
    </footer>
    <?php if (disqus()): ?>
        <?php echo disqus($p->title, $p->url) ?>
    <?php endif; ?>
    <?php if (disqus_count()): ?>
        <?php echo disqus_count() ?>
    <?php endif; ?>
    <?php if (facebook() || disqus()): ?>
        <section class="comments" id="comments">
            <?php if (facebook()): ?>
                <div class="fb-comments" data-href="<?php echo $p->url ?>" data-numposts="<?php echo config('fb.num') ?>" data-colorscheme="<?php echo config('fb.color') ?>"></div>
            <?php endif; ?>
            <?php if (disqus()): ?>
                <div id="disqus_thread"></div>
            <?php endif; ?>
        </section>
    <?php endif; ?>
    <?php if (!empty($prev) || !empty($next)): ?>
        <nav class="pagination post" role="pagination">
            <?php if (!empty($next)): ?>
                <a class="newer-posts" href="<?php echo($next['url']); ?>"><i class="fa fa-chevron-circle-left"></i> Next Post</a>
            <?php endif; ?>
            &nbsp;
            <?php if (!empty($prev)): ?>
                <a class="older-posts" href="<?php echo($prev['url']); ?>">Previous Post <i class="fa fa-chevron-circle-right"></i></a>
            <?php endif; ?>
        </nav>
    <?php endif; ?>
</article>
