<?php

namespace PlentyOne\Api\Requests\Payment;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get active payment methods
 *
 * Returns all payment methods with id and name which are active for the backend
 */
class GetActivePaymentMethods extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/payments/methods/list/backend_active/{$this->language}";
	}


	/**
	 * @param string $language Language for backend payment method names
	 */
	public function __construct(
		protected string $language,
	) {
	}
}
