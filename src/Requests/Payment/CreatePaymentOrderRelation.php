<?php

namespace PlentyOne\Api\Requests\Payment;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Create Payment-Order-Relation
 *
 * Creates a Payment-Order-Relation specified by paymentId and orderId.
 */
class CreatePaymentOrderRelation extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/rest/payment/{$this->paymentId}/order/{$this->orderId}";
	}


	/**
	 * @param int $paymentId
	 * @param int $orderId
	 */
	public function __construct(
		protected int $paymentId,
		protected int $orderId,
	) {
	}
}
