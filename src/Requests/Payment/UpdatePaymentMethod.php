<?php

namespace PlentyOne\Api\Requests\Payment;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Update a payment method
 *
 * Updates the name and isDocumentBuilderActive of the payment method.
 */
class UpdatePaymentMethod extends Request
{
	protected Method $method = Method::PUT;


	public function resolveEndpoint(): string
	{
		return "/rest/payments/methods";
	}


	public function __construct()
	{
	}
}
