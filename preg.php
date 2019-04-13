<?php

/**
 * Created by PhpStorm.
 * User: panda<439708795@qq.com>
 * Date: 2019/4/13
 * Time: 22:01
 */

//PHP正则表达式
/**
 * 3.1 正则表达式
 *
 * 正则表达式的作用：分割、查找、匹配、替换
 * 常用的分隔符：正斜线（/） hash符号（#）以及取反符号（~）
 * 通用原子： \d [0-9] \D ![0-9] \w [数字、字母、下划线] \W ![数字、字母、下划线] \s 空白符 \S !空白符
 * 元字符：.![换行符] * 匹配前面的内容0 1 多次  ?  ^ $ + {n} {n,} {n,m} [] () [^] | [-]
 * 模式修正符 i m e s U x A D u
 * 涉及到的函数 preg_match() preg_match_all() preg_replace() preg_split()
 */

/**
 * 3.2 正则表达式后向引用
 *
 * 需要匹配的用括号括起来
 *
 */
//$str = '<b>abc</b>';  //将其中的b替换成其他
//$pattern  = '/<b>(.*)<\/b>/';
////$result  = preg_match($pattern,$str); //匹配是都在<b></b>中
//$result   = preg_replace($pattern,'\\1',$str); //去掉b标签
//var_dump($result);

/**
 * 3.3 正则表达式的贪婪模式
 *
 * 如果含有多个标签，正则表达式的贪婪模式会匹配第一个和最后一个
 * 解决方法在 .* 后面加个? 取消贪婪模式
 */
//$str = '<b>abc</b><b>bcd</b>';  //将其中的b替换成其他
//$pattern  = '/<b>(.*?)<\/b>/';
//$result   = preg_replace($pattern,'\\1',$str); //去掉b标签
//var_dump($result);


/**
 * 3.4 PHP正则表达式匹配中文
 *  中文字符在utf-8模式下的 0x4e00-0X9fa5
 *  gbk需要加chr() 函数
 *
 *  注意：中文字符匹配需要加+
 */
//$str = '我爱我家';
//$pattern = '/[\x4e00-\x9fa5]+/';
//preg_match($pattern,$str,$match);
//var_dump($match);

/**
 * 3.5 练习 写一个139开头的手机号
 *
 */
//$str     = '13968547896';
//$pattern = '/139[0-9]{8}/';
//preg_match($pattern,$str,$match);
//var_dump($match);
//$str = 'https://www.baidu.com';
//$pattern = '/^(http|https):\/\/(.*)+/';
//preg_match($pattern,$str,$match);
//var_dump($match);
//请写出一个正则表达式，取出页面中的所有的img标签的src值
//$str     = '<img class="index-top" src="http://www.baidu.com/1" id="index" /><p><video src="aaa"></video></p><img class="index-top-2" src="http://www.baidu.com/2" width="100%" />';
/*$pattern = '/<img.*?src="(.*?)".*? \/?>/i';*/
//$result  = preg_replace($pattern,'\\1',$str);
//var_dump($result);