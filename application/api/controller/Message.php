<?php
/**
 * Created by PhpStorm.
 * User: chenjianhua
 * Date: 2018/4/26
 * Time: 上午2:30
 */

namespace app\api\controller;

use app\api\model\Messages;
use app\api\model\Device;
use function var_dump;

class Message extends AuthBase
{

    /*
     * 推送给某一个设备消息
     */
    public function pushTo()
    {

    }

    /*
     * 推送给某全部设备消息
     */
    public function pushAll()
    {

    }

    /*
     * 发布一条消息
     */
    public function send()
    {

    }

    public function messageList()
    {
        $condition['uuid'] = $this->request->get('user_id', session('userid'));
        $device_id = $this->request->get('device_id', false);
        $page = $this->request->get('page', 1);
        $limit = $this->request->get('limit', 10);
        if ($device_id) {
            $condition['device_id'] = $device_id;
        }
        $result = [
            'code' => 0,
            'msg' => '',
            'count' => '',
            'data' => []
        ];
        $offset = ($page-1) *$limit;
        $messageModel = new Messages();
        $messageCount = $messageModel->where($condition)
            ->count();
        $messages = Messages::Where($condition)
            ->limit($offset,$limit)
            ->select()->toArray();
        $result['count'] = $messageCount;
        $result['data'] = $messages;
        return $this->json($result);
    }


}