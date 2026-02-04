<?php

namespace PlentyOne\Api\Requests\Market;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * List categories
 *
 * Lists categories. By passing category ID as filter, only subcategories of that category will be
 * returned. The marketplace ID filter is required.
 */
class ListCategories extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/markets/ebay/categories";
	}


	/**
	 * @param string $marketplaceId Filter that restricts the search result to categories that belong to the specified marketplace ID.
	 * @param null|string $categoryId Filter that restricts the search result to categories that belong to the specified category ID.
	 */
	public function __construct(
		protected string $marketplaceId,
		protected ?string $categoryId = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['marketplaceId' => $this->marketplaceId, 'categoryId' => $this->categoryId]);
	}
}
