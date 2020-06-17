<?php
/**
 * /app/Controller/HelloController.php
 */
class HelloController extends AppController
{

    /**自動レンダリング無効　*/
    public $autoLayout = false;

    // 利用するモデルを指定する
    public $uses = array('Inputform');
    /**
     * indexアクション
     */
    public function index() {}

    /**
     * otherアクション
     */
    public function other() {

        //リクエストがPOSTメソッドで送られてきた場合
        if($this->request->is('post')) {

            //formパラメーターの取得
            $post = $this->request->data;

            //viewへ値のセット
            $this->set('post', $post);
        }
    }

    public function save() {
        
    }
}