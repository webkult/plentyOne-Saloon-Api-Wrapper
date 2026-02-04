<?php

namespace PlentyOne\Api\Requests\Payment;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Delete Payment-Contact-Relation
 *
 * Delete a Payment-Contact-Relation specified by a paymentId.
 */
class DeletePaymentContactRelation extends Request
{
	protected Method $method = Method::DELETE;


	public function resolveEndpoint(): string
	{
		return "/rest/payment/{$this->paymentId}/contact";
	}


	/**
	 * @param int $paymentId
	 */
	public function __construct(
		protected int $paymentId,
	) {
	}
}
