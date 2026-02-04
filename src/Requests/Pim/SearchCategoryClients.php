<?php

namespace PlentyOne\Api\Requests\Pim;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Search category clients
 *
 * Searches category clients. Returns a paginated result.
 */
class SearchCategoryClients extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/pim/categories/clients";
	}


	/**
	 * @param null|string $with Includes the specified information in the results. More than one parameter should be separated by commas. The following parameters are available:<ul><li> 'category' = The category of the category client.</li></ub>
	 * @param null|string $categoryId Filter restricts the result to category clients with the specified category ID. More than one parameter should be separated by commas. Allowed comparators: 'eq', 'in', 'between', 'gte', 'lte', 'gt' and 'lt'.
	 * @param null|int $plentyId Filter restricts the result to category clients with the specified plenty ID. More than one parameter should be separated by commas. Allowed comparators: 'eq'.
	 */
	public function __construct(
		protected ?string $with = null,
		protected ?string $categoryId = null,
		protected ?int $plentyId = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['with' => $this->with, 'categoryId' => $this->categoryId, 'plentyId' => $this->plentyId]);
	}
}
