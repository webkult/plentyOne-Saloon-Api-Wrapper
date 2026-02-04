<?php

namespace PlentyOne\Api\Requests\Pim;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Search attribute values
 *
 * Searches attribute values. Returns a paginated result.
 */
class SearchAttributeValues extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/pim/attributes/values";
	}


	/**
	 * @param null|string $with Includes the specified information in the results. More than one parameter should be separated by commas. The following parameters are available:<ul><li> 'valueNames' = The names of the attribute value.</li><li> 'attribute' = The attribute of the attribute value.</li><li> 'valueMaps' = The maps of the attribute value.</li><li> 'valueMarketNames' = The value market names of the attribute value.</li></ub>
	 * @param null|string $ids Filter restricts the result to attribute values with the specified IDs. More than one parameter should be separated by commas. Allowed comparators: 'eq', 'in', 'between', 'gte', 'lte', 'gt' and 'lt'.
	 * @param null|string $attributeId Filter restricts the result to attribute values with the specified attribute ID. More than one parameter should be separated by commas. Allowed comparators: 'eq', 'in', 'between', 'gte', 'lte', 'gt' and 'lt'.
	 * @param null|string $backendName Filter restricts the result to attribute values with the specified backend name. More than one parameter should be separated by commas. Allowed comparators: 'eq' and 'in'.
	 * @param null|string $name Filter restricts the result to attribute values with the specified name. More than one parameter should be separated by commas. Allowed comparators: 'eq'.
	 * @param null|string $position Filter restricts the result to attribute values with the specified IDs. More than one parameter should be separated by commas. Allowed comparators: 'eq', 'between', 'gte', 'lte', 'gt' and 'lt'.
	 * @param null|string $updatedAt Filter restricts the result to attribute values which have been updated in the specified time frame. The from and to parameter should be separated by a comma. If there is no to value, the current time is used instead. Allowed comparator: 'eq'', 'gte', 'lte', 'gt' and 'lt'.
	 */
	public function __construct(
		protected ?string $with = null,
		protected ?string $ids = null,
		protected ?string $attributeId = null,
		protected ?string $backendName = null,
		protected ?string $name = null,
		protected ?string $position = null,
		protected ?string $updatedAt = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter([
			'with' => $this->with,
			'ids' => $this->ids,
			'attributeId' => $this->attributeId,
			'backendName' => $this->backendName,
			'name' => $this->name,
			'position' => $this->position,
			'updatedAt' => $this->updatedAt,
		]);
	}
}
