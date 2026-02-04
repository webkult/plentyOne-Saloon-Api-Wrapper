<?php

namespace PlentyOne\Api\Requests\Order;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get an order return reason
 *
 * Gets an order return reason. The return reason has to be specified by providing a return reason ID.
 */
class GetOrderReturnReason extends Request
{
	protected Method $method = Method::GET;


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
