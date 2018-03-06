<?php
/**
 * User: aierui
 * Email: aieruishi@gmail.com
 * Date: 2018/2/5
 * Time: 上午12:34
 */

class ErrorController extends Yaf_Controller_Abstract
{
    public function errorAction($exception)
    {
        throw $exception;
    }

    public function testAction()
    {
        var_dump(__CLASS__ .'/'. __FUNCTION__);die;
    }

    public function failAction()
    {
        $this->failure('string');
        die;
    }

    public function failure($sMsg, $iRet = 1, $data = [])
    {
        $jsonData = [
            'msg' => $sMsg,
            'data' => $data,
        ];
        $jsonData = json_encode($jsonData);
        throw new Yaf_Exception($jsonData, $iRet);
    }
}