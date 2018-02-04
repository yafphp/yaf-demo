<?php

class IndexController extends Yaf_Controller_Abstract
{
    // default action name
    public function indexAction()
    {
        $this->getView()->content = "Hello World";
    }

    public function testAction()
    {
        var_dump(12345);die;
    }
}

?>
