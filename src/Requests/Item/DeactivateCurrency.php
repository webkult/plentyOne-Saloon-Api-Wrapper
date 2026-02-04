<?php

namespace PlentyOne\Api\Requests\Item;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Deactivate a currency
 *
 * Deactivate a currency for a sales price. The ID of the sales price and the ISO code of the currency
 * must be specified.
 */
class DeactivateCurrency extends Request
{
	protected Method $method = Method::DELETE;


	public function resolveEndpoint(): string
	{
		return "/rest/items/sales_prices/{$this->id}/currencies/{$this->currency}";
	}


	/**
	 * @param int $id
	 * @param int $currency
	 */
	public function __construct(
		protected int $id,
		protected int $currency,
	) {
	}
}
