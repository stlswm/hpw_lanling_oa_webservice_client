<?php

namespace stlswm\HpwLanlingOaWebServiceClient;

class WebServiceConfig
{
    public string $address;// Web服务的URL
    public string $serviceBean;// Web服务标识
    public        $serviceClass;// Web服务接口
    public string $user;// 用户
    public string $password;// 密码

    /**
     * WebServiceConfig constructor.
     * @param  string  $address
     * @param  string  $serviceBean
     * @param          $serviceClass
     * @param  string  $user
     * @param  string  $password
     */
    public function __construct(string $address, string $serviceBean, $serviceClass, string $user, string $password)
    {
        $this->address = $address;
        $this->serviceBean = $serviceBean;
        $this->serviceClass = $serviceClass;
        $this->user = $user;
        $this->password = $password;
    }
}
