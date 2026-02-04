<?php

namespace PlentyOne\Api\Requests\Pim;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Search category properties
 *
 * Searches category properties. Returns a paginated result.
 */
class SearchCategoryProperties extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/pim/categories/properties";
	}


	/**
	 * @param null|string $with Includes the specified information in the results. More than one parameter should be separated by commas. The following parameters are available:<ul><li> 'category' = The category of the property.</li></ub>
	 * @param null|string $categoryId Filter restricts the result to category properties with the specified category ID. More than one parameter should be separated by commas. Allowed comparators: 'eq', 'in', 'between', 'gte', 'lte', 'gt' and 'lt'.
	 * @param null|int $plentyId Filter restricts the result to category properties with the specified plenty ID. More than one parameter should be separated by commas. Allowed comparators: 'eq'.
	 * @param null|string $value Filter restricts the result to category properties with the specified value. More than one parameter should be separated by commas. Allowed comparators: 'eq'.
	 */
	public function __construct(
		protected ?string $with = null,
		protected ?string $categoryId = null,
		protected ?int $plentyId = null,
		protected ?string $value = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['with' => $this->with, 'categoryId' => $this->categoryId, 'plentyId' => $this->plentyId, 'value' => $this->value]);
	}
}
