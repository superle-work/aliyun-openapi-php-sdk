<?php

namespace Vpc\Request\V20160428;

/**
 * Request of ModifyIPv6TranslatorAclAttribute
 *
 * @method string getAclId()
 * @method string getResourceOwnerId()
 * @method string getAclName()
 * @method string getResourceOwnerAccount()
 * @method string getClientToken()
 * @method string getOwnerAccount()
 * @method string getOwnerId()
 */
class ModifyIPv6TranslatorAclAttributeRequest extends \RpcAcsRequest
{

    /**
     * @var string
     */
    protected $method = 'POST';

    /**
     * Class constructor.
     */
    public function __construct()
    {
        parent::__construct(
            'Vpc',
            '2016-04-28',
            'ModifyIPv6TranslatorAclAttribute',
            'vpc'
        );
    }

    /**
     * @param string $aclId
     *
     * @return $this
     */
    public function setAclId($aclId)
    {
        $this->requestParameters['AclId'] = $aclId;
        $this->queryParameters['AclId'] = $aclId;

        return $this;
    }

    /**
     * @param string $resourceOwnerId
     *
     * @return $this
     */
    public function setResourceOwnerId($resourceOwnerId)
    {
        $this->requestParameters['ResourceOwnerId'] = $resourceOwnerId;
        $this->queryParameters['ResourceOwnerId'] = $resourceOwnerId;

        return $this;
    }

    /**
     * @param string $aclName
     *
     * @return $this
     */
    public function setAclName($aclName)
    {
        $this->requestParameters['AclName'] = $aclName;
        $this->queryParameters['AclName'] = $aclName;

        return $this;
    }

    /**
     * @param string $resourceOwnerAccount
     *
     * @return $this
     */
    public function setResourceOwnerAccount($resourceOwnerAccount)
    {
        $this->requestParameters['ResourceOwnerAccount'] = $resourceOwnerAccount;
        $this->queryParameters['ResourceOwnerAccount'] = $resourceOwnerAccount;

        return $this;
    }

    /**
     * @param string $clientToken
     *
     * @return $this
     */
    public function setClientToken($clientToken)
    {
        $this->requestParameters['ClientToken'] = $clientToken;
        $this->queryParameters['ClientToken'] = $clientToken;

        return $this;
    }

    /**
     * @param string $ownerAccount
     *
     * @return $this
     */
    public function setOwnerAccount($ownerAccount)
    {
        $this->requestParameters['OwnerAccount'] = $ownerAccount;
        $this->queryParameters['OwnerAccount'] = $ownerAccount;

        return $this;
    }

    /**
     * @param string $ownerId
     *
     * @return $this
     */
    public function setOwnerId($ownerId)
    {
        $this->requestParameters['OwnerId'] = $ownerId;
        $this->queryParameters['OwnerId'] = $ownerId;

        return $this;
    }
}
