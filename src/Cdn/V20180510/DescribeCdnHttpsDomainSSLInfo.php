<?php

namespace AlibabaCloud\Cdn\V20180510;

use AlibabaCloud\Rpc;

/**
 * Api DescribeCdnHttpsDomainSSLInfo
 *
 * @method string getDomainName()
 * @method string getOwnerId()
 */
class DescribeCdnHttpsDomainSSLInfo extends Rpc
{
    public $product = 'Cdn';

    public $version = '2018-05-10';

    public $method = 'POST';

    /**
     * @param string $domainName
     *
     * @return $this
     */
    public function withDomainName($domainName)
    {
        $this->data['DomainName'] = $domainName;
        $this->options['query']['DomainName'] = $domainName;

        return $this;
    }

    /**
     * @param string $ownerId
     *
     * @return $this
     */
    public function withOwnerId($ownerId)
    {
        $this->data['OwnerId'] = $ownerId;
        $this->options['query']['OwnerId'] = $ownerId;

        return $this;
    }
}