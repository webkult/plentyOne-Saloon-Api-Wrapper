<?php

namespace PlentyOne\Api\Requests\Pim;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Search category details
 *
 * Searches category details. Returns a paginated result.
 */
class SearchCategoryDetails extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/pim/categories/details";
	}


	/**
	 * @param null|string $with Includes the specified information in the results. More than one parameter should be separated by commas. The following parameters are available:<ul><li> 'category' = The category of the category detail.</li></ub>
	 * @param null|string $categoryId Filter restricts the result to category details with the specified category ID. More than one parameter should be separated by commas. Allowed comparators: 'eq', 'in', 'between', 'gte', 'lte', 'gt' and 'lt'.
	 * @param null|int $plentyId Filter restricts the result to category details with the specified plenty ID. More than one parameter should be separated by commas. Allowed comparators: 'eq'.
	 * @param null|string $lang Filter restricts the result to category details with the specified language. More than one parameter should be separated by commas. Allowed comparators: 'eq', 'in' and 'not'.
	 * @param null|string $name Filter restricts the result to category details with the specified name. More than one parameter should be separated by commas. Allowed comparators: 'eq' and 'like'.
	 * @param null|string $nameUrl Filter restricts the result to category details with the specified name url. More than one parameter should be separated by commas. Allowed comparators: 'eq' and 'like'.
	 * @param null|string $metaKeywords Filter restricts the result to category details with the specified meta keywords. More than one parameter should be separated by commas. Allowed comparators: 'eq' and 'like'.
	 * @param null|string $position Filter restricts the result to category details with the specified position. More than one parameter should be separated by commas. Allowed comparators: 'eq', 'in', 'gte', 'lte', 'gt' and 'lt'.
	 */
	public function __construct(
		protected ?string $with = null,
		protected ?string $categoryId = null,
		protected ?int $plentyId = null,
		protected ?string $lang = null,
		protected ?string $name = null,
		protected ?string $nameUrl = null,
		protected ?string $metaKeywords = null,
		protected ?string $position = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter([
			'with' => $this->with,
			'categoryId' => $this->categoryId,
			'plentyId' => $this->plentyId,
			'lang' => $this->lang,
			'name' => $this->name,
			'nameUrl' => $this->nameUrl,
			'metaKeywords' => $this->metaKeywords,
			'position' => $this->position,
		]);
	}
}
