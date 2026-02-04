<?php

namespace PlentyOne\Api\Requests\Property;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Delete property relations
 *
 * Deletes property relations. The ID of the property relations must be specified.
 */
class DeletePropertyRelations extends Request
{
	protected Method $method = Method::DELETE;


	public function resolveEndpoint(): string
	{
		return "/rest/properties/relations";
	}


	/**
	 * @param int $relationId The ID of the property relation
	 */
	public function __construct(
		protected int $relationId,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['relationId' => $this->relationId]);
	}
}
