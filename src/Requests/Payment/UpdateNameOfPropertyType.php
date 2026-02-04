<?php

namespace PlentyOne\Api\Requests\Payment;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Update name of property type
 *
 * Update a name of a property type
 */
class UpdateNameOfPropertyType extends Request
{
	protected Method $method = Method::PUT;


	public function resolveEndpoint(): string
	{
		return "/rest/payment/properties/types/names";
	}


	public function __construct()
	{
	}
}
