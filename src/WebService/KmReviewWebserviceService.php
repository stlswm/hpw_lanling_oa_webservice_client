<?php

namespace stlswm\HpwLanlingOaWebServiceClient\WebService;

use SoapClient;
use SoapFault;
use SoapHeader;
use stlswm\HpwLanlingOaWebServiceClient\WebServiceConfig;

/**
 * Class KmReviewWebserviceService
 * @package stlswm\HpwLanlingOaWebServiceClient\WebService
 */
class KmReviewWebserviceService implements WebServiceClient
{
    protected static                  $client = null;
    protected static WebServiceConfig $config;

    /**
     * KmReviewWebserviceService constructor.
     * @param  WebServiceConfig  $config
     * @throws SoapFault
     */
    public function __construct(WebServiceConfig $config)
    {
        self::$config = $config;
        if (empty(self::$client)) {
            self::init();
        }
        return self::$client;
    }

    /**
     * @throws SoapFault
     */
    private static function init()
    {
        $client = new SoapClient(null, ['uri' => self::$config->address, 'location' => self::$config->serviceClass]);
        $userVar = [
            'tns:user'     => self::$config->user,
            'tns:password' => self::$config->password,
        ];
        $header = new SoapHeader("http://sys.webservice.client", 'tns:RequestSOAPHeader', $userVar);
        self::$client = $client->__setSoapHeaders([$header]);
    }
}