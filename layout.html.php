<?php if (!defined('HTMLY')) die('HTMLy'); ?>
<!DOCTYPE html>
<html lang="<?php echo str_replace('_', '-', config('language'));?>">
<head>
    <?php echo head_contents();?>
    <title><?php echo $title;?></title>
    <meta name="description" content="<?php echo $description; ?>"/>
    <link rel="canonical" href="<?php echo $canonical; ?>" />
    <?php if (publisher()): ?>
    <link href="<?php echo publisher() ?>" rel="publisher" /><?php endif; ?>
    <link rel="stylesheet" type="text/css" href="<?php echo site_url();?>themes/vapor/css/normalize.css">
    <link rel="stylesheet" type="text/css" href="<?php echo site_url();?>themes/vapor/css/screen.css">
    <link rel="stylesheet" type="text/css" href="<?php echo site_url();?>themes/vapor/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?subset=latin,cyrillic-ext,latin-ext,cyrillic&family=Open+Sans+Condensed:300|Open+Sans:400,600,400italic,600italic|Merriweather:400,300,300italic,400italic,700,700italic|Roboto+Slab:400,300">
</head>
<body class="home-template">
<?php if (facebook()) { echo facebook(); } ?>
<?php if (login()) { toolbar(); } ?>
    <header id="site-head">
        <a id="blog-logo" href="<?php echo site_url();?>"><div class="bloglogo" style="background: url(<?php echo site_url();?>themes/vapor/images/avatar.png)"></div></a>
        <?php if(is_index()) {?>
			<h1 class="blog-title"><a href="<?php echo site_url();?>"><?php echo blog_title();?></a></h1>
		<?php } else { ?>
			<h2 class="blog-title"><a href="<?php echo site_url();?>"><?php echo blog_title();?></a></h2>
		<?php } ?>
        <nav class="menu" role="nav">
            <?php echo menu(); ?>
        </nav>    
    </header>
    <main class="content" role="main">
        <?php echo content();?>
    </main>
    <footer class="site-footer">
        <div class="inner">
            <section class="footer-description"><?php echo blog_description();?></section>            
            <section class="copyright"><?php echo copyright();?></section>
            <section>Design by <a target="_blank" href="http://sethlilly.com/">Seth Lilly</a></section>
        </div>
    </footer>
    <?php if (analytics()): ?><?php echo analytics() ?><?php endif; ?>
</body>
</html>