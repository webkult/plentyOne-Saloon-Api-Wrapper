<?php

namespace PlentyOne\Api\Requests\Payment;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Delete Payment-Order-Relation
 *
 * Deletes a Payment-Order-Relation specified by a paymentId.
 */
class DeletePaymentOrderRelation extends Request
{
	protected Method $method = Method::DELETE;


	public function resolveEndpoint(): string
	{
		return "/rest/payment/{$this->paymentId}/order";
	}


	/**
	 * @param int $paymentId
	 */
	public function __construct(
		protected int $paymentId,
	) {
	}
}
