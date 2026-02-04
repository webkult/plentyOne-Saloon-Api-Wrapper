<?php

namespace PlentyOne\Api\Requests\Property;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Delete a property name
 *
 * Deletes a property name. The ID of the property name must be specified.
 */
class DeletePropertyName extends Request
{
	protected Method $method = Method::DELETE;


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
