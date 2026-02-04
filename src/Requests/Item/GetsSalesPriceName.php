<?php

namespace PlentyOne\Api\Requests\Item;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Gets a sales price name
 *
 * Gets the sales price name of a sales price in the specified langauge. The ID of the sales price and
 * the language code must be specified.
 */
class GetsSalesPriceName extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/items/sales_prices/{$this->id}/names/{$this->lang}";
	}


	/**
	 * @param string $lang The language of the sales price.
	 * @param int $id
	 * @param int $salesPriceId The ID of the sales price.
	 */
	public function __construct(
		protected string $lang,
		protected int $id,
		protected int $salesPriceId,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['salesPriceId' => $this->salesPriceId]);
	}
}
