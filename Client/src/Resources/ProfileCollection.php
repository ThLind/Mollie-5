<?php

	// Mollie Shopware Plugin Version: 1.3.15

namespace Mollie\Api\Resources;

class ProfileCollection extends \Mollie\Api\Resources\CursorCollection
{
    /**
     * @return string
     */
    public function getCollectionResourceName()
    {
        return "profiles";
    }
    /**
     * @return BaseResource
     */
    protected function createResourceObject()
    {
        return new \Mollie\Api\Resources\Profile($this->client);
    }
}
