<?php

namespace PlentyOne\Api\Requests\Order;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * List order shipping packages
 *
 * Lists order shipping packages. The ID of the order must be specified.
 */
class ListOrderShippingPackages extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/orders/{$this->orderId}/shipping/packages";
	}


	/**
	 * @param int $orderId The ID of the order
	 * @param null|array $columns The properties to be loaded
	 * @param null|string $with Possible values are 'labelBase64', 'items'
	 */
	public function __construct(
		protected int $orderId,
		protected ?array $columns = null,
		protected ?string $with = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['columns' => $this->columns, 'with' => $this->with]);
	}
}
