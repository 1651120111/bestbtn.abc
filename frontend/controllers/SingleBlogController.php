<?php


namespace frontend\controllers;


use yii\web\Controller;

class SingleBlogController extends Controller
{
    public function actionIndex()
{
    return $this->render('index',[]);
}
}