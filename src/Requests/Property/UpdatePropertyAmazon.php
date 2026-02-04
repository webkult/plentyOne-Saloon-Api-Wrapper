<?php

namespace PlentyOne\Api\Requests\Property;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Update a property amazon
 *
 * Updates a property amazon. The ID of the property amazon must be specified.
 */
class UpdatePropertyAmazon extends Request
{
	protected Method $method = Method::PUT;


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
