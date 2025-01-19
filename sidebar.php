<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

<div class="sidebar">
    <div class="columns">
        <div class="search">
            <form id="search" method="post" action="<?php $this->options->siteUrl(); ?>" role="search">
                <label><input type="text" id="s" name="s" class="text" placeholder="<?php _e('搜索'); ?>" /></label>
                <button class="submit" type="submit">
                    <i role="img" class="fa fa-search"></i>
                </button>
            </form>
        </div>
        <div class="sidebar-item">
            <!-- 时间倒计时代码开始 -->
            <section id="blog_info" style=" background: white; ">
                <h5 style="padding: 16px 16px 0 16px;"><?php _e("时间流逝") ?></h5>
                <div class="sidebar-count" style="width: 100%; display: flex;">
                    <div class="content" style="padding: 15px; width: 100%;">
                        <div class="item" id="dayProgress">
                            <div class="title">今日已经过去<span></span>小时</div>
                            <div class="progress">
                                <div class="progress-bar">
                                    <div class="progress-inner progress-inner-1"></div>
                                </div>
                                <div class="progress-percentage"></div>
                            </div>
                        </div>
                        <div class="item" id="weekProgress">
                            <div class="title">这周已经过去<span></span>天</div>
                            <div class="progress">
                                <div class="progress-bar">
                                    <div class="progress-inner progress-inner-2"></div>
                                </div>
                                <div class="progress-percentage"></div>
                            </div>
                        </div>
                        <div class="item" id="monthProgress">
                            <div class="title">本月已经过去<span></span>天</div>
                            <div class="progress">
                                <div class="progress-bar">
                                    <div class="progress-inner progress-inner-3"></div>
                                </div>
                                <div class="progress-percentage"></div>
                            </div>
                        </div>
                        <div class="item" id="yearProgress">
                            <div class="title">今年已经过去<span></span>个月</div>
                            <div class="progress">
                                <div class="progress-bar">
                                    <div class="progress-inner progress-inner-4"></div>
                                </div>
                                <div class="progress-percentage"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- 时间倒计时代码结束 -->
        </div>

        <div class="copyright">
            <p><?php $this->options->copyright(); ?></p>
        </div>
    </div>
</div>