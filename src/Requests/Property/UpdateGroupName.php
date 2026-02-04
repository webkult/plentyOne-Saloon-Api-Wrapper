<?php

namespace PlentyOne\Api\Requests\Property;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Update a group name
 *
 * Updates a group name. The ID of the group name must be specified.
 */
class UpdateGroupName extends Request
{
	protected Method $method = Method::PUT;


	public function resolveEndpoint(): string
	{
		return "/rest/v2/properties/groups/names/{$this->nameId}";
	}


	/**
	 * @param int $nameId The ID of the group name
	 */
	public function __construct(
		protected int $nameId,
	) {
	}
}
