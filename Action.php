<?php ! defined('__TYPECHO_ROOT_DIR__') and exit();

class B3logForHacPai_Action extends Typecho_Widget
{

    /**
     * 构造函数
     *
     * @param mixed $request
     * @param mixed $response
     * @param null $params
     */
    public function __construct($request, $response, $params = NULL)
    {
        parent::__construct($request, $response, $params);


    }

    /**
     * Article receiver (from B3log Symphony).
     *
     */
    public function articleReceiver(){

        print_r($_POST);
    }

    /**
     * Comment receiver (from B3log Symphony).
     *
     */
    public function commentReceiver(){
        echo 'comment';
    }



}
