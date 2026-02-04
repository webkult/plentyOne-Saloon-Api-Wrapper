<?php

namespace PlentyOne\Api\Requests\Fulfillment;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Set state of a pick list item
 *
 * Set state of a pick list item specified by its pickingOrderItemId.
 */
class SetStateOfPickListItem extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/rest/fulfillment/picklist/picking_order_item/{$this->pickingOrderItemId}/status";
	}


	/**
	 * @param int $pickingOrderItemId The pick list item id
	 * @param string $state The state
	 */
	public function __construct(
		protected int $pickingOrderItemId,
		protected string $state,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['state' => $this->state]);
	}
}
