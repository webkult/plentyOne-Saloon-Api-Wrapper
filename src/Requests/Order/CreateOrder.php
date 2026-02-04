<?php

namespace PlentyOne\Api\Requests\Order;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Create an order
 *
 * Creates an order. The parameters included in the example below must be specified.
 */
class CreateOrder extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/rest/orders";
	}


	/**
	 * @param null|array $coupon One or multiple coupon code to be redeemed with order creation
	 */
	public function __construct(
		protected ?array $coupon = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['coupon' => $this->coupon]);
	}
}
