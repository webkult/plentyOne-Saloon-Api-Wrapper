<?php

namespace PlentyOne\Api\Requests\Property;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get a property group
 *
 * Gets a property group. The ID of the group must be specified.
 */
class GetPropertyGroup extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/v2/properties/groups/{$this->groupId}";
	}


	/**
	 * @param int $groupId The ID of the group
	 * @param null|string $with Includes the specified information in the results. More than one parameter should be separated by commas. The following parameters are available:<ul><li>'names' = The names of the property group.</li><li>'options' = The options of the property group.</li></ul>
	 */
	public function __construct(
		protected int $groupId,
		protected ?string $with = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['with' => $this->with]);
	}
}
