<?php

namespace PlentyOne\Api\Requests\Payment;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Delete payment
 *
 * Delete payment. The ID of the payment must be specified.
 */
class DeletePayment extends Request
{
	protected Method $method = Method::DELETE;


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
