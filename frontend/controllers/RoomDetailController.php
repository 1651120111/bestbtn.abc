<?php


namespace frontend\controllers;


use yii\web\Controller;

class RoomDetailController extends Controller
{
    public function actionIndex(){
        return $this->render('index',[]);
    }
}