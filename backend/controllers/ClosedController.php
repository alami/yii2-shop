<?php
namespace backend\controllers;

use Yii;
use yii\web\Controller;

/**
 * Site controller
 */
class ClosedController extends Controller
{
    public function actionIndex()
    {
        return '<htm><body><h1><center>Index accessible !</body>';
    }
}
