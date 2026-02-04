<?php

namespace PlentyOne\Api\Requests\Order;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Book an order in
 *
 * Books an order in, e.g. an order of the type reorder. The ID of the order must be specified.
 */
class BookOrderIn extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/rest/reorders/{$this->orderId}/book";
	}


	/**
	 * @param int $orderId The ID of the order.
	 * @param null|string $deliveryNoteNumber If desired, set the delivery note number provided by the supplier.
	 */
	public function __construct(
		protected int $orderId,
		protected ?string $deliveryNoteNumber = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['deliveryNoteNumber' => $this->deliveryNoteNumber]);
	}
}
