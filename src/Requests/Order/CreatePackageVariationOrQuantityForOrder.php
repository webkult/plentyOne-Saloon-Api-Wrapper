<?php

namespace PlentyOne\Api\Requests\Order;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Create package, variation or quantity for an order
 *
 * Creates the package, variation or quantity in a package. The ID of the order package item variation
 * is mandatory.
 */
class CreatePackageVariationOrQuantityForOrder extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/rest/orders/shipping/packages/{$this->packageId}/items";
	}


	/**
	 * @param int $packageId The ID of the order package
	 */
	public function __construct(
		protected int $packageId,
	) {
	}
}
