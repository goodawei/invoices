<?php

namespace Nucarf\Invoice\Sales\Model;

use think\Config;

class BaseModel extends \app\fun_common\model\BaseModel
{
    protected $config = [];

    public function __construct()
    {
        $this->config = Config::get('yidian_db');
        $this->category = Config::get('default_category');
    }

    /**
     * 开启事务
     */
    public function startTrans()
    {
        $this->db->startTrans();
    }

    /**
     * 事务回滚
     */
    public function rollback()
    {
        $this->db->rollback();
    }

    /**
     * 事务提交
     */
    public function commit()
    {
        $this->db->commit();
    }

    public function opensslAesEncode($data, $pwk_key = 'GGN1n3TZt5Ul')
    {
        return openssl_encrypt($data, 'AES-128-CBC', $pwk_key, false, '1234567812345678');
    }

    public function opensslAesDecode($data, $pwk_key = 'GGN1n3TZt5Ul')
    {
        return openssl_decrypt($data, 'AES-128-CBC', $pwk_key, false, '1234567812345678');
    }
}
