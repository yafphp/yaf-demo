<?php
/**
 * User: aierui
 * Email: aieruishi@gmail.com
 * Date: 2018/2/5
 * Time: 下午6:17
 */

class TestController extends Yaf_Controller_Abstract
{
    // default action name
    public function indexAction($a = 0)
    {
        var_dump($a);

        var_dump($this->getRequest());
        var_dump($this->getModuleName());
        var_dump(__CLASS__ . '/' . __FUNCTION__);
        die;
        $this->getView()->content = "Hello World";
    }

    public function testAction($a = 0)
    {
        var_dump($a);
        var_dump($this->getRequest());


        var_dump($this->getModuleName());
        var_dump(__CLASS__ . '/' . __FUNCTION__);
        die;
    }
}

?>
