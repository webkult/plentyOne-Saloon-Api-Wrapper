<?php

namespace PlentyOne\Api\Requests\Payment;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Create order relation with validation
 *
 * Create a new order relation with validation by orderId and paymentId.
 */
class CreateOrderRelationWithValidation extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/rest/payment/{$this->paymentId}/order/{$this->orderId}/validation";
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
