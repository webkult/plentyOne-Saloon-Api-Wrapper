<?php

namespace PlentyOne\Api\Requests\Payment;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get subscriptions handling payment methods
 *
 * List all payment methods which can handle subscriptions
 */
class GetSubscriptionsHandlingPaymentMethods extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/payments/methods/list/handle_subscription/{$this->language}";
	}


	/**
	 * @param string $language Language for backend payment method names
	 */
	public function __construct(
		protected string $language,
	) {
	}
}
