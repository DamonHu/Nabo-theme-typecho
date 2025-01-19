<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit;

/**
 * dynamics
 * 动态
 * @package custom
 *
 */
$this->need('header.php');
$this->need('navigator.php'); ?>

<div id="nabo" class="middle">
    <div class="header">
        <div class="toolbar" style="padding-top: 20px; padding-bottom: 0px; position: absolute; z-index: 2; right: 0; width: 90%;">
            <div class="toolbar-left" style="padding-top: 0px; padding-bottom: 0px;"><?php if ($isIndex = true || $this->is('index')) {
                    
                } ?></div>
            <div class="toolbar-right">
                <div class="menu" onclick="window.function.navigator()">
                    <i class="fa fa-align-right"></i>
                </div>
            </div>
        </div>
        <?php if ($isIndex || $this->is('author')):
            if ($isIndex) {
                $author = $this->widget('Widget_Users_Author', ['uid' => $this->options->uid]);
            } else {
                $author = $this->author;
            } ?>
            <?php if ($bannerUrl = $this->options->bannerUrl): ?>
            <div class="banner have" style="background-image: url(<?= $bannerUrl ?>);"></div>
        <?php else: ?>
            <div class="banner"></div>
        <?php endif; ?>
            <div class="author">
                <?php $author->gravatar(100, 'G', 'mm', 'avatar'); ?>
            </div>
            <div class="nick">
                <div class="name"><?php $author->screenName(); ?></div>
                <div class="uib">
                    <span>🌟 推荐技术博客: <a href="https://dongge.org" target="_blank" style="font-size: 15px; font-weight: bold;" >东哥笔记</a></span>
                </div>
            </div>
            <div class="extra">
                <div class="describe"><?php $this->options->describe(); ?></div>
            </div>
        <?php endif; ?>
    </div>

    <div class="article home">
        <?php $dyn = Dynamics_Plugin::get();
        while ($dyn->dynamics->next()): ?>
            <article class="dynamic" itemscope itemtype="http://schema.org/BlogPosting">
                <div class="twitter">
                    <div class="created">
                        <time datetime="<?php $dyn->dynamics->created('c'); ?>"
                              itemprop="datePublished"><?php $dyn->dynamics->created(); ?></time>
                    </div>
                    <div class="avatar">
                        <img src="<?php $dyn->dynamics->avatar(100, 'G', 'mm'); ?>" alt="author">
                    </div>
                    <div class="display">
                        <div class="name"><?php $dyn->dynamics->screenName(); ?></div>
                    </div>
                    <div class="markdown-body describe">
                        <?= lazyload_filter($dyn->dynamics->content); ?>
                    </div>
                </div>
            </article>
        <?php endwhile; ?>
    </div>

    <div class="navigation">
        <?php $dyn->dynamics->navigator('&laquo;', '&raquo;',
            3, '...',
            'wrapClass=page-navigator'
        ); ?>
    </div>

    <?php $this->need('comments.php'); ?>
</div>

<?php $this->need('sidebar.php'); ?>
<?php $this->need('footer.php'); ?>

