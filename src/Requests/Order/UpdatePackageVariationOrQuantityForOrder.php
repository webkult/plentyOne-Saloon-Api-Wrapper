<?php

namespace PlentyOne\Api\Requests\Order;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Update package, variation or quantity for an order
 *
 * Updates the package, variation or quantity in a package. The ID of the order package item variation
 * is mandatory.
 */
class UpdatePackageVariationOrQuantityForOrder extends Request
{
	protected Method $method = Method::PUT;


	public function resolveEndpoint(): string
	{
		return "/rest/orders/shipping/packages/items/{$this->id}";
	}


	/**
	 * @param int $id The ID of the order package item variation
	 */
	public function __construct(
		protected int $id,
	) {
	}
}
