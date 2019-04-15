<?php


/**
 * PHP开发环境 （nginx + php-fpm）
 *
 */

/**
 * 9.1 cgi协议  为了实现语言解析器和webserver之间的通信
 *
 */


/**
 * 9.2 fastcgi是cgi的改良
 *
 * cgi的效率很低，webserver每收到一个请求就会fork一个cgi进程，请求处理完再kill掉这个进程，这样很浪费
 * fastcgi 每次处理请求之后不会kill掉这个进程，保留这个进程，一个进程可以处理多个请求，不需要每次都fork
 *
 */

/**
 * 9.3 php-fpm php：fastcgi process manager fastcgi的进程管理器
 *
 * master进程 work进程（多个）一个进程嵌套PHP解析器 端口9000 通过nginx的反向代理，代理9000端口
 *
 */


/**
 * 9.4 PHP常见的配置项
 *
 *
 * register_globals 注册全局变量,不建议打开
 * allow_url_fopen 打开远程文件
 * allow_url_include 是否远程包含文件
 * date_timezone 时间
 * display_errors
 * error_reporting 错误级别
 * safe_mode 安全模式
 * upload_max_filesize 允许上传的文件大小
 * max_file_uploads 允许同时上传的数量
 * post_max_size 允许post上传的大小
 */



/**
 * 真题：请简述cgi fastcgi 和 php-fpm的区别
 *
 */

//cgi是一种协议，是为了实现webServer和语言解析器之间通信的协议。每当浏览器用请求出现时，webServer就会fork一个cgi进程，在这个请求处理完之后就会kill掉这个进程
//fastcgi是cgi协议的改良版。当webServer收到请求并且处理完之后，不会kill掉这个进程而是用来处理其他进程
//php-fpm是fastcgi的进程管理器。包括master进程和work进程。通常master进程负责和网络进行通信，而且work进程负责语言解析，每一个work进程包含一语言解析器

