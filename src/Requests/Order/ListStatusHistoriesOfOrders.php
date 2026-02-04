<?php

namespace PlentyOne\Api\Requests\Order;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * List status histories of orders
 *
 * Lists the status histories of all orders. The result can be limited to an order specified by an ID,
 * a status with a particular ID, a period of time or a user specified by the user ID.
 */
class ListStatusHistoriesOfOrders extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/orders/status-history";
	}


	/**
	 * @param null|int $orderId The ID of the order
	 * @param null|float|int $statusId The ID of the status
	 * @param null|string $createdAtFrom Set a start date to get status history entries beginning with this date
	 * @param null|string $createdAtTo Set an end date to get status history entries up to this date
	 * @param null|string $userId The ID of the user
	 */
	public function __construct(
		protected ?int $orderId = null,
		protected float|int|null $statusId = null,
		protected ?string $createdAtFrom = null,
		protected ?string $createdAtTo = null,
		protected ?string $userId = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter([
			'orderId' => $this->orderId,
			'statusId' => $this->statusId,
			'createdAtFrom' => $this->createdAtFrom,
			'createdAtTo' => $this->createdAtTo,
			'userId' => $this->userId,
		]);
	}
}
