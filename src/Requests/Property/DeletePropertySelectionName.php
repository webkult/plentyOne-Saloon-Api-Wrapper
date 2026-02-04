<?php

namespace PlentyOne\Api\Requests\Property;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Delete a property selection name
 *
 * Deletes a property selection name. The ID of the selection name must be specified.
 */
class DeletePropertySelectionName extends Request
{
	protected Method $method = Method::DELETE;


	public function resolveEndpoint(): string
	{
		return "/rest/v2/properties/selections/names/{$this->nameId}";
	}


	/**
	 * @param int $nameId The ID of the selection name
	 */
	public function __construct(
		protected int $nameId,
	) {
	}
}
