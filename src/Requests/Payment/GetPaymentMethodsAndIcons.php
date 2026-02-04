<?php

namespace PlentyOne\Api\Requests\Payment;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get payment methods and icons
 *
 * Returns all payment methods with id and backend icon url
 */
class GetPaymentMethodsAndIcons extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/payments/methods/list/backend_icon";
	}


	public function __construct()
	{
	}
}
