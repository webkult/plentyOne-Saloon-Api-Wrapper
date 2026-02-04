<?php

namespace PlentyOne\Api\Requests\Property;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get an availability
 *
 * Gets an availability. The ID of the availability must be specified.
 */
class GetAvailability extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/properties/availabilities/{$this->availabilityId}";
	}


	/**
	 * @param int $availabilityId The ID of the property availability
	 */
	public function __construct(
		protected int $availabilityId,
	) {
	}
}
