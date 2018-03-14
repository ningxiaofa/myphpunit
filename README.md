#### win10 配置phpunit


###### 1.phpunit有多种安装方式推荐composer安装


###### 2.[win10 composer安装，并添加国内镜像](http://blog.csdn.net/likaibk/article/details/70909578)


###### 3.[phpunit的版本php的版本选择](https://www.awaimai.com/2381.html)


###### 4.cmd中测试 composer --version   phpunit --version


###### 5.测试代码
* git clone https://github.com/Caisen1988/phpunit.git
* cd \test   执行composer update
* cd test\tests
* phpunit BookTest

###### 6. 目录结构
```
├──test
    ├── composer.json
    ├── phpunit.xml      //phpunit全局引入的一下命令
    ├── src
    │ └── Book.php
    │ └── autoload.php  //类的自动载入
    └── tests
        └── BookTest.php
```

###### 7.[phpstorm 配置phpunit](https://juejin.im/post/5a40a3d551882506e50cdf70)

###### 7.PHPunit的安装和编写测试已经完成了。具体的操作请查看官方手册。 




