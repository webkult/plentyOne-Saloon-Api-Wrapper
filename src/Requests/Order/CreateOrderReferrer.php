<?php

namespace PlentyOne\Api\Requests\Order;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Create an order referrer
 *
 * Create an order referrer. The ID can be specified, a parent ID can be specified to create a sub
 * referrer or if no ID is specified, a referrer ID will be assigned automatically.
 * If an ID is
 * specified, the ID may not be used already. If the ID is used already, the referrer will only be
 * created.
 * If the ID is automatically assigned, the first ID that has not been used before will be
 * set.
 * If the ID is not specified, but a parent referrer ID is given, then the new referrer ID will be
 * a sub referrer of the given parent.
 */
class CreateOrderReferrer extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/rest/orders/referrers/{$this->parentReferrerId}";
	}


	/**
	 * @param int $parentReferrerId
	 * @param array $data The attributes of the order referrer to be created.
	 */
	public function __construct(
		protected int $parentReferrerId,
		protected array $data,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['data' => $this->data]);
	}
}
