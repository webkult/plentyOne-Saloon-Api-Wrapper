<?php

namespace PlentyOne\Api\Requests\Payment;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Update property type
 *
 * Update a property type
 */
class UpdatePropertyType extends Request
{
	protected Method $method = Method::PUT;


	public function resolveEndpoint(): string
	{
		return "/rest/payments/properties/types";
	}


	public function __construct()
	{
	}
}
