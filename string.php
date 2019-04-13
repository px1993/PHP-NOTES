<?php
namespace PHP;
/**
 * PHP面试知识复习
 *P
 */

/**
 *=============================================================PHP面试题详解======================================================================
*/

/**
 * 1.1 PHP的引用传递
 *
 */

/**
 * 1.2 PHP定义字符串的几种方式
 * 单引号、双引号、heredoc(<<<EOT)和newdoc(<<<'EOT')
 * 区别：双引号可以解析变量，转义字符而单引号不可以；单引号和双引号都可以使用.进行连接；单引号比双引号的执行效率更好；heredoc和newdoc主要用于比较长的字符串；
 * 注意：双引号中的单引号不
 */
//$a   = 'newStr';
//$str = "abcdef{&&$a&&}g";
//var_dump($str);
//
//echo PHP_EOL;
//
//$str = <<<'EOL'
//SELECT * FROM `dvb_user` WHERE `userName` = 'panda' AND `sex` = '1' AND  `money` > 280 LEFT JOIN `dvb_hotel` ON
//`dvb_user`.id = `dvb_hotel`.user_id;
//EOL;
//

/**
 * 1.3 PHP的数据类型
 * PHP的数据类型有8种(整形、字符型、浮点型、数组、对象、null、资源、布尔型) 可以分为三类(标量 符合 特殊)
 * 注意：浮点类型不能用于准确的相等判断中；布尔类型包括（0、''、'0'，[],false,null,0.0）
 */
//var_dump($str);
//
//$a = 0.1;
//$b = 0.4;
//
//if((float)$a + (double)$b === (float)0.5){
//    echo 'true';
//}else{
//    echo 'false';
//}
//

/**
 * 1.4 PHP中的超全局数组
 * $_GLOBALS,$_GET,$_POST,$_REQUEST,$_SERVER,$_SESSION,$_COOKIE,$_FILES,$_ENV
 * 注意：$_GLOBALS包含其他所有的全局数组 主要记住 $_SERVER['SERVER_ADDR'] $_SERVER['REMOTE_ADDR'] $_SERVER['HTTP_USER_AGENT']
 */
//var_dump($_SERVER);

/**
 * 1.5 NULL的三种情况
 * 直接对变量赋值为NULL 、变量未定义、变量被销毁
 */
//var_dump($a);
//$a = 'a';
//unset($a);
//var_dump($a);


/***
 * 1.6 比较常量 const和define (常量一经定义不能进行修改和删除)
 * PHP预定义常量 __FILE__、__LINE__、__DIR__、__FUNCTION__、__CLASS__、__TRAIT__、__METHOD__、__NAMESPACE__
 *
 * Class IndexClass
 */
//class IndexClass{
//    //定义常量，const可以定义在类内，而define不可以
//    const A = 'a';
//    const B = 'b';
//}
//define('AAA',5);
//define('BBB',6);
////测试修改define常量
//define('AAA',4);  //这种用法不会真正的修改到常量的值
//var_dump(AAA);
//var_dump(BBB);
//$indexClass = new IndexClass();
//var_dump($indexClass::A);
//var_dump(__FILE__); //当前文件的路径和文件名
//var_dump(__LINE__); //返回当前的行号
//var_dump(__DIR__); //返回当前文件所在的目录路径
//class TestClass{
////    //初始化
//    public function __construct()
//    {
////          var_dump(__CLASS__); //返回当前的类名
//            var_dump(__FUNCTION__); //返回当前的方法名
//    }
//
//    public function test()
//    {
//        var_dump(__FUNCTION__);   //__METHOD__和__FUNCTION__位于类外，没有区别；位于类内，__METHOD__会多一个类名 string(15) "TestClass::test"
//        var_dump(__METHOD__);
//    }
//}
//
//$obj = new TestClass(); $obj->test();

//trait TraitTest{
//    //
//    public function test()
//    {
//        echo 1;
//    }
//}
//
//class Index{
//    use TraitTest;
//
//    public function __construct()
//    {
//        $this->test();
//    }
//
//    public function testTrait()
//    {
////        var_dump(__TRAIT__);
//    }
//}
//
//$a = new Index(); $a->testTrait();
//var_dump(__NAMESPACE__); //返回当前文件的命名空间