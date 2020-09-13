<?php

namespace One\Vmtemplate\Vmtemplate;

/**
 * Class representing Template
 */
class Template
{

    /**
     * @var string $vcenterCcrRef
     */
    private $vcenterCcrRef = null;

    /**
     * @var string $vcenterInstanceId
     */
    private $vcenterInstanceId = null;

    /**
     * @var string $vcenterTemplateRef
     */
    private $vcenterTemplateRef = null;

    /**
     * Gets as vcenterCcrRef
     *
     * @return string
     */
    public function getVcenterCcrRef()
    {
        return $this->vcenterCcrRef;
    }

    /**
     * Sets a new vcenterCcrRef
     *
     * @param string $vcenterCcrRef
     * @return self
     */
    public function setVcenterCcrRef($vcenterCcrRef)
    {
        $this->vcenterCcrRef = $vcenterCcrRef;
        return $this;
    }

    /**
     * Gets as vcenterInstanceId
     *
     * @return string
     */
    public function getVcenterInstanceId()
    {
        return $this->vcenterInstanceId;
    }

    /**
     * Sets a new vcenterInstanceId
     *
     * @param string $vcenterInstanceId
     * @return self
     */
    public function setVcenterInstanceId($vcenterInstanceId)
    {
        $this->vcenterInstanceId = $vcenterInstanceId;
        return $this;
    }

    /**
     * Gets as vcenterTemplateRef
     *
     * @return string
     */
    public function getVcenterTemplateRef()
    {
        return $this->vcenterTemplateRef;
    }

    /**
     * Sets a new vcenterTemplateRef
     *
     * @param string $vcenterTemplateRef
     * @return self
     */
    public function setVcenterTemplateRef($vcenterTemplateRef)
    {
        $this->vcenterTemplateRef = $vcenterTemplateRef;
        return $this;
    }


}

