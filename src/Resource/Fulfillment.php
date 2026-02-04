<?php

namespace PlentyOne\Api\Resource;

use PlentyOne\Api\Requests\Fulfillment\CreateTrolleyTag;
use PlentyOne\Api\Requests\Fulfillment\DeleteTrolleyTag;
use PlentyOne\Api\Requests\Fulfillment\ExecutePickListAction;
use PlentyOne\Api\Requests\Fulfillment\GetAllPickListItems;
use PlentyOne\Api\Requests\Fulfillment\GetAllPickLists;
use PlentyOne\Api\Requests\Fulfillment\GetPickList;
use PlentyOne\Api\Requests\Fulfillment\GetPickListItem;
use PlentyOne\Api\Requests\Fulfillment\SetStateOfPickListItem;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class Fulfillment extends BaseResource
{
	public function getAllPickLists(): Response
	{
		return $this->connector->send(new GetAllPickLists());
	}


	public function getAllPickListItems(): Response
	{
		return $this->connector->send(new GetAllPickListItems());
	}


	/**
	 * @param int $pickingOrderItemId The PickingOrderItemId
	 */
	public function getPickListItem(int $pickingOrderItemId): Response
	{
		return $this->connector->send(new GetPickListItem($pickingOrderItemId));
	}


	/**
	 * @param int $pickingOrderItemId The pick list item id
	 * @param string $state The state
	 */
	public function setStateOfPickListItem(int $pickingOrderItemId, string $state): Response
	{
		return $this->connector->send(new SetStateOfPickListItem($pickingOrderItemId, $state));
	}


	public function createTrolleyTag(): Response
	{
		return $this->connector->send(new CreateTrolleyTag());
	}


	/**
	 * @param int $trolleyTag
	 */
	public function getPickList(int $trolleyTag): Response
	{
		return $this->connector->send(new GetPickList($trolleyTag));
	}


	/**
	 * @param string $trolleyTag The trolley tag for the pick list
	 */
	public function deleteTrolleyTag(string $trolleyTag): Response
	{
		return $this->connector->send(new DeleteTrolleyTag($trolleyTag));
	}


	/**
	 * @todo Fix duplicated method name
	 * @param int $id
	 */
	public function getPickListDuplicate1(int $id): Response
	{
		return $this->connector->send(new GetPickList($id));
	}


	/**
	 * @param int $id The pick list ID
	 * @param string $action The action to execute (start, continue, reopen, close, pause)
	 */
	public function executePickListAction(int $id, string $action): Response
	{
		return $this->connector->send(new ExecutePickListAction($id, $action));
	}


	/**
	 * @todo Fix duplicated method name
	 * @param int $pickingOrderId
	 */
	public function deleteTrolleyTagDuplicate2(int $pickingOrderId): Response
	{
		return $this->connector->send(new DeleteTrolleyTag($pickingOrderId));
	}
}
