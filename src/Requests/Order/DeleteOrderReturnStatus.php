<?php

namespace PlentyOne\Api\Requests\Order;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Delete an order return status
 *
 * Deletes an order return status. The return status ID must be specified.
 */
class DeleteOrderReturnStatus extends Request
{
	protected Method $method = Method::DELETE;


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
