<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<!DOCTYPE HTML>
<html lang="zh">
<head>
    <meta charset="<?php $this->options->charset(); ?>">
    <link rel="icon" href="<?php $this->options->faviconUrl(); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="renderer" content="webkit">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title><?php $this->archiveTitle(array(
            'category' => _t('分类 %s 下的文章'),
            'search' => _t('包含关键字 %s 的文章'),
            'tag' => _t('标签 %s 下的文章'),
            'author' => _t('%s 发布的文章')
        ), '', ' - '); ?><?php $this->options->title(); ?></title>
    <link rel="stylesheet" href="<?php $this->options->themeUrl('style.css?v=0746'); ?>">
    <link href="<?php $this->options->themeUrl() ?>assets/nprogress.min.css" rel="stylesheet">
    <link href="<?php $this->options->themeUrl() ?>assets/font-awesome.min.css" rel="stylesheet">
    <link href="<?php $this->options->themeUrl() ?>assets/jquery.fancybox.min.css" rel="stylesheet"/>

    <!--[if lt IE 9]>
    <script src="//cdnjscn.b0.upaiyun.com/libs/html5shiv/r29/html5.min.js"></script>
    <script src="//cdnjscn.b0.upaiyun.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    <script src="<?php $this->options->themeUrl('script.js?v=0735'); ?>"></script>
    <script>
        window.kat.options = {
            siteUrl: '<?php $this->options->siteUrl() ?>',
            themeUrl: '<?php $this->options->themeUrl() ?>'
        }
        window.kat.gallery = {
            valve: <?= intval($this->options->galleryValve); ?>
        }
    </script>
    <script src="<?php $this->options->themeUrl() ?>assets/jquery.min.js"></script>
    <?php $this->header("pingback=&wlw=&xmlrpc=&rss2=&atom=&rss1=&template=&generator=&antiSpam=&commentReply="); ?>
</head>
<body class="kat light">
<!--[if lt IE 8]>
    <div class="browsehappy" role="dialog"><?php _e('当前网页 <strong>不支持</strong> 你正在使用的浏览器. 为了正常的访问, 请 <a href="http://browsehappy.com/">升级你的浏览器</a>'); ?>.</div>
<![endif]-->