<?php

namespace PlentyOne\Api\Resource;

use PlentyOne\Api\Requests\Returns\AssignLabelToOrderReturn;
use PlentyOne\Api\Requests\Returns\CreateReturnOrder;
use PlentyOne\Api\Requests\Returns\DeleteReturnOrder;
use PlentyOne\Api\Requests\Returns\GetOrderReturns;
use PlentyOne\Api\Requests\Returns\UpdateReturnOrder;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class Returns extends BaseResource
{
	/**
	 * @param int $returnsId The id of the order returns to search for.
	 * @param array $with Load additional relations for an order. Currently possible are:
	 *     <ul>
	 *     <li>'documents' = The document objects that are associated with the order returns.</li>
	 *     <li>'labels' = The base64 encoded labels that are associated with the order returns.</li>
	 *     </ul>
	 *     Example: <code>?with[]=documents&with[]=labels</code>
	 */
	public function getOrderReturns(int $returnsId, ?array $with = null): Response
	{
		return $this->connector->send(new GetOrderReturns($returnsId, $with));
	}


	/**
	 * @param int $returnsId
	 * @param int $returnsId Return order ID
	 * @param int $orderId Order ID for the return order
	 * @param int $providerId Return provider ID
	 * @param string $externalNumber Returns package number
	 * @param string $base64label Label in base64 format
	 */
	public function updateReturnOrder(
		int $returnsId,
		?int $orderId = null,
		?int $providerId = null,
		?string $externalNumber = null,
		?string $base64label = null,
	): Response
	{
		return $this->connector->send(new UpdateReturnOrder($returnsId, $returnsId, $orderId, $providerId, $externalNumber, $base64label));
	}


	/**
	 * @param int $returnsId
	 * @param int $returnsId Return order ID
	 */
	public function deleteReturnOrder(int $returnsId): Response
	{
		return $this->connector->send(new DeleteReturnOrder($returnsId, $returnsId));
	}


	/**
	 * @todo Fix duplicated method name
	 * @param int $orderId The id of the order to search the orders returns
	 * @param string $orderType The order type to search for delivery or return orders
	 * @param int $page The page to get. The default page that will be returned is page 1.
	 * @param int $itemsPerPage The number of orders to be displayed per page. The default number of orders per page is 50.
	 * @param array $with Load additional relations for an order. Currently possible are:
	 *     <ul>
	 *     <li>'documents' = The document objects that are associated with the order returns.</li>
	 *     <li>'labels' = The base64 encoded labels that are associated with the order returns.</li>
	 *     </ul>
	 *     Example: <code>?with[]=documents&with[]=labels</code>
	 */
	public function getOrderReturnsDuplicate1(
		int $orderId,
		?string $orderType = null,
		?int $page = null,
		?int $itemsPerPage = null,
		?array $with = null,
	): Response
	{
		return $this->connector->send(new GetOrderReturns($orderId, $orderType, $page, $itemsPerPage, $with));
	}


	/**
	 * @param int $orderId
	 * @param int $orderId Order ID
	 * @param int $providerId Return provider ID
	 * @param string $externalNumber Returns package number
	 * @param string $base64label Label in base64 format
	 */
	public function createReturnOrder(
		int $orderId,
		int $providerId,
		string $externalNumber,
		?string $base64label = null,
	): Response
	{
		return $this->connector->send(new CreateReturnOrder($orderId, $orderId, $providerId, $externalNumber, $base64label));
	}


	/**
	 * @param int $returnsId The id of the order returns to be assigned.
	 * @param int $orderId The id of the order that the order returns has to be assigned to.
	 */
	public function assignLabelToOrderReturn(int $returnsId, int $orderId): Response
	{
		return $this->connector->send(new AssignLabelToOrderReturn($returnsId, $orderId));
	}
}
