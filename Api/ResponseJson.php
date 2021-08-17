<?php
trait ResponseJson
{
    // 返回JSON的基本方法
    private function jsonResponse($code, $msg, $data)
    {
        $content = [
            "data" => $data,
            "msg" => $msg,
            "code" => $code,
        ];
        return json_encode($content);
    }

    // App接口请求成功时的返回
    public function jsonSuccessData($data = [])
    {
        return $this->jsonResponse($data, "成功", 0);
    }

    // 一般的返回
    public function jsonData($data = [], $msg, $code)
    {
        return $this->jsonResponse($code, $msg, $data);
    }
}
