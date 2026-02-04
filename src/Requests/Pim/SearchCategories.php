<?php

namespace PlentyOne\Api\Requests\Pim;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Search categories
 *
 * Searches the categories. Returns a paginated result.
 */
class SearchCategories extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/pim/categories";
	}


	/**
	 * @param null|string $with Includes the specified information in the results. More than one parameter should be separated by commas. The following parameters are available:<ul><li> 'details' = The names of the category.</li><li> 'clients' = The clients of the category.</li><li> 'branch' = The branch of the category.</li><li> 'tagRelationship' = The tags linked with the category and their data.</li><li> 'elmarCategories' = The elmar categories of the category.</li></ub>
	 * @param null|string $ids Filter restricts the result to categories with the specified IDs. More than one parameter should be separated by commas. Allowed comparators: 'eq', 'in', 'between', 'gte', 'lte', 'gt' and 'lt'.
	 * @param null|string $type Filter restricts the result to categories with the specified type. Allowed comparators: 'eq', 'in' and 'not'.
	 * @param null|int $level Filter restricts the result to categories with the specified level. Allowed comparators: 'eq', 'not', 'gte', 'lte', 'gt' and 'lt'.
	 * @param null|string $name Filter restricts the result to categories with a category detail in the specified name. Allowed comparators: 'eq'.
	 * @param null|string $lang Filter restricts the result to categories with a category detail in the specified lang. Allowed comparators: 'eq' and 'not'.
	 * @param null|int $parentCategoryId Filter restricts the result to categories with the specified parent category ID. Allowed comparator: 'eq'.
	 * @param null|int $plentyId Filter restricts the result to categories with the specified plenty ID. Allowed comparator: 'eq'.
	 * @param null|bool $linklist Filter restricts the result to categories with the specified linklist value. Allowed comparator: 'eq'.
	 * @param null|string $tagId Filter restricts the result to categories with the specified tag id. Allowed comparator: 'eq', 'in' and 'not'.
	 * @param null|string $updatedAt Filter restricts the result to categories which have been updated in the specified time frame. The from and to parameter should be separated by a comma. If there is no to value, the current time is used instead. Allowed comparator: 'eq'', 'gte', 'lte', 'gt' and 'lt'.
	 * @param null|string $sortBy Filter sorts the result of categories. Append '_asc' or '_desc' to specify the sorting order. '_desc' is the default value if no other is specified. More than one parameter should be separated by commas. The following parameters are available:<ul><li>'id'</li><li>'position'</li><li>'name'</li><li>'level'</li><li>'parentCategoryId'</li><li>'updatedAt'</li></ul>
	 */
	public function __construct(
		protected ?string $with = null,
		protected ?string $ids = null,
		protected ?string $type = null,
		protected ?int $level = null,
		protected ?string $name = null,
		protected ?string $lang = null,
		protected ?int $parentCategoryId = null,
		protected ?int $plentyId = null,
		protected ?bool $linklist = null,
		protected ?string $tagId = null,
		protected ?string $updatedAt = null,
		protected ?string $sortBy = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter([
			'with' => $this->with,
			'ids' => $this->ids,
			'type' => $this->type,
			'level' => $this->level,
			'name' => $this->name,
			'lang' => $this->lang,
			'parentCategoryId' => $this->parentCategoryId,
			'plentyId' => $this->plentyId,
			'linklist' => $this->linklist,
			'tagId' => $this->tagId,
			'updatedAt' => $this->updatedAt,
			'sortBy' => $this->sortBy,
		]);
	}
}
