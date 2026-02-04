<?php

namespace PlentyOne\Api\Requests\Order;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get a currency
 *
 * Get a currency. The ISO 4217 code of the currency must be specified.
 */
class GetCurrency extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/orders/currencies/{$this->currencyIso}";
	}


	/**
	 * @param string $currencyIso The ISO 4217 code of the currency
	 * @param null|array $columns The attributes to be loaded
	 * @param null|array $with The relations to be loaded. Valid relations are 'names' or 'countries'
	 */
	public function __construct(
		protected string $currencyIso,
		protected ?array $columns = null,
		protected ?array $with = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['columns' => $this->columns, 'with' => $this->with]);
	}
}
