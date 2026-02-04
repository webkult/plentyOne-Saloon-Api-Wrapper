<?php

namespace PlentyOne\Api\Requests\Item;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Create a sales price name
 *
 * Creates a name for a sales price in the specified language. The ID of the sales price must be
 * specified.
 */
class CreateSalesPriceName extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/rest/items/sales_prices/{$this->id}/names";
	}


	/**
	 * @param int $id
	 * @param int $salesPriceId The ID of the sales price.
	 */
	public function __construct(
		protected int $id,
		protected int $salesPriceId,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['salesPriceId' => $this->salesPriceId]);
	}
}
