<?php

namespace PlentyOne\Api\Requests\Property;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Update a property name
 *
 * Updates a property name. The ID of the property name must be specified.
 */
class UpdatePropertyName extends Request
{
	protected Method $method = Method::PUT;


	public function resolveEndpoint(): string
	{
		return "/rest/v2/properties/names/{$this->nameId}";
	}


	/**
	 * @param int $nameId The ID of the property name
	 */
	public function __construct(
		protected int $nameId,
	) {
	}
}
