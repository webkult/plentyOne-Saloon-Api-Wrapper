<?php

namespace PlentyOne\Api\Requests\Order;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get an order repair status
 *
 * Gets an order repair status. The repair status has to be specified by providing a repair status ID.
 */
class GetOrderRepairStatus extends Request
{
	protected Method $method = Method::GET;


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
