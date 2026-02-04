<?php

namespace PlentyOne\Api\Requests\Payment;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Gets a payment method name by id and lang
 *
 * Gets a payment method name by id and lang. The ID and the requested lang of the payment method must
 * be specified.
 */
class GetsPaymentMethodNameByIdAndLang extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/payments/methodNames/{$this->paymentMethodId}/{$this->lang}";
	}


	/**
	 * @param int $paymentMethodId
	 * @param int $lang
	 */
	public function __construct(
		protected int $paymentMethodId,
		protected int $lang,
	) {
	}
}
