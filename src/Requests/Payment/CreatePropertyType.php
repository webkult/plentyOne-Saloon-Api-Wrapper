<?php

namespace PlentyOne\Api\Requests\Payment;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Create property type
 *
 * Create a property type
 */
class CreatePropertyType extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/rest/payments/properties/types";
	}


	public function __construct()
	{
	}
}
