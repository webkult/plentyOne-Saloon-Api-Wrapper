<?php

namespace PlentyOne\Api\Requests\Order;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Change an order item of type "unassigned variation" to "variation".
 *
 * Change an order item of type "unassigned variation" to "variation". The ID of the order item and
 * variation ID must be specified.
 */
class ChangeOrderItemOfTypeUnassignedVariationToVariation extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/rest/warranties/items/{$this->orderItemId}/assign_variation";
	}


	/**
	 * @param int $orderItemId
	 */
	public function __construct(
		protected int $orderItemId,
	) {
	}
}
