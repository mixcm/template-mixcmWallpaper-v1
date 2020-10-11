<?php
function  do_html_head ($title){
	if ($title!=""){
		echo '  <title>'.$title.' - 壁纸</title>'."\n";
	}else {
		echo '  <title>壁纸</title>'."\n";
	}
	echo '  <meta charset="utf-8">'."\n";
	echo '  <meta name="description" content="描述">'."\n";
	echo '  <meta name="keywords" content="关键词,关键词">'."\n";
	echo '  <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">'."\n";
	echo '  <link rel="shortcut icon" href="//'.$_SERVER['HTTP_HOST'].'/static/favicon.ico">'."\n";
	echo '  <link href="//cdn.bootcss.com/simple-line-icons/2.4.1/css/simple-line-icons.css" rel="stylesheet">'."\n";
}      /* 输出HTML页头内容 */
?>