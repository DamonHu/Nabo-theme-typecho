<?php
/**
 * @author gaobinzhan <gaobinzhan@gmail.com>
 * @modify 小码农 <chengshongguo@qq.com> 增加实例化方法
 */

require_once 'Service.php';

class WeChatService extends Service
{
    public static function create(){

		static $instance ;
		if (!$instance){ 
		    $instance = new WeChatService();
		}
		return $instance;
	}
    public function __handler($active, $comment, $plugin)
    {
        try {
            $isPushBlogger = $plugin->isPushBlogger;
            if ($comment['authorId'] == 1 && $isPushBlogger == 1) return false;


            $weChatScKey = $plugin->weChatScKey;
            if (empty($weChatScKey)) throw new \Exception('缺少Server酱配置参数');

            $title = $active->title;
            $author = $comment['author'];
            $link = $active->permalink;
            $context = $comment['text'];

            $template = '标题：' . $title . PHP_EOL
                . '评论人：' . $author . " [{$comment['ip']}]" . PHP_EOL
                . '评论内容：' . $context . PHP_EOL
                . '链接：' . $link . '#comment-' . $comment['coid'];

            $params = [
                'text' => '有人给你评论啦！！',
                'desp' => $template
            ];

            $context = stream_context_create([
                'http' => [
                    'method' => 'POST',
                    'header' => 'Content-type: application/x-www-form-urlencoded',
                    'content' => http_build_query($params)
                ]
            ]);

            $result = file_get_contents('https://sctapi.ftqq.com/' . $weChatScKey . '.send', false, $context);
            self::logger(__CLASS__, '', $params, $result);
        } catch (\Exception $exception) {
            self::logger(__CLASS__, '', '', '', $exception->getMessage());
        }

    }
}
