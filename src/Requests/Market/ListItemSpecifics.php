<?php

namespace PlentyOne\Api\Requests\Market;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * List item specifics
 *
 * List item specifics for a given category Id and referrerId.
 */
class ListItemSpecifics extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/markets/ebay/item_specifics";
	}


	/**
	 * @param int $categoryId The ID of the category for which to list item specifics
	 * @param string $marketplaceId Filter that restricts the search result to categories that belong to the specified marketplace ID.
	 */
	public function __construct(
		protected int $categoryId,
		protected string $marketplaceId,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['categoryId' => $this->categoryId, 'marketplaceId' => $this->marketplaceId]);
	}
}
