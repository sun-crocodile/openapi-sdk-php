<?php

namespace AlibabaCloud\Baas\V20180731;

use AlibabaCloud\Rpc;

/**
 * Api CreateEthereumInvitation
 *
 * @method string getEthereumId()
 */
class CreateEthereumInvitation extends Rpc
{
    public $product = 'Baas';

    public $version = '2018-07-31';

    public $method = 'POST';

    /**
     * @param string $ethereumId
     *
     * @return $this
     */
    public function withEthereumId($ethereumId)
    {
        $this->data['EthereumId'] = $ethereumId;
        $this->options['query']['EthereumId'] = $ethereumId;

        return $this;
    }
}