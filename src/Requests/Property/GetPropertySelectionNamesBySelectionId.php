<?php

namespace PlentyOne\Api\Requests\Property;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get property selection names by selection ID
 *
 * Gets property selection names for the specified selection ID.
 */
class GetPropertySelectionNamesBySelectionId extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/v2/properties/selections/{$this->selectionId}/names";
	}


	/**
	 * @param int $selectionId
	 */
	public function __construct(
		protected int $selectionId,
	) {
	}
}
