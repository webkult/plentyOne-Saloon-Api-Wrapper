<?php

namespace PlentyOne\Api\Requests\Order;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get the exchange rates to a currency
 *
 * Gets the exchange rates to a currency. The ISO 4271 code of the currency must be specified.
 */
class GetTheExchangeRatesToCurrency extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/orders/currencies/exchange_rates/to/{$this->currencyIso}";
	}


	/**
	 * @param int $currencyIso
	 */
	public function __construct(
		protected int $currencyIso,
	) {
	}
}
