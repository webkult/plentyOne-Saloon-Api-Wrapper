<?php

namespace PlentyOne\Api\Requests\Payment;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get searchable payment methods
 *
 * Returns all payment methods with id and name which are searchable for the backend
 */
class GetSearchablePaymentMethods extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/payments/methods/list/backend_searchable/{$this->language}";
	}


	/**
	 * @param string $language Language for backend payment method names
	 */
	public function __construct(
		protected string $language,
	) {
	}
}
