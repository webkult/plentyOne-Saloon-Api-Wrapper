<?php

namespace PlentyOne\Api\Requests\Property;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get a property name
 *
 * Gets a property name. The ID of the property must be specified.
 */
class GetPropertyName extends Request
{
	protected Method $method = Method::GET;


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
