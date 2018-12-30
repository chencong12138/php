# php
## 20181214
### 变量
- 变量就是可以改变的量
- 变量就是一个盒子，专门储存东西，在程序的执行过程中可以发生该改变的
### 变量的操作
- 给变量赋值 $a='';
- 输出变量echo
- 判断一个变量是否存在 isset();
- 销毁变量 unset();
- 双引号解析变量，单引号不解析变量
- 变量和字符串用点（.）来连接
### php数据类型
#### 标量
- 整型（INT）
- 浮动型（float)
- 布尔型（blooean)
- 字符串
#### 复合类型
- 数组(arrry)
- 对象(object)
#### 特殊类型
- 空(null)
- 资源(resource
)
### 常量
- 常量是程序运行的时候不可改变的量
- 常量的值为标量，作用域为全局，不能写到字符串中
- 系统常量 __FILE__
### 运算符
- 算术运算符：+-*/%
- 赋值运算符：= -= += *= /+ %= .=
- 自增运算符 ++ --
- 比较运算符:< > >= <= == === != !==
- 逻辑运算符：&& 逻辑与并且 有一个为假就是假，只有同时为真才是真；|| 逻辑或，多个同时为假才是假；！就是假变真，真变假
### 流程控制
- if(条件){为真}
- if(条件){为真}else{为假}
- else if
### 循环语句
- for循环
- while do 循环
###函数
- function name (){}
- return一遇到就会结束，后面的代码不执行，只是返回并没有输出，函数调用表达式的值就是函数的返回值
- 实参：调用函数的时候传入的值（就是把函数体外变量的值拿到函数体内来用）
- 函数体内局部变量(只在函数体内生效，程序执行完后自动销毁)，函数体外全局变量
- 超全局变量：函数体外体内都能用，一个意（$_GOT,$_POST)
- 静态变量：只会初始化一次，运行的时候会记住上一次的值，static变量不会被销毁
- ...arr 就是把数组里的值一一赋给形参
- 索引数组，二维数组，三维数组&&多维数组
- 数组增加:$arr[index],数组删除unset($arr[index],)
- for foreach list,each 遍历数组(循环数字)
####日期函数
- 时间戳：格林威治时间1970年1月1日零分零秒-现在的秒数
### mysql
- crete table table_name（name varchar(222))创建表
- drop table table_name删除表单
- alter table table_name change name1 name2 varchar(32);修改表的字段
- alter table table_name drop name;删除表的字段
- alter table table_name add name varchar(32) after name1/first;添加表的字段
- alter table table_name1 rename table_name2;修改表的名字
- hhh