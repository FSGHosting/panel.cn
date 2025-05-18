<?php

return [
    'exceptions' => [
        'no_new_default_allocation' => '您正试图删除此伺服器的预设分配，但没有可用的备用分配。',
        'marked_as_failed' => '此伺服器被标记为先前安装失败。无法在此状态下切换目前状态。',
        'bad_variable' => ':name 变数验证错误。',
        'daemon_exception' => '在尝试与守护程序通信时发生异常，导致 HTTP/:code 响应代码。此异常已被记录。 （请求 ID：:request_id）',
        'default_allocation_not_found' => '未在此伺服器的分配中找到请求的预设分配。',
    ],
    'alerts' => [
        'startup_changed' => '此伺服器的启动配置已更新。如果更改了此伺服器的nest或egg，将立即进行重新安装。',
        'server_deleted' => '伺服器已成功从系统中删除。',
        'server_created' => '伺服器已成功在控制面板上创建。请允许程序几分钟时间完全安装此伺服器。',
        'build_updated' => '此伺服器的构建详细讯息已更新。某些更改可能需要重新启动才能生效。',
        'suspension_toggled' => '伺服器暂停状态已更改为 :status。',
        'rebuild_on_boot' => '此伺服器已标记为需要 Docker 容器重建。这将在下次启动伺服器时发生。',
        'install_toggled' => '此伺服器的安装状态已切换。',
        'server_reinstalled' => '此伺服器已匡列进行重新安装，准备开始。',
        'details_updated' => '伺服器详细讯息已成功更新。',
        'docker_image_updated' => '已成功更改此伺服器使用的默认 Docker 映像。需要重新启动以应用此更改。',
        'node_required' => '在添加伺服器到此控制面板之前，您必须配置至少一个节点。',
        'transfer_nodes_required' => '在转移伺服器之前，您必须配置至少两个节点。',
        'transfer_started' => '已启动伺服器转移。',
        'transfer_not_viable' => '您选择的节点没有足够的磁碟空间或可用内存来容纳此伺服器。',
    ],
];
