<?php

namespace PlentyOne\Api\Requests\Order;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Delete an order repair status
 *
 * Deletes an order repair status. The repair status ID must be specified.
 */
class DeleteOrderRepairStatus extends Request
{
	protected Method $method = Method::DELETE;


	public function resolveEndpoint(): string
	{
		return "/rest/repairs/status/{$this->repairStatusId}";
	}


	/**
	 * @param int $repairStatusId
	 */
	public function __construct(
		protected int $repairStatusId,
	) {
	}
}
