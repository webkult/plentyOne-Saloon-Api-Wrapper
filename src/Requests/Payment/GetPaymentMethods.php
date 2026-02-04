<?php

namespace PlentyOne\Api\Requests\Payment;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get payment methods
 *
 * Returns all payment methods with id and name
 */
class GetPaymentMethods extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/payments/methods/list";
	}


	public function __construct()
	{
	}
}
