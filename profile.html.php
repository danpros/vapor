<?php if (!defined('HTMLY')) die('HTMLy'); ?>
<article class="post profile">
    <header>
        <h1 class="post-title"><?php echo $name;?></h1>
    </header>
    <section class="post-content">
        <?php echo $about; ?>
        <h2 class="post-index">Posts by this author</h2>
        <?php if (!empty($posts)) { ?>
            <ul class="post-list">
                <?php foreach ($posts as $p): ?>
                    <li class="item">
                        <span><a href="<?php echo $p->url ?>"><?php echo $p->title ?></a></span> on
                        <span><?php echo format_date($p->date); ?></span> - Posted in <span class="tag"><?php echo $p->category; ?></span>
                    </li>
                <?php endforeach; ?>
            </ul>
        <?php } else {
            echo 'No posts found!';
        } ?>    
    </section>
</article>
<?php if (!empty($posts)) { ?>
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
<?php } ?>