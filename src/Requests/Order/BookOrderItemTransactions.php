<?php

namespace PlentyOne\Api\Requests\Order;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Book order item transactions
 *
 * Books order item transactions. Transactions are order item movements. These are incoming and
 * outgoing items. The IDs of the order item transactions must be specified. To get the transactions
 * first, use the <a href="#/Order/get_rest_orders_items_transactions">Search transactions</a> call.
 */
class BookOrderItemTransactions extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/rest/orders/items/transactions/booking";
	}


	/**
	 * @param array $transactionIds The IDs of the order item transactions.
	 * @param null|string $deliveryNoteNumber If desired, set a delivery note number. The delivery note number has to match the type of order item transaction. For incoming items, set an external delivery note number. For outgoing items, set an external or an internal delivery note number.
	 */
	public function __construct(
		protected array $transactionIds,
		protected ?string $deliveryNoteNumber = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['transactionIds' => $this->transactionIds, 'deliveryNoteNumber' => $this->deliveryNoteNumber]);
	}
}
