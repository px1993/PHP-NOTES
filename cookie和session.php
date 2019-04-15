<?php


/**
 * PHP 会话控制技术
 *
 */

/**
 * 5.1 为什么要使用会话技术
 *
 * 由于http协议是无状态的，同一个用户连续两次请求不同的页面会认为不是同一个用户进行的访问。这就有问题了
 * 比如用户已经登录了，然后再跳转到订单页面发现自己还是未登录的状态，因此需要使用会话技术来记录用户的状态，以便知道用户是否进行了页面的跳转
 *
 */


/**
 * 5.2 cookie
 *
 * 涉及到 cookie的函数
 *
 * setcookie($name,$value,$expire,$path,$domain,$secure) //键 值 过期时间 路径 域名 安全
 * $_COOKIE() 读取cookie
 *
 * 优点：将用户的信息储存在用户的客户端不会占用服务端的资源
 * 缺点：不安全，用户可以禁用cookie
 *
 */

/**
 * 5.3 session
 *
 * session信息存储在服务端，客户端存的是sessionId session是基于cookie
 *
 * session相关的函数
 * session_start() //开启session
 * $_SESSION() 获取session的值
 * session_destroy();
 */

//session.auto_start =; //自动开启session
//session.cookie_domain =; //存取的sessionId的cookie的有效域名
//session.cookie_lifetime =; //cookie的过期时间i
//session.cookie_path =; //cookie的路径
//session.session_save_path =; //

//session的垃圾回收机制
//session.gc.probability = 1;
//session.gc.divisor = 100;
//session.gc.maxlifetime = 1440;  //当前的时间-最后的修改时间 > 1440  每清除一百次会有一次清除成功的机会


//session.save_handle = 'redis';

/**
 * 5.4 session存储，如果有多台服务器，可以将session存储到数据库 memcache redis中
 *
 *
 */

//session_set_save_handler();  //将session储存到redis等