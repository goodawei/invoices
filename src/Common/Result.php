<?php
/**
 * Created by PhpStorm.
 * User: lihongwei
 * Date: 2021/02/02
 * Time: 下午2:53
 */
namespace Nucarf\Invoice\Common;

class Result implements \JsonSerializable{

    private $_raw = array(
        'errno' => 0,
        'error' => null,
        'data'  => null
    );

    /**
     * @param string $error
     * @param int    $errno
     * @return Result
     */
    public static function error($error, $errno = -1)
    {
        return new self($errno, $error);
    }

    /**
     * @param $data
     * @return Result
     */
    public static function success($data=null)
    {
        return new self(0, null, $data);
    }


    /**
     * 构造函数
     * @param int    $errno 错误编码
     * @param string $error 错误信息
     * @param mixed  $data 附加数据
     */
    public function __construct($errno=0, $error=null, $data=null)
    {
        $this->_raw['errno'] = $errno;
        $this->_raw['error'] = $error;
        $this->_raw['data'] = $data;

    }

    /**
     * 获取错误编码
     * @return int
     */
    public function getErrno()
    {
        return $this->_raw['errno'];
    }

    /**
     * 设置错误编码
     * @param int $errno 错误编码
     */
    public function setErrno($errno)
    {
        $this->_raw['errno'] = $errno;
    }

    /**
     * 获取错误信息
     * @return string
     */
    public function getError()
    {
        return $this->_raw['error'];
    }

    /**
     * 设置错误信息
     * @param string $error 错误信息
     */
    public function setError($error)
    {
        $this->_raw['error'] = $error;
    }

    /**
     * 获取附加数据
     * @return mixed|null
     */
    public function getData()
    {
        return $this->_raw['data'];
    }

    /**
     * 设置附加数据
     * @param mixed $data 附加数据
     */
    public function setData($data)
    {
        $this->_raw['data'] = $data;
    }

    /**
     * Specify data which should be serialized to JSON
     * @link http://php.net/manual/en/jsonserializable.jsonserialize.php
     * @return mixed data which can be serialized by <b>json_encode</b>,
     * which is a value of any type other than a resource.
     * @since 5.4.0
     */
    public function jsonSerialize()
    {
        return $this->_raw;
    }


    /**
     * 直接输出
     */
    public function send(){
        echo json_encode($this->_raw);
        exit;
    }
}