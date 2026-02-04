<?php

namespace PlentyOne\Api\Requests\Order;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * List shipping countries
 *
 * Lists all shipping countries.
 */
class ListShippingCountries extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/orders/shipping/countries";
	}


	/**
	 * @param null|int $active Returns only the active shipping countries.
	 * @param null|array $with The relations to be loaded. Possible values are 'states' and 'names'.
	 * @param null|int $onlyEucountries Returns only the EU shipping countries.
	 */
	public function __construct(
		protected ?int $active = null,
		protected ?array $with = null,
		protected ?int $onlyEucountries = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['active' => $this->active, 'with' => $this->with, 'onlyEUCountries' => $this->onlyEucountries]);
	}
}
