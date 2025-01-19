<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

<script src="https://blog.cdn.yechan.net/public/nanbo/lazyload.js"></script>
<script type="text/javascript">window.function.execute('image', 'targetAll', 'friends');</script>

<script type="text/javascript" src="https://blog.cdn.yechan.net/public/nanbo/katex.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://blog.cdn.yechan.net/public/nanbo/katex.min.css"/>
<script type="text/javascript" src="https://blog.cdn.yechan.net/public/nanbo/auto-render.min.js"></script>
<script type="text/javascript">window.function.katex();</script>

<link rel="stylesheet" href="<?php $this->options->themeUrl('assets/OwO.min.css'); ?>">
<script src="<?php $this->options->themeUrl('assets/OwO.js'); ?>"></script>
<script>window.function.OwO();</script>

<script src="https://blog.cdn.yechan.net/public/nanbo/jquery.fancybox.min.js"></script>
<script src="https://blog.cdn.yechan.net/public/nanbo/highlight.min.js"></script>
<script>window.function.highlight();</script>

<?php $this->footer(); ?>

<script src="https://blog.cdn.yechan.net/public/nanbo/jquery.pjax.min.js"></script>
<script src="https://blog.cdn.yechan.net/public/nanbo/nprogress.min.js"></script>
<script>window.function.footer()</script>
<!-- 输入框的烟花效果 -->  
<script type="text/javascript" src="//blog.cdn.yechan.net/public/js/commentTyping.js"></script>
<!-- 时间流逝 -->  
<script src="//blog.cdn.yechan.net/public/js/timeinfo.js"></script>
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
