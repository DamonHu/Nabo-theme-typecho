<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

<script src="<?php $this->options->themeUrl() ?>assets/lazyload.js"></script>
<script type="text/javascript">window.function.execute('image', 'targetAll', 'friends');</script>

<script type="text/javascript" src="<?php $this->options->themeUrl() ?>assets/katex.min.js"></script>
<link rel="stylesheet" type="text/css" href="<?php $this->options->themeUrl() ?>assets/katex.min.css"/>
<script type="text/javascript" src="<?php $this->options->themeUrl() ?>assets/auto-render.min.js"></script>
<script type="text/javascript">window.function.katex();</script>

<link rel="stylesheet" href="<?php $this->options->themeUrl('assets/OwO.min.css'); ?>">
<script src="<?php $this->options->themeUrl('assets/OwO.js'); ?>"></script>
<script>window.function.OwO();</script>

<script src="<?php $this->options->themeUrl() ?>assets/jquery.fancybox.min.js"></script>
<script src="<?php $this->options->themeUrl() ?>assets/highlight.min.js"></script>
<script>window.function.highlight();</script>

<?php $this->footer(); ?>

<script src="<?php $this->options->themeUrl() ?>assets/jquery.pjax.min.js"></script>
<script src="<?php $this->options->themeUrl() ?>assets/nprogress.min.js"></script>
<script>window.function.footer()</script>
<!-- 输入框的烟花效果 -->  
<script type="text/javascript" src="<?php $this->options->themeUrl() ?>assets/commentTyping.js"></script>
<!-- 时间流逝 -->  
<script src="<?php $this->options->themeUrl() ?>assets/timeinfo.js"></script>
<!-- 百度统计 -->  
<script>
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "https://hm.baidu.com/hm.js?4dfe11b691932c23b9d4dffe548820aa";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})();
</script>
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-ZVK6FRVXZ4"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-ZVK6FRVXZ4');
</script>
</body>
</html>
