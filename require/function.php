<?php
function get_require_function($name) {
    require_once(Root_Path."/require/".$name.".php");
    echo "\n";
}   /* 请求函数表 */
function get_require_content($name) {
    if(file_exists(Root_Path."/content/".$name.".php")){
        require_once(Root_Path."/content/".$name.".php");
    }else{
        require_once(Root_Path."/content/404.php");
    }
    echo "\n";
}   /* 请求content目录下文件 */
function get_static_css ($name) {
    return '<link href="//'.$_SERVER['HTTP_HOST'].'/mixcm-bizhi/static/css/'.$name.'.css?v=63" rel="stylesheet">'."\n";
}   /* 返回css链接 */
function get_static_js ($name) {
    return '<script data-no-instant src="//'.$_SERVER['HTTP_HOST'].'/mixcm-bizhi/static/js/'.$name.'.js?v=1"></script>'."\n";
}   /* 返回js链接 */
?>