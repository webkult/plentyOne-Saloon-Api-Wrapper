<?php

namespace PlentyOne\Api\Requests\Pim;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get item amazon product types
 *
 * Gets a list of all amazon product types.
 */
class GetItemAmazonProductTypes extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/pim/amazon-product-types";
	}


	public function __construct()
	{
	}
}
