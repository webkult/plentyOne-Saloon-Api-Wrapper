<?php

namespace PlentyOne\Api\Requests\Order;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * List order item transactions
 *
 * Lists transactions for an order item. Transactions are order item movements. These are incoming and
 * outgoing items. The ID of the order item must be specified.
 */
class ListOrderItemTransactions extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/orders/items/{$this->orderItemId}/transactions";
	}


	/**
	 * @param int $orderItemId The ID of the order item
	 * @param null|array $columns The properties to be loaded
	 * @param null|array $with Load additional relations for a transaction. Currently possible are 'orderItem' and 'warehouseLocation'.
	 */
	public function __construct(
		protected int $orderItemId,
		protected ?array $columns = null,
		protected ?array $with = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['columns' => $this->columns, 'with' => $this->with]);
	}
}
