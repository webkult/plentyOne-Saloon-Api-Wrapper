<?php

namespace PlentyOne\Api\Requests\Order;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * List currencies
 *
 * List currencies supported in the system.
 */
class ListCurrencies extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/orders/currencies";
	}


	/**
	 * @param null|array $columns The attributes to be loaded
	 * @param null|array $with The relations to be loaded. Valid relations are 'names' or 'countries'.
	 */
	public function __construct(
		protected ?array $columns = null,
		protected ?array $with = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['columns' => $this->columns, 'with' => $this->with]);
	}
}
