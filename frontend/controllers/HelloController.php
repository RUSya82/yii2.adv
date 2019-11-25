<?php

namespace frontend\controllers;

use common\models\User;
use Yii;
use yii\web\Controller;

class HelloController extends Controller
{


    public function actionIndex()
    {
        //$dump =  Yii::$app->getSecurity()->generatePasswordHash('123');
       // $dump = password_hash('123', PASSWORD_DEFAULT, ['cost' => 13]);
        //$dump = Yii::$app->security->generatePasswordHash('123');
//        if (password_verify('123', '$2y$13$9/dyzQc6VwcXMus6yO1QtOgqWeKP6yMol1rJAG1xkEToOGSb4zzkG')) {
//            $dump = "OK";
//        } else {
//            $dump = "NO";
//        }
        //echo Yii::$app->user->validatePassword('123')
        $user = User::findOne(['id' =>1]);
        $user->setPassword('123');

        $user->save(true,['password_hash' => $user->password_hash]);

        $user2 = User::findOne(['id' =>2]);
        $user2->setPassword('111');
        $user3 = new User([
            'username' => 'Tree',
            'auth_key' => '2df84er5',
            'email' =>'slkfn@mail.ru',
            'status' => 10,

        ]);
        $user3->setPassword('55512');
        $user3->save();
       // $user2 = Yii::$app->getUser()
        return $this->render('index',['data' => $user2->username]);
    }


}