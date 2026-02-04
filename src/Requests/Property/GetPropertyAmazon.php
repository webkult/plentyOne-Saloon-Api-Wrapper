<?php

namespace PlentyOne\Api\Requests\Property;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get a property amazon
 *
 * Gets a property amazon. The ID of the property amazon must be specified.
 */
class GetPropertyAmazon extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/v2/properties/amazon/{$this->amazonId}";
	}


	/**
	 * @param int $amazonId The ID of the property amazon
	 */
	public function __construct(
		protected int $amazonId,
	) {
	}
}
