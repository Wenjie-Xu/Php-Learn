<?php

use Lcobucci\JWT\Builder;
use Lcobucci\JWT\Signer\Ecdsa\Sha256;

/** 
 * 单例，一次请求中所有初心啊使用jwt的地方都是一个用户
 */
class JwtAuth 
{
    private const ISS = 'api.test.com'; //签发者
    private const AUD = 'imooc_server_app';//接收方
    private $uid;
    private $secrect = 'asin2*&asbiniasd';// 密钥

    // jwt-token
    private $token;
    private static $instance;

    private function __construct(){}
    private function __clone(){}

    public static function getInstance(){
        if (is_null(self::$instance)){
            self::$instance = new self();
        }

        return self::$instance;
    }

    public function encode(){
        $time = time();
        $this->token = (new Builder())
            ->setHeader('alg','HS256')
            ->setIssue("localhost:8080")
            ->setAudience(self::AUD)
            ->setIssuedAt($time)
            ->setExpiration($time+3600)
            ->set('uid', $this->uid)
            ->sign(new Sha256(),$this->secrect)
            ->getToken();
    }
}