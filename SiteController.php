<?php

class SiteController extends Controller {

    public function actionIndex() {

        $this->render('page0');
    }

    public function actionPage1() {
        $this->render('page1');
    }

    public function actionPage2() {
        $this->render('page2');
    }

    public function actionPage3() {
        $this->render('page3');
    }

    public function actionPage4() {
        $this->render('page4');
    }

    public function actionPage5() {
        $this->render('page5');
    }

    public function actionPage6() {
        $this->render('page6');
    }

    public function actionPage7() {
        $this->render('page7');
    }

    public function actionError() {
        if ($error = Yii::app()->errorHandler->error) {
            if (Yii::app()->request->isAjaxRequest)
                echo $error['message'];
            else
                $this->render('error', $error);
        }
    }

}