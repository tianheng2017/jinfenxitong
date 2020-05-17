<?php
use think\facade\Db;
// 数据库配置信息设置（全局有效）
Db::setConfig([
    // 默认数据连接标识
    'default'     => 'mysql',
    // 数据库连接信息
    'connections' => [
        'mysql' => [
            // 数据库类型
            'type'     => 'mysql',
            // 主机地址
            'hostname' => 'localhost',
            // 用户名
            'username' => 'jinfenxitong_com',
            // 密码
            'password'  =>'3d42EeGKy4GArYHy',
            // 数据库名
            'database' => 'jinfenxitong_com',
            // 数据库编码默认采用utf8
            'charset'  => 'utf8',
            // 数据库表前缀
            'prefix'   => '',
            // 数据库调试模式
            'debug'    => true,
        ],
    ],
]);
