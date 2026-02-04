<?php

namespace PlentyOne\Api\Requests\Order;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get an order shipping package
 *
 * Gets an order shipping package. The ID of the order and the ID of the order shipping package must be
 * specified.
 */
class GetOrderShippingPackage extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/orders/{$this->orderId}/shipping/packages/{$this->orderShippingPackageId}";
	}


	/**
	 * @param int $orderId The ID of the order
	 * @param int $orderShippingPackageId The ID of the order shipping package
	 * @param null|array $columns The properties to be loaded
	 */
	public function __construct(
		protected int $orderId,
		protected int $orderShippingPackageId,
		protected ?array $columns = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['columns' => $this->columns]);
	}
}
