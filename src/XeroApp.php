<?php

namespace PlusTimeIT\XeroLaravel;

use Calcinai\OAuth2\Client\XeroTenant;
use Exception;
use PlusTimeIT\XeroLaravel\Traits\HasXeroRelationships;
use League\OAuth2\Client\Token\AccessTokenInterface;
use XeroPHP\Application;

/**
 * Class XeroApp
 *
 * @package PlusTimeIT\XeroLaravel
 */
class XeroApp extends Application
{
    use HasXeroRelationships;

    /**
     * XeroApp constructor.
     *
     * @param AccessTokenInterface $accessToken
     * @param string $tenantId
     * @throws Exception
     */
    public function __construct(AccessTokenInterface $accessToken, string $tenantId)
    {
        parent::__construct($accessToken->getToken(), $tenantId);

        $this->populateRelationshipToModelMaps();
    }
}
