<?php

namespace PlentyOne\Api\Requests\Payment;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Update a payment
 *
 * Update the payment specifed in the request.
 */
class UpdatePayment extends Request
{
	protected Method $method = Method::PUT;


	public function resolveEndpoint(): string
	{
		return "/rest/payments";
	}


	public function __construct()
	{
	}
}
