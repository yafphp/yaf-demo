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

}