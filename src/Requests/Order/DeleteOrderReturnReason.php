<?php

namespace PlentyOne\Api\Requests\Order;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Delete an order return reason
 *
 * Deletes an order return reason. The return reason ID must be specified.
 */
class DeleteOrderReturnReason extends Request
{
	protected Method $method = Method::DELETE;


	public function resolveEndpoint(): string
	{
		return "/rest/returns/reasons/{$this->returnReasonsId}";
	}


	/**
	 * @param int $returnReasonsId
	 */
	public function __construct(
		protected int $returnReasonsId,
	) {
	}
}
