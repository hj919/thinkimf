<?php

/**
 * Created by PhpStorm.
 * User: chenjianhua
 * Date: 2018/5/19
 * Time: 下午10:48
 */

namespace CloudServer\Controller;

use const JSON_UNESCAPED_UNICODE;
use function is_array;
use function is_object;
use function serialize;
use function var_dump;

Class SystemController extends BaseController
{
    public function index($data)
    {
        //var_dump($data);

        return 'job finished';
    }
}