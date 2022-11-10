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
    public SoapClient          $client;
    protected WebServiceConfig $config;

    /**
     * KmReviewWebserviceService constructor.
     * @param  WebServiceConfig  $config
     * @throws SoapFault
     */
    public function __construct(WebServiceConfig $config)
    {
        $this->config = $config;
        $this->init();
    }

    /**
     * @throws SoapFault
     */
    public function init()
    {
        $this->client = new SoapClient($this->config->address);
        $auth = [
            'user'     => $this->config->user,
            'password' => $this->config->password,
        ];
        $header = new SoapHeader("http://sys.webservice.client", 'RequestSOAPHeader', $auth);
        $this->client->__setSoapHeaders([$header]);
    }
}