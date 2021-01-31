demo
----------
    以下是是一个简单demo

公共参数
----------
    调用所有接口调用时都需要传递公共参数并计算签名，部分接口还需要传递token参数（详见具体接口）。
    公共参数需要以自定义header方式提供，所有接口的业务参数通过post方式传递（详见具体接口）。
        自定义headers: 
            x-nucarf-token: 接口回话标识，用户登陆成功后返回，以后每次调用都需要传递（部分接口需要）
            x-nucarf-channel：调用渠道号，服务端提供
            x-nucarf-nonce：随机字符串（长度不少于16位）
            x-nucarf-sign：签名（见签名规则）
签名规则
----------
    1、将接口公共参数按照参数名首字母排序后连接成字符串，要拼接的参数除了包含公共参数外，还包含data和access_key（服务端提供）。
    2、data为接口传递的实际业务参数，类型为json格式的字符串经过AES加密后的字符。
    3、access_key为服务端与调用方约定好的固定字符。
    4、将上述参数拼接结果做md5运算得到最终的sign值。
    例如：
        x-nucarf-channel：8e0d78761
        x-nucarf-nonce：ddf48f43c48588er
        access_key：8bddf48f4
        data：dfgsertwertw==
        拼接顺序为：(access_key + data + x-nucarf-channel + x-nucarf-nonce)
        拼接后字符：8bddf48f4dfgsertwertw==8e0d78761ddf48f43c48588er
        针对拼接后的字符计算md5值得到x-nucarf-sign值。

加密算法
----------
    参数使用AES加密，密钥长度128位，算法模式CBC模式，无填充，key和iv值由服务端提供。

x-nucarf-token获取
----------
    调用登录接口时会返回x-nucarf-token，调用方需要缓存token信息，并在相关接口调用时提供token值做校验。
    token过期或失效后需要用户重新登录重新获取token值。
    token过期策略为滑动过期，有效期内多次调用则过期时间往后延续一个周期。



