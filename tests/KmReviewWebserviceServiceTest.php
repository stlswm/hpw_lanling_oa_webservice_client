<?php

require_once dirname(__FILE__) .'/config.php';

use PHPUnit\Framework\TestCase;
use stlswm\HpwLanlingOaWebServiceClient\WebService\KmReviewWebserviceService;
use stlswm\HpwLanlingOaWebServiceClient\WebServiceConfig;

class KmReviewWebserviceServiceTest extends TestCase
{
    public function testReq()
    {
        $config = new WebServiceConfig(Address, ServiceBean, User, Password, ServiceClass);
        $action = ServiceBean;
        $client = new KmReviewWebserviceService($config);
        $a = $client->$action();
        var_dump($a);
        die;
    }
}