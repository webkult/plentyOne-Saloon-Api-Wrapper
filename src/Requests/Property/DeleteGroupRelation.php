<?php

namespace PlentyOne\Api\Requests\Property;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Delete a group relation
 *
 * Deletes a group relation. The ID of the group relation must be specified.
 */
class DeleteGroupRelation extends Request
{
	protected Method $method = Method::DELETE;


	public function resolveEndpoint(): string
	{
		return "/rest/v2/properties/groups/relations/{$this->relationId}";
	}


	/**
	 * @param int $relationId The ID of the group relation
	 */
	public function __construct(
		protected int $relationId,
	) {
	}
}
