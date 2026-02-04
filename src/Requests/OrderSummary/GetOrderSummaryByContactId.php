<?php

namespace PlentyOne\Api\Requests\OrderSummary;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get order summary by contact ID
 *
 * Gets an order summary. The ID of the contact must be specified.
 */
class GetOrderSummaryByContactId extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/accounts/order_summaries/contacts/{$this->contactId}";
	}


	/**
	 * @param int $contactId
	 */
	public function __construct(
		protected int $contactId,
	) {
	}
}
