<?php

namespace PlentyOne\Api\Requests\Payment;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Create Payment-Contact-Relation
 *
 * Creates a Payment-Contact-Relation specified by a paymentId and contactId.
 */
class CreatePaymentContactRelation extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/rest/payment/{$this->paymentId}/contact/{$this->contactId}";
	}


	/**
	 * @param int $paymentId
	 * @param int $contactId
	 */
	public function __construct(
		protected int $paymentId,
		protected int $contactId,
	) {
	}
}
