<?php

namespace PlentyOne\Api\Requests\Order;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Book an order item in
 *
 * Books an order item in. The ID of the order item must be specified.
 */
class BookOrderItemIn extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/rest/orders/items/{$this->orderItemId}/booking";
	}


	/**
	 * @param int $orderItemId The ID of the order item.
	 * @param null|string $deliveryNoteNumber If desired, set the delivery note number provided by the supplier.
	 */
	public function __construct(
		protected int $orderItemId,
		protected ?string $deliveryNoteNumber = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['deliveryNoteNumber' => $this->deliveryNoteNumber]);
	}
}
