<?php

namespace PlentyOne\Api\Requests\Order;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get the exchange rates from a currency
 *
 * Gets the exchange rates from a currency. The ISO 4271 code of the currency must be specified.
 */
class GetTheExchangeRatesFromCurrency extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/orders/currencies/exchange_rates/from/{$this->currencyIso}";
	}


	/**
	 * @param int $currencyIso
	 */
	public function __construct(
		protected int $currencyIso,
	) {
	}
}
