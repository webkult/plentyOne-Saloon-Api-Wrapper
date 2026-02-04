<?php

namespace PlentyOne\Api\Requests\Order;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get a credit note update preview
 *
 * Returns a credit note preview for the given order data without updating a credit note. The order ID
 * must be specified.
 */
class GetCreditNoteUpdatePreview extends Request
{
	protected Method $method = Method::PUT;


	public function resolveEndpoint(): string
	{
		return "/rest/credit_notes/{$this->orderId}/preview";
	}


	/**
	 * @param int $orderId
	 */
	public function __construct(
		protected int $orderId,
	) {
	}
}
