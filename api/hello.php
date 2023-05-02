<?php
//初始化随机数生成器种子，这行代码也可以删除
$seed = time();
//获取随机数
$num = mt_rand(0,3);
//拼接图片地址
$picpath = "https://github.moeyy.xyz/https://github.com/naya2016/cdn/releases/download/cdn/".$num.".gif";
//重定位到图片
die(header("Location: $picpath"));
?>

