<?php

namespace PlentyOne\Api\Requests\Order;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Delete package, variation or quantity for an order
 *
 * Deletes the package, variation or quantity in a package. The ID of the order package item variation
 * is mandatory.
 */
class DeletePackageVariationOrQuantityForOrder extends Request
{
	protected Method $method = Method::DELETE;


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
