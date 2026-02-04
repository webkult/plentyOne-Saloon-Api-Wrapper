<?php

namespace PlentyOne\Api\Requests\Payment;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get preview list for payment method
 *
 * Get an array with all payment methods with the ID as key and the name as value.
 */
class GetPreviewListForPaymentMethod extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/payments/methods/preview/{$this->language}";
	}


	/**
	 * @param string $language Language for payment method names
	 */
	public function __construct(
		protected string $language,
	) {
	}
}
