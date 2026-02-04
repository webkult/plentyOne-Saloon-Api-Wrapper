<?php

namespace PlentyOne\Api\Requests\Order;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * List referrers
 *
 * Lists referrers with the desired columns/attributes.
 */
class ListReferrers extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/orders/referrers";
	}


	/**
	 * @param null|array $columns The desired columns/attributes of the order referrer to be loaded.
	 */
	public function __construct(
		protected ?array $columns = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['columns' => $this->columns]);
	}
}
