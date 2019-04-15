<?php

/**
 * Mysql相关操作点
 *
 */


/**
 * 真题：请写出下面mysql数据类型表达的意义 （int(0) char(16) varchar(16) datetime text）
 *
 */


/**
 * 12.1 mysql数据类型
 *
 * tinyint smallint bigint
 * 整数类型 int(11) 这个11只是显示的宽度，并不会影响取值范围，最小宽度 整形括号里面的数据对于大多数应用是没有意义的
 * 实数类型 float double decimal decimal是比bigint还大的整数，但是会被当做字符串来处理
 * varchar(可变长度，超出长度会被截断） char(固定长度，会根据需要补充空格，适合比较短的字符串，或者长度都差不多的，比如密码 唯一标识等，超出长度会被截断) text blob
 * 对于经常变更的数据，char比varchar更好，插入不容易产生碎片，对于比较短的字符，char比varchar更有效率
 * 进行不使用text和blob，会先查询临时表，造成不必要的开销
 *
 * 枚举类型
 *
 * 日期和时间类型 尽量使用timestamp 比 datetime 的 空间效率要高 ，如果要储存微秒，需要使用bigint
 */


/**
 * 12.2 列属性
 *
 * auto_increment 自增
 * default 默认值
 * not null 非空
 * zerofill 0填充
 */

/**
 * 12.3 mysql的基本操作
 *
 */
//mysql -u -h -p _P  //u username h host p password P port mysql连接
//\G //垂直显示 \c 取消mysql命令 \q 退出mysql \s 服务器状态 \h 帮助信息 \d 改变符号


/**
 * 12.4 mysql数据表引擎
 *
 */
// InnoDb 默认事务型引擎，数据存在共享表空间可以通过配置分开 对主键查询的性能要高于其他引擎 从磁盘读取数据时自动在内存构建hash索引 插入数据自动构建缓冲区 支持行级锁 支持外键
// MyISAM 5.1版本前默认的存储引擎 拥有全文检索 压缩和空间函数 不支持事务和行级锁 不支持热备份和安全


/**
 * 12.5 mysql的锁机制
 *
 */
//当多个查询同一时刻进行数据修改的时候，就会产生并发控制的问题，这个时候mysql会进行锁表。包括共享锁（读锁）和排它锁（互斥锁，写锁）
//写锁是临界资源，互斥的。同一个时候只能有一个进行写入
//事务处理 InnoDB


/**
 * 12.6 mysql触发器
 *
 */
//可以通过数据表中的中间表（外键）进行级联修改，不建议使用


/**
 * 12.7 mysql索引基础和类型
 *
 * mysql先去索引中找到对应的值，然后根据匹配的索引找到对应的数据行
 * 大大减少服务器需要扫描的数据量，帮助服务器避免排序和临时表 将随机IO变成顺序IO 大大提升查询速度 （影响：减低写的速度 占用磁更多的磁盘空间）
 */
//对于数据量比较小的表，不要使用索引，性能会更高。对于中大型表需要使用索引。特大型的表使用索引的代价也会变大，可以使用分区技术解决
//索引的类型 普通索引 唯一索引（唯一约束） 主键索引 一个表只能有一个主键索引，可以有多个唯一索引；主键索引一定是唯一索引，但是唯一索引不一定是主键索引 主键可以和外键参照建立约束，防止数据的不统一
//联合索引 将多个列组合在一起构成索引，涉及到多个列，为了减低索引的范围    外键索引  全文索引（只能对英文进行全文索引，没啥意思）


/**
 * 12.8 mysql索引创建的规则 ！！！
 *
 * 1.最适合做索引的列是出现在where字句里面的列，而不是select关键字后面的列
 * 2.索引列的基数越大，索引的效果越好
 * 3.对于字符串的索引，应该指定一个前缀长度，可以节省大量的索引空间
 * 4.根据情况创建符合索引，符合索引可以大大提高查询的效率
 * 5.避免创建过多的索引，索引会额外的占用磁盘空间，降低写操作的效率
 * 6.主键尽可能选择较短的数据类型，可以有效减少索引占用磁盘空间，提高查询效率
 */
//注意：
//1.符合索引遵循前缀原则
//2.like查询，%不能在前，可以使用全文检索解决问题  where name like "wang%"
//3.column is null 可以使用索引
//4.如果mysql估计使用索引比全表扫描更慢，会放弃使用索引
//5.如果or前的条件有索引 后面没有，那么索引不会被用到
//6.列类型是字符串类型，查询的时候一定要给值加引号，不然用不到索引


/**
 * 12.9 mysql语句的编写
 *
 */
//关联更新
$sql = <<<EOL
    UPDATE A,B SET A.c1 = B.c1,A.c2 = B.c2 WHERE A.id = B.id AND B.age > 50;
    UPDATE A AS t1 INNER JOIN B AS t2 ON ti.id = t2.id SET t1.c1 = t2.c1,t1.c2 = t2.c2 WHERE t2.age > 50; 
EOL;
//关联查询
//六种关联查询 cross join（笛卡尔积，没有意义）、inner join、left（right） join、union（union all）、full join
//内连接 等值连接 不等值连接 自连接 inner join = join inner可以省略不写
$sqlInner = <<<EOL
    SELECT * FROM A,B WHERE A.id = B.id AND B.id > 50;
    SELECT * FROM A t1 INNER JOIN B t2 ON t1.id = t2.id WHERE t2.age > 50;
    SELECT * FROM A t1 JOIN A t2 ON t1.id = t2.pid WHERE t1.age > 50;
EOL;
//外连接 left join 以左表为主 和right join 以右表为主 如果匹配不到用null填充
//联合查询union 把多条结果集集中在一起，以union前的结果为准，需要注意的是联合查询的列数要相等，相同的记录行会合并 union all
$sqlUnion = <<<EOL
    SELECT * FROM A UNION SELECT * FROM B....
EOL;
//全连接 mysql不支持全连接，可以使用left join 和 union 和 right join 联合使用
$sqlFull = <<<EOL
    SELECT * FROM A LEFT JOIN B ON A.id = B.id union SELECT * FROM A RIGHT join  B ON A.id = B.id;
EOL;
//嵌套查询 子查询
$sqlInclude = <<<EOL
    SELECT * FROM A WHERE (SELECT id FROM B WHERE B.age > 50);
EOL;

//example
$sqlExample = <<<EOF
    SELECT t1.teamName,m.matchResult,t2.teamName,m.matchTime 
        
    FROM `match` as m LEFT JOIN `team` as t1 ON t1.teamId = m.hostTeamId,left join `team` as t2 ON t2.teamId = m.guestTeamId 
    
    WHERE m.matchTime between "2016-6-1" AND "2016-9-1";
EOF;

























