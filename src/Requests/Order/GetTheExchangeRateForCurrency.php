<?php

namespace PlentyOne\Api\Requests\Order;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get the exchange rate for a currency
 *
 * Gets the exchange rate for a currency. The ISO 4271 code of the currency must be specified.
 */
class GetTheExchangeRateForCurrency extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/orders/currencies/{$this->currencyIso}/exchangeRate";
	}


	/**
	 * @param int $currencyIso
	 */
	public function __construct(
		protected int $currencyIso,
	) {
	}
}
