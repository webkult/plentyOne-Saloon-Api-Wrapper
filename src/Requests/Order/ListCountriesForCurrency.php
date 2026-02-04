<?php

namespace PlentyOne\Api\Requests\Order;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * List countries for a currency
 *
 * List countries for a currency. The ISO 4271 code of the currency must be specified.
 */
class ListCountriesForCurrency extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/orders/currencies/{$this->currencyIso}/countries";
	}


	/**
	 * @param string $currencyIso The ISO 4217 code of the currency
	 * @param null|array $columns The attributes to be loaded
	 */
	public function __construct(
		protected string $currencyIso,
		protected ?array $columns = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['columns' => $this->columns]);
	}
}
