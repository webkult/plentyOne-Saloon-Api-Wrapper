<?php

namespace PlentyOne\Api\Requests\Payment;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Create a payment
 *
 * Create a payment specified by the request.
 */
class CreatePayment extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/rest/payments";
	}


	public function __construct()
	{
	}
}
