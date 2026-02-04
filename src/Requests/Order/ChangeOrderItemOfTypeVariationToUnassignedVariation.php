<?php

namespace PlentyOne\Api\Requests\Order;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Change an order item of type "variation" to "unassigned variation".
 *
 * Change an order item of type "variation" to "unassigned variation". The ID of the order item must be
 * specified.
 */
class ChangeOrderItemOfTypeVariationToUnassignedVariation extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/rest/warranties/items/{$this->orderItemId}/unassign_variation";
	}


	/**
	 * @param int $orderItemId
	 */
	public function __construct(
		protected int $orderItemId,
	) {
	}
}
