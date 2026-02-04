<?php

namespace PlentyOne\Api\Requests\Item;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get all sales price relations
 *
 * Gets all links between variations and sales prices including sales price data.
 */
class GetAllSalesPriceRelations extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/items/variations/variation_sales_prices";
	}


	/**
	 * @param null|int $variationId Filter that restricts the search result to the sales price data of a specific variation.
	 * @param null|int $salesPriceId Filter that restricts the search result to the sales price data of variations linked to a specific sales price.
	 * @param null|string $updatedAt Filter that restricts the search result to links between variations and sales prices updated after a specific point in time.
	 */
	public function __construct(
		protected ?int $variationId = null,
		protected ?int $salesPriceId = null,
		protected ?string $updatedAt = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['variationId' => $this->variationId, 'salesPriceId' => $this->salesPriceId, 'updatedAt' => $this->updatedAt]);
	}
}
