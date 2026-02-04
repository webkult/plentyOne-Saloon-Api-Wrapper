<?php

namespace PlentyOne\Api\Requests\Property;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * List property groups
 *
 * Lists property groups.
 */
class ListPropertyGroups extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/properties/groups";
	}


	/**
	 * @param int $groupId The ID of the group
	 */
	public function __construct(
		protected int $groupId,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['groupId' => $this->groupId]);
	}
}
