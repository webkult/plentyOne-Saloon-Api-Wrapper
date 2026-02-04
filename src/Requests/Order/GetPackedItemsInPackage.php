<?php

namespace PlentyOne\Api\Requests\Order;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get packed items in a package
 *
 * Get all the packed items from a given package
 */
class GetPackedItemsInPackage extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/orders/shipping/packages/{$this->packageId}/packed_items";
	}


	/**
	 * @param int $packageId The ID of the package
	 */
	public function __construct(
		protected int $packageId,
	) {
	}
}
