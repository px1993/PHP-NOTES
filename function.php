<?php
/**
 * Created by PhpStorm.
 * User: panda<439708795@qq.com>
 * Date: 2019/4/13
 * Time: 18:56
 */

/**
 * 真题
 *
 */
//$count = 5;
//function get_count(){
//    static $count;
//    return $count++;
//}
//echo $count;  //outer 5
//++$count;  //outer 6
//echo get_count(); //inner NULL
//echo get_count(); //inner 1

/**
 * 2.1 变量的作用域和静态变量
 *
 * 变量的作用域：变量生效的范围，这个范围的跨度包括require和include引入的文件
 * 函数外面的变量（全局变量）一般情况不可以直接在函数内部进行使用，如果要在函数内部使用外部的定义的变量可以使用global或者其他超全局数组关键字；
 * 静态变量 static 静态变量只会存在于函数内部，函数外部的变量不受其影响，但当程序离开此程序作用域，其值不会随着函数的执行完毕而消失
 * 静态变量的特点：①仅初始化一次；②初始化的时候需要赋值；③每次执行完函数该值保留 ④static修饰的变量是局部的，仅在函数内部有效 ⑤可以用来记录函数调用的次数
 */

/**
 * 2.2 函数的参数
 *
 * 默认情况下，函数的参数传递是通过值传递的，如果想在函数的内部修改参数的值，需要进行引用传递，即在参数的前面加上&
 */
//
//$a = 1; //1
//function test_function_params(&$a){
//    $a++;
//    echo $a;
//    echo PHP_EOL;
//}
//$a++; //2
//echo test_function_params($a);  //3
//echo $a; //3

/**
 * 2.3 函数的返回值
 *
 * 使用return进行返回，函数中一旦执行到return则马上进行返回
 * 可以返回数组，对象等php基本数据类型
 * 原则上不允许返回多个值，可以通过数组来保存多个值
 * 引用返回：需要在函数声明和值返回的时候加上引用符号
 */
//function &my_func(){
//    static $a = 3;
//    return $a;
//}
//echo my_func(); //10
//$a = &my_func();//将外部的$a和内部的$a的变量指向相同的内存空间
//$a = 100; //修改内存空间的值
//echo my_func(); //100

/**
 * 2.4 外部引用
 *
 * 外部引用文件需要指明引用文件的具体路径，如果没有指定则会去系统的include_path文件下查找,如果include_path也没有，则会从当前目录进行查找
 * 如果在以上三个地方都没有找到，那么加载文件就会报错，include会产生警告，require会产生致命的错误 include_once和require_once
 */
//include 'index1.php';
//require 'index1.php';

/**
 * 2.5 常用的PHP内置函数
 *
 * 时间日期函数 Ip处理函数 打印处理函数 序列化函数 字符串处理函数 数组处理函数 https://php.net/
 */
//var_dump(date('Y-m-d H:i:s',1494221221));  //将时间戳格式化成日期时间类型
//var_dump(time());  //time() 打印当前的时间戳
//var_dump(strtotime('2018-12-7 12:30'));  //将英文的日期时间转化为时间戳
//var_dump(mktime(12,45,11,3,23,2019)); //输出一个指定日期时间的时间戳
//var_dump(microtime()); //返回当前的Unix时间戳和微秒数
//date_default_timezone_set('Asia/Shanghai'); //设定用于一个脚本中所有日期时间函数的默认时区
//ip相关
//var_dump(ip2long('192.168.1.1'));  //将 IPV4 的字符串互联网协议转换成长整型数字
//var_dump(long2ip(3232235778)); //将 长整型数字 转化成 IPV4 的字符串互联网协议转
//打印相关 print() echo() printf() sprintf() printf_r()只能针对数组和对象  var_dump() var_export()
//字符串处理函数
//implode(); //将多个数组,用指定的字符连接起来 join()===implode()
//explode(); //将字符串分割成数组
//$a = ['1','2','3'];  var_dump(implode('-',$a));
//$str = '192.168.1.1';  var_dump(explode('.',$str));
//$str = '192.168.1.1'; var_dump(strrev($str)); //翻转字符串
//$str = ' 123 455\t '; var_dump($str); var_dump(trim($str)); //过滤字符串首部和尾部的空白字符（或者其他字符）
//ltrim() rtrim() left right
//$str = '192.168.1.1'; var_dump(strstr($str,'.')); //strstr();  //查找字符串的首次出现
//echo number_format(125,'3');  //以千位分隔符方式格式化一个数字

