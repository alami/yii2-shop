<?php
return [
    'adminEmail' => 'admin@example.com',
    'supportEmail' => 'support@example.com',
    'senderEmail' => 'noreply@example.com',
    'senderName' => 'Example.com mailer',
    'user.passwordResetTokenExpire' => 3600,
    'user.rememberMeDuration' => 3600 * 24 * 30,
//    'cookieDomain' => '.example.com',
    'user.passwordMinLength' => 6,
    'frontendHostInfo' => 'http://yii2-shop',
    'backendHostInfo' => 'http://yii2-admin',
    'staticHostInfo' => 'http://yii2-static',
    'staticPath' => dirname(__DIR__, 2) . '/static',
];
