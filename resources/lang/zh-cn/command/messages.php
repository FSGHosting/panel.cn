<?php

return [
    'location' => [
        'no_location_found' => '找不到与提供的简码相匹配的记录。',
        'ask_short' => '位置简码',
        'ask_long' => '位置描述',
        'created' => '成功创建新的位置 (:name)，ID 为 :id。',
        'deleted' => '成功删除所请求的位置。',
    ],
    'user' => [
        'search_users' => '输入用户名丶用户ID或电子邮件地址',
        'select_search_user' => '要删除的用户ID（输入\'0\'重新搜索）',
        'deleted' => '用户成功从面板中删除。',
        'confirm_delete' => '您确定要从面板中删除此用户吗？',
        'no_users_found' => '未找到符合提供的搜索条件的用户。',
        'multiple_found' => '找到了提供的用户的多个帐户，由於 --no-interaction 标志的存在，无法删除用户。',
        'ask_admin' => '此用户是否为管理员？',
        'ask_email' => '电子邮件地址',
        'ask_username' => '用户名',
        'ask_name_first' => '名字',
        'ask_name_last' => '姓氏',
        'ask_password' => '密码',
        'ask_password_tip' => '如果您想使用随机密码向用户发送电子邮件来创建帐户，请重新运行此命令（CTRL+C）并传递 `--no-password` 标志。',
        'ask_password_help' => '密码必须至少包含 8 个字符，并且应包含至少一个大写字母和一个数字。',
        '2fa_help_text' => [
            '如果启用了用户帐户的双重验证，此命令将禁用它。这应仅用作用户无法访问其帐户时的帐户恢复命令。',
            '如果这不是您想要做的事情，请按 CTRL+C 退出此流程。',
        ],
        '2fa_disabled' => '已为 :email 禁用 2 启用身份验证。',
    ],
    'schedule' => [
        'output_line' => '正在调度 `:schedule`（:hash）中的第一个任务。',
    ],
    'maintenance' => [
        'deleting_service_backup' => '正在删除服务备份文件 :file。',
    ],
    'server' => [
        'rebuild_failed' => '在节点 ":node" 上重建 ":name"（#:id）的请求失败，错误讯息为：:message',
        'reinstall' => [
            'failed' => '在节点 ":node" 上重新安装 ":name"（#:id）的请求失败，错误讯息为：:message',
            'confirm' => '您将对一组服务器执行重新安装。您是否要继续？',
        ],
        'power' => [
            'confirm' => '您将对 :count 台服务器执行 :action。您是否要继续？',
            'action_failed' => '在节点 ":node" 上的 ":name"（#:id）的电源操作请求失败，错误讯息为：:message',
        ],
    ],
    'environment' => [
        'mail' => [
            'ask_smtp_host' => 'SMTP 主机（例如 smtp.gmail.com）',
            'ask_smtp_port' => 'SMTP 端口',
            'ask_smtp_username' => 'SMTP 用户名',
            'ask_smtp_password' => 'SMTP 密码',
            'ask_mailgun_domain' => 'Mailgun 域',
            'ask_mailgun_endpoint' => 'Mailgun 端点',
            'ask_mailgun_secret' => 'Mailgun 密钥',
            'ask_mandrill_secret' => 'Mandrill 密钥',
            'ask_postmark_username' => 'Postmark API 密钥',
            'ask_driver' => '发送电子邮件时应使用哪个驱动程序？',
            'ask_mail_from' => '电子邮件地址的发件人',
            'ask_mail_name' => '电子邮件应该显示的名称',
            'ask_encryption' => '要使用的加密方法',
        ],
    ],
];
