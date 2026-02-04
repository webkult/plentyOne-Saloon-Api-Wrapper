<?php

namespace PlentyOne\Api\Requests\Payment;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Create a payment method
 *
 * Creates a payment method. The plugin key, the payment key and the name of the payment method must be
 * specified.
 */
class CreatePaymentMethod extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/rest/payments/methods";
	}


	public function __construct()
	{
	}
}
