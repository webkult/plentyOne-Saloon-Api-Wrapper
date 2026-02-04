<?php

namespace PlentyOne\Api\Requests\Property;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Update relations
 *
 * Updates relations. The IDs of the properties relation must be specified.
 */
class UpdateRelations extends Request
{
	protected Method $method = Method::PUT;


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
