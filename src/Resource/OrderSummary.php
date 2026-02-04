<?php

namespace PlentyOne\Api\Resource;

use PlentyOne\Api\Requests\OrderSummary\CreateOrderSummary;
use PlentyOne\Api\Requests\OrderSummary\DeleteOrderSummary;
use PlentyOne\Api\Requests\OrderSummary\GetOrderSummaryByAddressId;
use PlentyOne\Api\Requests\OrderSummary\GetOrderSummaryByContactId;
use PlentyOne\Api\Requests\OrderSummary\GetOrderSummaryByOrderSummaryId;
use PlentyOne\Api\Requests\OrderSummary\ListOrderSummaries;
use PlentyOne\Api\Requests\OrderSummary\ListUnpaidOrderSummaries;
use PlentyOne\Api\Requests\OrderSummary\UpdateOrderSummary;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class OrderSummary extends BaseResource
{
	public function listOrderSummaries(): Response
	{
		return $this->connector->send(new ListOrderSummaries());
	}


	public function createOrderSummary(): Response
	{
		return $this->connector->send(new CreateOrderSummary());
	}


	/**
	 * @param int $contactId
	 */
	public function getOrderSummaryByContactId(int $contactId): Response
	{
		return $this->connector->send(new GetOrderSummaryByContactId($contactId));
	}


	/**
	 * @param int $addressId
	 */
	public function getOrderSummaryByAddressId(int $addressId): Response
	{
		return $this->connector->send(new GetOrderSummaryByAddressId($addressId));
	}


	public function listUnpaidOrderSummaries(): Response
	{
		return $this->connector->send(new ListUnpaidOrderSummaries());
	}


	/**
	 * @param int $orderSummaryId
	 */
	public function getOrderSummaryByOrderSummaryId(int $orderSummaryId): Response
	{
		return $this->connector->send(new GetOrderSummaryByOrderSummaryId($orderSummaryId));
	}


	/**
	 * @param int $orderSummaryId
	 */
	public function updateOrderSummary(int $orderSummaryId): Response
	{
		return $this->connector->send(new UpdateOrderSummary($orderSummaryId));
	}


	/**
	 * @param int $orderSummaryId
	 */
	public function deleteOrderSummary(int $orderSummaryId): Response
	{
		return $this->connector->send(new DeleteOrderSummary($orderSummaryId));
	}
}
