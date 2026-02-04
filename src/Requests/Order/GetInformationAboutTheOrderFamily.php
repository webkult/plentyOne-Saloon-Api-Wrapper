<?php

namespace PlentyOne\Api\Requests\Order;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get information about the order family
 *
 * Gets information about the order family. All related orders can be shown as tree when the parameter
 * 'with' is given with the value 'tree'.
 */
class GetInformationAboutTheOrderFamily extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/orders/{$this->orderId}/family";
	}


	/**
	 * @param int $orderId
	 */
	public function __construct(
		protected int $orderId,
	) {
	}
}
