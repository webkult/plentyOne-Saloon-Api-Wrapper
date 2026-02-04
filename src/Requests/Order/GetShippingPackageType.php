<?php

namespace PlentyOne\Api\Requests\Order;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get a shipping package type
 *
 * Gets a shipping package type. The ID of the shipping package type must be specified.
 */
class GetShippingPackageType extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/orders/shipping/package_types/{$this->shippingPackageTypeId}";
	}


	/**
	 * @param int $shippingPackageTypeId The ID of the shipping package type
	 */
	public function __construct(
		protected int $shippingPackageTypeId,
	) {
	}
}
