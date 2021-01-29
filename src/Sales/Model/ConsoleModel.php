<?php

namespace Nucarf\Invoice\Sales\Model;

use app\order\model\BaseModel;
use think\Db;

class ConsoleModel extends BaseModel
{
    private static $_instance;
    protected      $tableName = 'tb_cart';
    public         $db        = null;

    public static function getInstance()
    {
        if (!(self::$_instance instanceof self)) {
            self::$_instance = new self();
        }
        return self::$_instance;
    }

    public function __construct()
    {
        parent::__construct();
        $this->db = Db::connect($this->config)->name($this->tableName);
    }

    public  function getCartById($cart_id)
    {
        return $this->db->field("cart_id,cart_no,parent_id,main_consume,si_id")->find();
    }
}