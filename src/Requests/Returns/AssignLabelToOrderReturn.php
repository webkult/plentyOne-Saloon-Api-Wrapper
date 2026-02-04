<?php

namespace PlentyOne\Api\Requests\Returns;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Assign label to order return
 *
 * Assign a label to order return specified by the orderId and the returnsId.
 */
class AssignLabelToOrderReturn extends Request
{
	protected Method $method = Method::PUT;


	public function resolveEndpoint(): string
	{
		return "/rest/orders/{$this->orderId}/shipping/returns/assign_label/{$this->returnsId}";
	}


	/**
	 * @param int $returnsId The id of the order returns to be assigned.
	 * @param int $orderId The id of the order that the order returns has to be assigned to.
	 */
	public function __construct(
		protected int $returnsId,
		protected int $orderId,
	) {
	}
}
