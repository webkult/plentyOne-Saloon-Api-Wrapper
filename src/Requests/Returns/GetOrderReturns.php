<?php

namespace PlentyOne\Api\Requests\Returns;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get order returns
 *
 * Get Order returns specified by the request and the orderId.
 */
class GetOrderReturns extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/orders/{$this->orderId}/shipping/returns";
	}


	/**
	 * @param int $orderId The id of the order to search the orders returns
	 * @param null|string $orderType The order type to search for delivery or return orders
	 * @param null|int $page The page to get. The default page that will be returned is page 1.
	 * @param null|int $itemsPerPage The number of orders to be displayed per page. The default number of orders per page is 50.
	 * @param null|array $with Load additional relations for an order. Currently possible are:
	 *     <ul>
	 *     <li>'documents' = The document objects that are associated with the order returns.</li>
	 *     <li>'labels' = The base64 encoded labels that are associated with the order returns.</li>
	 *     </ul>
	 *     Example: <code>?with[]=documents&with[]=labels</code>
	 */
	public function __construct(
		protected int $orderId,
		protected ?string $orderType = null,
		protected ?int $page = null,
		protected ?int $itemsPerPage = null,
		protected ?array $with = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['orderType' => $this->orderType, 'page' => $this->page, 'itemsPerPage' => $this->itemsPerPage, 'with' => $this->with]);
	}
}
