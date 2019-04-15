<?php

/**
 * PHP常用的文件系统
 *
 */


/**
 * 真题：向一个已知的文件中的头部插入 Hello World
 *
 */

//1.打开文件
//$file    = './test.txt';
//$content = '';
////2.以只读的方式，读取文件中的内容
//if (file_exists($file)){
//    $handle  = fopen($file,'r');
//    $content = fread($handle,filesize($file));
//    //3.关闭文件
//    fclose($handle);
//}
////4.以只写的方式打开文件
//$handle  = fopen($file,'w');
////5.拼接新的字符串进行写入
//$content = "Hello World \t" . $content;
//fwrite($handle,$content);
////6.关闭文件
//fclose($handle);

/**
 * 4.1 PHP常用的文件函数复习
 *
 */

//$file = './test.txt';
//var_dump(basename($file));  //basename()返回文件名
//var_dump(copy($file,'./test1.txt'));  //copy() 拷贝文件，如果目标文件已经存在，则会进行覆盖 overwrite
//var_dump(unlink('./test1.txt'));  //unlink() 删除文件，如果文件不存在，返回fasle，并且产生一个警告，所以在删除前需要先判断文件是否真的存在
//if (file_exists('./test1.txt')){
//    unlink('./test1.txt');
//}
//var_dump(dirname(__FILE__));  //dirname()返回当前文件的文件目录，只会返回目录。如果文件使用的是相对路径，则只会返回相对路径的地址
//fopen() //没什么好说的，在读取和写入文件之前首先要打开文件，打开的几种方式 r只读 r+读写，指针在文件的头部，如果直接使用则会将后面的字符替换掉 w只写w+读写指针在文件的头部 a只写，相当于在文件的尾部进行追加
//a+读写文件尾部进行追加 append的简写 x创建并以写入方式打开，指针在文件的头部 x+类似x=，读写方式打开 b打开一个二进制文件
//注意：当写入一个文本文件并想插入一个新行时，需要使用符合操作系统的行结束符号。基于 Unix 的系统使用 \n 作为行结束字符，基于 Windows 的系统使用 \r\n 作为行结束字符，基于 Macintosh 的系统使用 \r 作为行结束字符。
//fread() //没什么还说的，读取文件的内容。需要两个参数，第一个为打开的文件资源，第二个为要读取的内容的大小
//var_dump(filesize($file));  //文件的大小
//fwrite(); //三个参数 第一个已经打开的文件资源 第二个为要插入的文件的内容 第三个要插入的文件的大小 和fputs()用法一致
//fclose();  //没什么好说的，打开文件操作完之后要关闭文件,需要传递已经打开的文件的资源
//fclose(fopen($file,'r'));
//var_dump(fileatime($file)); //返回上次访问                                                                                                                                                                                                                                                                                                                                                         文件的时间戳
//filectime(); //上次修改的时间戳
//var_dump(flock($file));  //为文件加锁，比如对临界资源的等待
//fgetc()  //从文件中读取字符
//fgets() //从文件中读取一行
//unlink($file); //删除文件

/**
 * 4.2 对目录的操作
 *
 * 通过PHP函数的方式对目录进行遍历
 * 涉及到的函数 opendir() mkdir() rmdir() readdir()只会删除空的文件夹
 * 使用递归的方法
 */
//$dir = './test';

//递归要使用函数
//function loopDir($dir){
//    //1.判断传递进去的是不是文件夹
//    if (!is_dir($dir)){
//        return false;
//    }
//    //2.打开文件夹
//    $handle = opendir($dir);
//    //3.循环读取文件夹中的每一个文件
//    while(false !== ($file = readdir($handle))){
//        //4.过滤当前目录和上级目录
//        if ($file != '.' && $file != '..'){
//            //5.判断当前文件是不是DIR类型
//            if (filetype($dir . '/' .$file) == 'dir'){
//                loopDir($dir . '/' . $file);
//            }else{
//                //6.打印
//                echo $file . PHP_EOL;
//            }
//        }
//    }
//}
//
//loopDir($dir);


/**
 * 4.3 注意事项
 *
 */

//1.在删除文件的时候，注意要过滤..文件夹，有可能无限向上删除
//2.在操作文件的时候，必须先要打开文件


