<?php

namespace PlentyOne\Api\Requests\Payment;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get DocumenBuilder active payment methods
 *
 * Get DocumenBuilder active payment methods
 */
class GetDocumenBuilderActivePaymentMethods extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/payments/methods/list/documentbuilder_active/{$this->language}";
	}


	/**
	 * @param int $language
	 */
	public function __construct(
		protected int $language,
	) {
	}
}
