<?php

namespace PlentyOne\Api\Requests\Pim;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Search for attributes
 *
 * Searches attributes. Returns a paginated result.
 */
class SearchForAttributes extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/pim/attributes";
	}


	/**
	 * @param null|string $with Includes the specified information in the results. More than one parameter should be separated by commas. The following parameters are available:<ul><li> 'attributeNames' = The attribute names of the attribute.</li><li> 'values' = The attribute values of the attribute.</li><li> 'maps' = The attribute maps of the attribute.</li></ub>
	 * @param null|string $ids Filter restricts the result to attributes with the specified IDs. More than one parameter should be separated by commas. Allowed comparators: 'eq', 'in', 'between', 'gte', 'lte', 'gt' and 'lt'.
	 * @param null|string $backendName Filter restricts the result to attributes with the specified backend name. Allowed comparators: 'eq' and 'in'.
	 * @param null|string $name Filter restricts the result to attributes with the specified name. Allowed comparators: 'eq'.
	 * @param null|int $position Filter restricts the result to attributes with the specified position. Allowed comparator: 'eq', 'between', 'gte', 'lte', 'gt' and 'lt'.
	 * @param null|string $updatedAt Filter restricts the result to attributes which have been updated in the specified time frame. The from and to parameter should be separated by a comma. If there is no to value, the current time is used instead. Allowed comparator: 'eq'', 'gte', 'lte', 'gt' and 'lt'.
	 */
	public function __construct(
		protected ?string $with = null,
		protected ?string $ids = null,
		protected ?string $backendName = null,
		protected ?string $name = null,
		protected ?int $position = null,
		protected ?string $updatedAt = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter([
			'with' => $this->with,
			'ids' => $this->ids,
			'backendName' => $this->backendName,
			'name' => $this->name,
			'position' => $this->position,
			'updatedAt' => $this->updatedAt,
		]);
	}
}
