<?php

namespace PlentyOne\Api\Requests\Order;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Delete items of an order package
 *
 * Deletes the items of an order package. The ID of the package, of the item and of the variation are
 * mandatory.
 */
class DeleteItemsOfOrderPackage extends Request
{
	protected Method $method = Method::DELETE;


	public function resolveEndpoint(): string
	{
		return "/rest/orders/shipping/packages/items/{$this->packageId}/{$this->itemId}/{$this->variationId}";
	}


	/**
	 * @param int $packageId The ID of the package
	 * @param int $itemId The ID of the item
	 * @param int $variationId The ID of the variation
	 */
	public function __construct(
		protected int $packageId,
		protected int $itemId,
		protected int $variationId,
	) {
	}
}
