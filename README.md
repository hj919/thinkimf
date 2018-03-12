# ThinkIMF是什么
## 一款基于PHP7+ 和 MariaDb/Mysql 的物联网设备管理框架
为物联网3.0进行驱动的软件,跨平台，开放源代码

##ThinkIMF有哪些功能？
* 用户管理
* 文章管理
* 智慧城市 TODO
* 数据地图 TODO
* 商品管理 TODO
* 物联网设备管理 TODO
* 物联网设备通信 TODO
* 物联网设备地理位置 TODO
* 推送服务 TODO
* 即使新闻 TODO
* 方便的`导入导出`功能 TODO



##有问题反馈或者加入我们
在使用中有任何问题，欢迎反馈给我，可以用以下联系方式跟我交流

* 邮件(unnnnn#foxmail.com, 把#换成@)
* QQ: 1367784103
##关于作者
* [Doung Master](https://dyoung.unnnnn.com)

* ThinkIMF Powered By PHP7.X  and Dyoung Chen


##docker使用

可以使用当前目录下的Dockerfile进行构建
```
 docker build -t registry.cn-hangzhou.aliyuncs.com/thinkimf/iot:thinkimf .
```

```
或者 docker pull registry.cn-hangzhou.aliyuncs.com/thinkimf/iot:thinkimf
```

```
启动 docker run -i -t -d -P -p 80:80 -p 3306:3306 -p 2110:22 --hostname thinimf registry.cn-hangzhou.aliyuncs.com/thinkimf/iot:thinkimf
```

```
启动后 使用 docker exec -i -t 容器ID /bin/bash/
```

```
进入后 执行 open_service (开启nginx,mysql,php-fpm,ssh)
```

```
之后可以远程访问  ssh -p 2110 root@ip   用户名:root,密码thinkimf
```

```php
<?php
    
  echo 'PHP是世界上最便捷的web开发语言';
  
```