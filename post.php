<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit;
$this->need('header.php');
$this->need('navigator.php'); ?>

<div id="nabo" class="middle">
    <div class="header">
        <div class="toolbar" style="padding-top: 20px; padding-bottom: 0px; position: absolute; z-index: 2; right: 0;">
            <div class="toolbar-left" style="padding-top: 0px; padding-bottom: 0px;"><?php if ($isIndex = true || $this->is('index')) {
                    // _e('cha.ge');
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
    <div class="article post">
        <article class="<?php $this->type(); ?>" itemscope itemtype="http://schema.org/BlogPosting">
            <div class="twitter" style="padding-left: 20px; padding-right: 20px;" >
                <div class="created"  style="display: none">
                    <time datetime="<?php $this->date('c'); ?>"
                          itemprop="datePublished"><?php $this->date(); ?></time>
                </div>
                <div class="avatar" style="display: none">
                    <?php $this->author->gravatar(100, 'G', 'mm'); ?>
                </div>
                <div class="display" style="display: none">
                    <div class="name"><?php $this->author->screenName(); ?></div>
                </div>
                <div class="title header-2" itemprop="name headline"><?php $this->title() ?></div>
            </div>
            <div class="markdown-body content"><?= lazyload_filter($this->content); ?></div>

            <div class="other">
                <div class="tags"><span>#</span><?php $this->tags(', ', true, 'none'); ?></div>
                <div class="modified">
                    更新于: <?php echo date('Y年m月d日 H:i', $this->modified) ?>
                </div>
            </div>

            <div class="copyright">
                <p>作者: <?php $this->author(); ?></p>
                <p>链接: <a href="<?php $this->permalink(); ?>"><?php $this->permalink(); ?></a></p>
                <p>版权: 除特别声明,均采用
                    <a href="https://creativecommons.org/licenses/by-nc-sa/4.0/">BY-NC-SA 4.0</a> 许可协议,转载请表明出处
                </p>
            </div>
            <div class="extras">
                <div class="extra">
                    <div class="view">
                        <i class="fa fa-thermometer-full"></i><span><?= get_post_view($this) ?></span>
                    </div>
                    <div class="commentNum">
                        <i class="fa fa-commenting-o"></i><span><?php $this->commentsNum(); ?></span>
                    </div>
                </div>
            </div>
        </article>
    </div>
    <?php $this->need('comments.php'); ?>
</div>

<?php $this->need('sidebar.php'); ?>
<?php $this->need('footer.php'); ?>
