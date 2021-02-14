<p align="center">
    <a href="https://github.com/yiisoft" target="_blank">
        <img src="https://avatars0.githubusercontent.com/u/993323" height="100px">
    </a>
    <h1 align="center">Yii 2 Advanced Project Template</h1>
    <br>
</p>

Yii 2 Advanced Project Template is a skeleton [Yii 2](http://www.yiiframework.com/) application best for
developing complex Web applications with multiple tiers.

The template includes three tiers: front end, back end, and console, each of which
is a separate Yii application.

The template is designed to work in a team development environment. It supports
deploying the application in different environments.

Documentation is at [docs/guide/README.md](docs/guide/README.md).

[![Latest Stable Version](https://img.shields.io/packagist/v/yiisoft/yii2-app-advanced.svg)](https://packagist.org/packages/yiisoft/yii2-app-advanced)
[![Total Downloads](https://img.shields.io/packagist/dt/yiisoft/yii2-app-advanced.svg)](https://packagist.org/packages/yiisoft/yii2-app-advanced)
[![build](https://github.com/yiisoft/yii2-app-advanced/workflows/build/badge.svg)](https://github.com/yiisoft/yii2-app-advanced/actions?query=workflow%3Abuild)

DIRECTORY STRUCTURE
-------------------

```
common
    config/              contains shared configurations
    mail/                contains view files for e-mails
    models/              contains model classes used in both backend and frontend
    tests/               contains tests for common classes    
console
    config/              contains console configurations
    controllers/         contains console controllers (commands)
    migrations/          contains database migrations
    models/              contains console-specific model classes
    runtime/             contains files generated during runtime
backend
    assets/              contains application assets such as JavaScript and CSS
    config/              contains backend configurations
    controllers/         contains Web controller classes
    models/              contains backend-specific model classes
    runtime/             contains files generated during runtime
    tests/               contains tests for backend application    
    views/               contains view files for the Web application
    web/                 contains the entry script and Web resources
frontend
    assets/              contains application assets such as JavaScript and CSS
    config/              contains frontend configurations
    controllers/         contains Web controller classes
    models/              contains frontend-specific model classes
    runtime/             contains files generated during runtime
    tests/               contains tests for frontend application
    views/               contains view files for the Web application
    web/                 contains the entry script and Web resources
    widgets/             contains frontend widgets
vendor/                  contains dependent 3rd-party packages
environments/            contains environment-based overrides
```
<p style="color: white">
yii\helpers\VarDumper
VarDumper::dump($var);
l02: 
4-07 composer require webmozart/assert
4-10 composer require la-haute-societe/yii2-save-relations-behavior
https://www.yiiframework.com/doc/guide/2.0/en/db-migrations#reverting-migrations
4-16 php yii migrate/create create_user_networks_table
     php yii migrate/history  | new  
     php yii migrate
     yii migrate/down all|N|[10]
    yii migrate/redo | fresh # redo the last applied migration
   yii migrate/mark "2015-01-01 18:54:01"             
4-24 composer require yiisoft/yii2-authclient
4-56 <div class="box">
        <!--div class="box-body"> -  белый фон от "AdminLTE"
225823 - Использование Pjax в Yii2 (краткий обзор);
https://yiiframework.ru/forum/viewforum.php?f=23
5-08 composer require kartik-v/yii2-widgets
composer require kartik-v/yii2-field-range "*"
5-29 AdminLTE ['label' => 'Users', 'icon' => 'file-code-o', 'url' => ['/user'], 'active' => Yii::$app->controller->id == 'user'],
                                                                                            $this->context
ch03:
1-20-32 для edit, а не create надо заполнить форму
    $form->setAttributes($tag->getAttributes());
create/edit объединить через
   __construct($tag=Null,..) { if ($tag) {$this->..= $tag->..}
1-21 Repository - код работы с БД
     Service ($form) - аналоги Actions в Conroller !!
                 (чтобы облегчить и переиспользовать)
1-27 inflector - string helper: slug() camel2id() ..
1-34  Brand -- afterFind()
  --$meta = Json::decode($this->getAttribute('meta_json'));
            -- beforeSave($insert)
  --$this->setAttribute('meta_json', Json::encode([

select version(); -- 10.1.37-MariaDB
https://stackoverflow.com/questions/42185598/1064-you-have-an-error-in-your-sql-syntax-check-the-manual-that-corresponds
JSON is an alias for LONGTEXT



