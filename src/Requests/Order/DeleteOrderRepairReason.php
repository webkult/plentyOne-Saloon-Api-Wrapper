<?php

namespace PlentyOne\Api\Requests\Order;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Delete an order repair reason
 *
 * Deletes an order repair reason. The repair reason ID must be specified.
 */
class DeleteOrderRepairReason extends Request
{
	protected Method $method = Method::DELETE;


	public function resolveEndpoint(): string
	{
		return "/rest/repairs/reasons/{$this->repairReasonId}";
	}


	/**
	 * @param int $repairReasonId
	 */
	public function __construct(
		protected int $repairReasonId,
	) {
	}
}
