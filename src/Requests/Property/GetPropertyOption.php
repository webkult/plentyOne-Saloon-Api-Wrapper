<?php

namespace PlentyOne\Api\Requests\Property;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get a property option
 *
 * Gets a property option. The ID of the property option must be specified.
 */
class GetPropertyOption extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/v2/properties/options/{$this->optionId}";
	}


	/**
	 * @param int $optionId The ID of the property option
	 */
	public function __construct(
		protected int $optionId,
	) {
	}
}
