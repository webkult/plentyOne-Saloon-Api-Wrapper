<?php

namespace PlentyOne\Api\Requests\Order;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Search order item transactions
 *
 * Searches for order item transactions by filter parameters.
 */
class SearchOrderItemTransactions extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/orders/items/transactions";
	}


	/**
	 * @param null|int $page The page to get. The default page that will be returned is page 1.
	 * @param null|int $itemsPerPage The number of orders to be displayed per page. The default number of orders per page is 50.
	 * @param null|array $columns Specifies the properties of the order item transactions to be loaded.
	 * @param null|array $with Loads additional relations of the order item transactions. The available relations are 'orderItem' and 'warehouseLocation'.
	 * @param null|string $sortBy Sort search result according to createdAt, updatedAt, orderItemId, receiptId or quantity. The default value is orderItemId.
	 * @param null|string $sortOrder Sort direction desc or asc. The default value is asc.
	 * @param null|int $orderItemId The ID of the order item
	 * @param null|int $orderId The ID of the order
	 * @param null|string $direction The direction of the order item transactions
	 * @param null|string $status The status of the order item transactions ('in' for incoming or 'out' for outgoing)
	 * @param null|bool $isBooked Returns all booked order item transactions.
	 */
	public function __construct(
		protected ?int $page = null,
		protected ?int $itemsPerPage = null,
		protected ?array $columns = null,
		protected ?array $with = null,
		protected ?string $sortBy = null,
		protected ?string $sortOrder = null,
		protected ?int $orderItemId = null,
		protected ?int $orderId = null,
		protected ?string $direction = null,
		protected ?string $status = null,
		protected ?bool $isBooked = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter([
			'page' => $this->page,
			'itemsPerPage' => $this->itemsPerPage,
			'columns' => $this->columns,
			'with' => $this->with,
			'sortBy' => $this->sortBy,
			'sortOrder' => $this->sortOrder,
			'orderItemId' => $this->orderItemId,
			'orderId' => $this->orderId,
			'direction' => $this->direction,
			'status' => $this->status,
			'isBooked' => $this->isBooked,
		]);
	}
}
