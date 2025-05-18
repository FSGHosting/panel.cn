<?php

return [
    'sign_in' => '登入',
    'go_to_login' => '前往登入',
    'failed' => '找不到符合这些资讯的帐户。',

    'forgot_password' => [
        'label' => '忘记密码？',
        'label_help' => '输入您的帐户电子邮件地址以接收重设密码的指示。',
        'button' => '恢复帐户',
    ],

    'reset_password' => [
        'button' => '重设并登入',
    ],

    'two_factor' => [
        'label' => '双因素验证码',
        'label_help' => '为了继续，此帐户需要第二层身份验证(2FA)。请输入您的设备生成的代码以完成登入。',
        'checkpoint_failed' => '双因素身份验证令牌无效。',
    ],

    'throttle' => '尝试登入次数过多。请在 :seconds 秒後再试一次。',
    'password_requirements' => '密码必须至少包含 8 个字符，并应该是此站点独有的。',
    '2fa_must_be_enabled' => '管理员要求启用您帐户的双因素身份验证(2FA)，以使用控制面板。',
];
