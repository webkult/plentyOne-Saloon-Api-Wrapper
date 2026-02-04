<?php

namespace PlentyOne\Api\Requests\Order;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get an order repair reason
 *
 * Gets an order repair reason. The repair reason has to be specified by providing a repair reason ID.
 */
class GetOrderRepairReason extends Request
{
	protected Method $method = Method::GET;


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
