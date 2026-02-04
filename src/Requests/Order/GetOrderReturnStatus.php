<?php

namespace PlentyOne\Api\Requests\Order;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get an order return status
 *
 * Gets an order return status. The return status has to be specified by providing a return status ID.
 */
class GetOrderReturnStatus extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/returns/status/{$this->returnStatusId}";
	}


	/**
	 * @param int $returnStatusId
	 */
	public function __construct(
		protected int $returnStatusId,
	) {
	}
}
