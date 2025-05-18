<?php

/**
 * Contains all of the translation strings for different activity log
 * events. These should be keyed by the value in front of the colon (:)
 * in the event name. If there is no colon present, they should live at
 * the top level.
 */
return [
    'auth' => [
        'fail' => '登入失败',
        'success' => '已登入',
        'password-reset' => '重设密码',
        'reset-password' => '请求重设密码',
        'checkpoint' => '要求双因素验证',
        'recovery-token' => '使用双因素恢复Token',
        'token' => '解决双因素挑战',
        'ip-blocked' => '封锁了来自未列入名单的 IP 地址的请求，标识：:identifier',
        'sftp' => [
            'fail' => 'SFTP 登入失败',
        ],
    ],
    'user' => [
        'account' => [
            'email-changed' => '将电子邮件从 :old 变更为 :new',
            'password-changed' => '变更密码',
        ],
        'api-key' => [
            'create' => '创建新的 API 金钥 :identifier',
            'delete' => '删除 API 金钥 :identifier',
        ],
        'ssh-key' => [
            'create' => '将 SSH 金钥 :fingerprint 新增到帐户',
            'delete' => '从帐户中删除 SSH 金钥 :fingerprint',
        ],
        'two-factor' => [
            'create' => '启用双因素身份验证',
            'delete' => '停用双因素身份验证',
        ],
    ],
    'server' => [
        'reinstall' => '重新安装伺服器',
        'console' => [
            'command' => '在伺服器上执行 ":command"',
        ],
        'power' => [
            'start' => '启动伺服器',
            'stop' => '停止伺服器',
            'restart' => '重新启动伺服器',
            'kill' => '终止伺服器进程',
        ],
        'backup' => [
            'download' => '下载 :name 备份',
            'delete' => '删除 :name 备份',
            'restore' => '还原 :name 备份（删除的档案：:truncate）',
            'restore-complete' => '完成还原 :name 备份',
            'restore-failed' => '无法完成还原 :name 备份',
            'start' => '开始新的备份 :name',
            'complete' => '标记 :name 备份为完成',
            'fail' => '标记 :name 备份为失败',
            'lock' => '锁定 :name 备份',
            'unlock' => '解锁 :name 备份',
        ],
        'database' => [
            'create' => '创建新资料库 :name',
            'rotate-password' => '为资料库 :name 轮转密码',
            'delete' => '删除资料库 :name',
        ],
        'file' => [
            'compress_one' => '压缩 :directory:file',
            'compress_other' => '在 :directory 中压缩 :count 个档案',
            'read' => '检视 :file 内容',
            'copy' => '创建 :file 的副本',
            'create-directory' => '创建目录 :directory:name',
            'decompress' => '在 :directory 中解压缩 :files',
            'delete_one' => '删除 :directory:files.0',
            'delete_other' => '在 :directory 中删除 :count 个档案',
            'download' => '下载 :file',
            'pull' => '从 :url 下载远端档案到 :directory',
            'rename_one' => '将 :directory:files.0.from 重命名为 :directory:files.0.to',
            'rename_other' => '在 :directory 中重命名或移动 :count 个档案',
            'write' => '将新内容写入 :file',
            'upload' => '开始上传档案',
            'uploaded' => '上传 :directory:file',
        ],
        'sftp' => [
            'denied' => '由於权限问题，阻止了 SFTP 存取',
            'create_one' => '创建 :files.0',
            'create_other' => '创建 :count 个新档案',
            'write_one' => '修改 :files.0 内容',
            'write_other' => '修改 :count 个档案的内容',
            'delete_one' => '删除 :files.0',
            'delete_other' => '删除 :count 个档案',
            'create-directory_one' => '创建 :files.0 目录',
            'create-directory_other' => '创建 :count 个目录',
            'rename_one' => '将 :files.0.from 重命名为 :files.0.to',
            'rename_other' => '重命名或移动 :count 个档案',
        ],
        'allocation' => [
            'create' => '将 :allocation 新增至伺服器',
            'notes' => '将 :allocation 的注释从 ":old" 更新为 ":new"',
            'primary' => '将 :allocation 设为主要伺服器分配',
            'delete' => '删除 :allocation 分配',
        ],
        'schedule' => [
            'create' => '创建 :name 排程',
            'update' => '更新 :name 排程',
            'execute' => '手动执行 :name 排程',
            'delete' => '删除 :name 排程',
        ],
        'task' => [
            'create' => '为 :name 排程创建新的 ":action" 任务',
            'update' => '为 :name 排程更新 ":action" 任务',
            'delete' => '删除 :name 排程的任务',
        ],
        'settings' => [
            'rename' => '将伺服器从 :old 重命名为 :new',
            'description' => '将伺服器描述从 :old 变更为 :new',
        ],
        'startup' => [
            'edit' => '将 :variable 变数从 ":old" 变更为 ":new"',
            'image' => '将伺服器的 Docker 映像从 :old 更新为 :new',
        ],
        'subuser' => [
            'create' => '将 :email 新增为子使用者',
            'update' => '更新 :email 的子使用者权限',
            'delete' => '将 :email 从子使用者中移除',
        ],
    ],
];
