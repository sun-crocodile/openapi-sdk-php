<?php

namespace AlibabaCloud\Aegis\V20161111;

use AlibabaCloud\Rpc;

/**
 * Api DescribeMetaData
 *
 * @method string getProjectName()
 * @method string getSourceIp()
 * @method string getLogStoreName()
 * @method string getRegionNo()
 */
class DescribeMetaData extends Rpc
{
    public $product = 'aegis';

    public $version = '2016-11-11';

    public $method = 'POST';

    public $serviceCode = 'vipaegis';

    /**
     * @param string $projectName
     *
     * @return $this
     */
    public function withProjectName($projectName)
    {
        $this->data['ProjectName'] = $projectName;
        $this->options['query']['ProjectName'] = $projectName;

        return $this;
    }

    /**
     * @param string $sourceIp
     *
     * @return $this
     */
    public function withSourceIp($sourceIp)
    {
        $this->data['SourceIp'] = $sourceIp;
        $this->options['query']['SourceIp'] = $sourceIp;

        return $this;
    }

    /**
     * @param string $logStoreName
     *
     * @return $this
     */
    public function withLogStoreName($logStoreName)
    {
        $this->data['LogStoreName'] = $logStoreName;
        $this->options['query']['LogStoreName'] = $logStoreName;

        return $this;
    }

    /**
     * @param string $regionNo
     *
     * @return $this
     */
    public function withRegionNo($regionNo)
    {
        $this->data['RegionNo'] = $regionNo;
        $this->options['query']['RegionNo'] = $regionNo;

        return $this;
    }
}