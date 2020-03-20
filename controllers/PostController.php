<?php

namespace app\controllers;

use app\models\Posts;
use Yii;
use yii\data\ActiveDataProvider;
use yii\data\Pagination;
use yii\debug\models\timeline\DataProvider;
use yii\web\Controller;

class PostController extends Controller
{
    public function actionIndex()
    {

        $provider = new ActiveDataProvider([
            'query' => Posts::find(),
            'pagination' => [
                'pageSize' => 10,
            ],
            'sort' => [
                'defaultOrder' => [
                    'id' => 'SORT_DESC'
                ]
            ]
        ]);

        return $this->render('index', [
            'provider' => $provider,
        ]);
    }

    public function actionView($id)
    {
        $post = Posts::findOne($id);

        return $this->render('view', [
            'post' => $post,
        ]);
    }

    public function actionCreate() {

        if (Yii::$app->user->isGuest) {
            return $this->redirect(['/site/login']);
        }
        else {
            $posts = new Posts();

            if ($posts->load(Yii::$app->request->post()) && $posts->validate() && $posts->save()) {

                return $this->redirect(['index']);
            }

            return $this->render('create', [
                'posts' => $posts,
            ]);
        }
    }

}
