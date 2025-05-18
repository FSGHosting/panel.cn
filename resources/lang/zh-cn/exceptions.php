<?php

return [
    'daemon_connection_failed' => '在尝试与守护程序(Daemon)通信时发生异常，导致 HTTP/:code 响应代码。此异常已被记录。',
    'node' => [
        'servers_attached' => '要删除节点，必须先取消连接到它的所有伺服器。',
        'daemon_off_config_updated' => '守护程序配置 <strong>已更新</strong>，但在尝试自动更新守护程序上的配置文件（config.yml）时遇到错误。您需要手动更新守护程序的配置文件以应用这些更改。',
    ],
    'allocations' => [
        'server_using' => '当前有伺服器分配到此分配上。只有在没有伺服器分配时，才能删除分配。',
        'too_many_ports' => '一次添加超过 1000 个端口范围不受支持。',
        'invalid_mapping' => '提供给 :port 的映射无效且无法处理。',
        'cidr_out_of_range' => 'CIDR 表示法仅允许掩码介於 /25 和 /32 之间。',
        'port_out_of_range' => '分配中的端口必须大於 1024 并且小於或等於 65535。',
    ],
    'nest' => [
        'delete_has_servers' => '无法从控制面板中删除已连接到活动伺服器的nest。',
        'egg' => [
            'delete_has_servers' => '无法从控制面板中删除已连接到活动伺服器的蛋。',
            'invalid_copy_id' => '用於复制脚本的所选蛋不存在，或者正在复制脚本自身。',
            'must_be_child' => '此蛋的 "从中复制设置" 指令必须是所选nest的子选项。',
            'has_children' => '此蛋是一个或多个其他egg的父egg。请在删除此蛋之前删除那些egg。',
        ],
        'variables' => [
            'env_not_unique' => '环境变数 :name 必须在此egg中唯一。',
            'reserved_name' => '环境变数 :name 受保护，不能分配给变数。',
            'bad_validation_rule' => '":rule" 验证规则对於此应用程序无效。',
        ],
        'importer' => [
            'json_error' => '在尝试解析 JSON 文件时发生错误：:error。',
            'file_error' => '提供的 JSON 文件无效。',
            'invalid_json_provided' => '提供的 JSON 文件不符合可识别的格式。',
        ],
    ],
    'subusers' => [
        'editing_self' => '不允许编辑自己的子用户帐户。',
        'user_is_owner' => '您无法将伺服器所有者添加为此伺服器的子用户。',
        'subuser_exists' => '已经将该电子邮件地址的用户指定为此伺服器的子用户。',
    ],
    'databases' => [
        'delete_has_databases' => '无法删除已连接到活动数据库的数据库主机伺服器。',
    ],
    'tasks' => [
        'chain_interval_too_long' => '连锁任务的最大间隔时间为 15 分钟。',
    ],
    'locations' => [
        'has_nodes' => '无法删除已连接到活动节点的位置。',
    ],
    'users' => [
        'node_revocation_failed' => '无法在 <a href=":link">节点 #:node</a> 上撤销金钥。 :error',
    ],
    'deployment' => [
        'no_viable_nodes' => '找不到满足自动部署指定要求的节点。',
        'no_viable_allocations' => '找不到满足自动部署要求的分配。',
    ],
    'api' => [
        'resource_not_found' => '在此伺服器上找不到请求的资源。',
    ],
];
