<?php

namespace PlentyOne\Api\Requests\Property;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get a group relation
 *
 * Gets a group relation. The ID of the group must be specified.
 */
class GetGroupRelation extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/v2/properties/groups/relations/{$this->relationId}";
	}


	/**
	 * @param int $relationId The ID of the group relation
	 * @param null|string $with Includes the specified information in the results. More than one parameter should be separated by commas. The following parameters are available:<ul><li>'group' = The related property group.</li><li>'property' = The related property.</li></ul>
	 */
	public function __construct(
		protected int $relationId,
		protected ?string $with = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['with' => $this->with]);
	}
}
