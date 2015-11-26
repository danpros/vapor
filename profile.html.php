<article class="post profile">
    <header>
        <h1 class="post-title"><?php echo $name;?></h1>
    </header>
    <section class="post-content">
        <?php echo $about; ?>
        <h2 class="post-index">Posts by this author</h2>
        <?php if (!empty($posts)) { ?>
            <ul class="post-list">
                <?php $i = 0; $len = count($posts); ?>
                <?php foreach ($posts as $p): ?>
                    <?php if ($i == 0) {
                        $class = 'item first';
                    } elseif ($i == $len - 1) {
                        $class = 'item last';
                    } else {
                        $class = 'item';
                    }
                    $i++; ?>
                    <li class="<?php echo $class; ?>">
                        <span><a href="<?php echo $p->url ?>"><?php echo $p->title ?></a></span> on
                        <span><?php echo date('d F Y', $p->date) ?></span> - Posted in <span class="tag"><?php echo $p->tag ?></span>
                    </li>
                <?php endforeach; ?>
            </ul>
        <?php } else {
            echo 'No posts found!';
        } ?>    
    </section>
</article>
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