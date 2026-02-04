<?php

namespace PlentyOne\Api\Requests\Order;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Update additional data of the shipping information
 *
 * Updates additional data of the shipping information. The ID of the order must be specified.
 */
class UpdateAdditionalDataOfTheShippingInformation extends Request
{
	protected Method $method = Method::PUT;


	public function resolveEndpoint(): string
	{
		return "/rest/orders/{$this->orderId}/shipping/shipping_information/additional_data";
	}


	/**
	 * @param int $orderId The ID of the order
	 */
	public function __construct(
		protected int $orderId,
	) {
	}
}
