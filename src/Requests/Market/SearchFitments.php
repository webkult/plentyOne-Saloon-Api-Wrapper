<?php

namespace PlentyOne\Api\Requests\Market;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Search fitments
 *
 * Search fitments by filter options.
 */
class SearchFitments extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/markets/ebay/parts-fitments/search";
	}


	/**
	 * @param null|int $categoryId Filter that restricts the search result to fitments with specific eBay category ID. Several IDs can be entered as array.
	 * @param null|int $id Filter that restricts the search result to fitments with specific ID. Several IDs can be entered as array.
	 * @param null|int $marketId Filter that restricts the search result to fitments with specific market ID. Several IDs can be entered as array.
	 * @param null|string $name Filter that restricts the search result to fitments with specific name.
	 * @param null|string $propertyName Filter that restricts the search result to fitments with specific property name.
	 * @param null|string $propertyValue Filter that restricts the search result to fitments with specific property value.
	 * @param null|int $page The page of results to search for.
	 * @param null|int $itemsPerPage The number of items to list per page.
	 * @param null|array $with An array with child instances to be loaded. Available values: 'items', 'items.properties'.
	 */
	public function __construct(
		protected ?int $categoryId = null,
		protected ?int $id = null,
		protected ?int $marketId = null,
		protected ?string $name = null,
		protected ?string $propertyName = null,
		protected ?string $propertyValue = null,
		protected ?int $page = null,
		protected ?int $itemsPerPage = null,
		protected ?array $with = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter([
			'categoryId' => $this->categoryId,
			'id' => $this->id,
			'marketId' => $this->marketId,
			'name' => $this->name,
			'propertyName' => $this->propertyName,
			'propertyValue' => $this->propertyValue,
			'page' => $this->page,
			'itemsPerPage' => $this->itemsPerPage,
			'with' => $this->with,
		]);
	}
}
