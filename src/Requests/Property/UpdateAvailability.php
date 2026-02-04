<?php

namespace PlentyOne\Api\Requests\Property;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Update an availability
 *
 * Updates an availability. The ID of the availabilty must be specified.
 */
class UpdateAvailability extends Request
{
	protected Method $method = Method::PUT;


	public function resolveEndpoint(): string
	{
		return "/rest/properties/availabilities/{$this->availabilityId}";
	}


	/**
	 * @param int $availabilityId The ID of the availability
	 */
	public function __construct(
		protected int $availabilityId,
	) {
	}
}
