<?php

namespace PlentyOne\Api\Requests\Item;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * List property groups
 *
 * Lists the property groups.
 */
class ListPropertyGroups extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/items/property_groups";
	}


	/**
	 * @param null|string $with Includes the specified property group information in the results. The following parameters are available: <ul><li>names</b> = The names of the property group</li><li>properties</b> = The properties that are assigned to the property group</li></ul> More than one parameter should be separated by commas.
	 */
	public function __construct(
		protected ?string $with = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['with' => $this->with]);
	}
}
