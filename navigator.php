<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

<div class="navigator">
    <div class="logo">
        <img src="<?php $this->options->logoUrl(); ?>" alt="logo"/>
    </div>
    <div class="columns">
        <div class="page">
            <?php $this->widget('Widget_Contents_Page_List')->to($pages); ?>
            <?php 
                $activeFound = false; // 初始化标志位，表示是否找到active页面
                while ($pages->next()) {
                    if ($this->is('page', $pages->slug)) {
                        $activeFound = true; 
                        // break; // 找到active页面，跳出循环
                    }
                }
            ?>
            <a class="column-link<?php if ($this->is('index') || !$activeFound) : ?> active <?php endif; ?>"
               href="<?php $this->options->index(); ?>">
                <i class="fa fa-fw <?php 
            if ($this->is('index')) {
                echo 'fa-home';
            } else {
                echo 'fa-arrow-left';
            }
        ?> column-icon"></i>
                <span><?php 
                    if ($this->is('index')) {
                        _e('主页');
                    } else {
                        _e('返回主页');
                    }
                ?></span>
            </a>
            
            <?php while ($pages->next()) : ?>
                <a class="column-link<?php if ($this->is('page', $pages->slug)) : ?> active <?php $activeFound = true; ?> <?php endif; ?>"
                   href="<?php $pages->permalink(); ?>" title="<?php $pages->title(); ?>">
                    <i class="fa fa-fw <?= $pages->fields->fontawesome ?: 'fa-star'; ?> column-icon"></i>
                    <span><?php $pages->title(); ?></span>
                </a>
            <?php endwhile; ?>
        </div>
    </div>
</div>
