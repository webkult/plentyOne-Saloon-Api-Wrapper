<?php

namespace PlentyOne\Api\Requests\Property;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get a group name
 *
 * Gets a group name. The ID of the group must be specified.
 */
class GetGroupName extends Request
{
	protected Method $method = Method::GET;


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
