<?php

namespace PlentyOne\Api\Requests\Payment;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get a payment
 *
 * Gets a payment. The ID of the payment must be specified.
 */
class GetPayment extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/payments/{$this->paymentId}";
	}


	/**
	 * @param int $paymentId
	 */
	public function __construct(
		protected int $paymentId,
	) {
	}
}
