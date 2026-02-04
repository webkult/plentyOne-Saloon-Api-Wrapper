<?php

namespace PlentyOne\Api\Requests\Payment;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Update property
 *
 * Update a payment property
 */
class UpdateProperty extends Request
{
	protected Method $method = Method::PUT;


	public function resolveEndpoint(): string
	{
		return "/rest/payments/properties";
	}


	public function __construct()
	{
	}
}
