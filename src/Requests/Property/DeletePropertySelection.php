<?php

namespace PlentyOne\Api\Requests\Property;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Delete a property selection
 *
 * Deletes a property selection. The ID of the selection must be specified.
 */
class DeletePropertySelection extends Request
{
	protected Method $method = Method::DELETE;


	public function resolveEndpoint(): string
	{
		return "/rest/v2/properties/selections/{$this->selectionId}";
	}


	/**
	 * @param int $selectionId The ID of the selection
	 */
	public function __construct(
		protected int $selectionId,
	) {
	}
}
