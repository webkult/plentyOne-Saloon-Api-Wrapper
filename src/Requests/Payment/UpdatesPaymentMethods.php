<?php

namespace PlentyOne\Api\Requests\Payment;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Updates payment methods
 *
 * Updates multiple payment methods by id
 */
class UpdatesPaymentMethods extends Request
{
	protected Method $method = Method::PUT;


	public function resolveEndpoint(): string
	{
		return "/rest/payments/methods/bulk";
	}


	public function __construct()
	{
	}
}
