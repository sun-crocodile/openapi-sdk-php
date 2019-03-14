<?php

namespace AlibabaCloud\Vod\V20170321;

use AlibabaCloud\Rpc;

/**
 * Api GetURLUploadInfos
 *
 * @method string getResourceOwnerId()
 * @method string getResourceOwnerAccount()
 * @method string getJobIds()
 * @method string getUploadURLs()
 * @method string getOwnerId()
 */
class GetURLUploadInfos extends Rpc
{
    public $product = 'vod';

    public $version = '2017-03-21';

    public $method = 'POST';

    public $serviceCode = 'vod';

    /**
     * @param string $resourceOwnerId
     *
     * @return $this
     */
    public function withResourceOwnerId($resourceOwnerId)
    {
        $this->data['ResourceOwnerId'] = $resourceOwnerId;
        $this->options['query']['ResourceOwnerId'] = $resourceOwnerId;

        return $this;
    }

    /**
     * @param string $resourceOwnerAccount
     *
     * @return $this
     */
    public function withResourceOwnerAccount($resourceOwnerAccount)
    {
        $this->data['ResourceOwnerAccount'] = $resourceOwnerAccount;
        $this->options['query']['ResourceOwnerAccount'] = $resourceOwnerAccount;

        return $this;
    }

    /**
     * @param string $jobIds
     *
     * @return $this
     */
    public function withJobIds($jobIds)
    {
        $this->data['JobIds'] = $jobIds;
        $this->options['query']['JobIds'] = $jobIds;

        return $this;
    }

    /**
     * @param string $uploadURLs
     *
     * @return $this
     */
    public function withUploadURLs($uploadURLs)
    {
        $this->data['UploadURLs'] = $uploadURLs;
        $this->options['query']['UploadURLs'] = $uploadURLs;

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