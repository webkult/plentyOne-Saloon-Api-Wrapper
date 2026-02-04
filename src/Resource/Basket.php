<?php

namespace PlentyOne\Api\Resource;

use PlentyOne\Api\Requests\Basket\AddItemToBasket;
use PlentyOne\Api\Requests\Basket\FindBasketItemByItId;
use PlentyOne\Api\Requests\Basket\GetBasket;
use PlentyOne\Api\Requests\Basket\ListBasketItems;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class Basket extends BaseResource
{
	public function getBasket(): Response
	{
		return $this->connector->send(new GetBasket());
	}


	public function listBasketItems(): Response
	{
		return $this->connector->send(new ListBasketItems());
	}


	public function addItemToBasket(): Response
	{
		return $this->connector->send(new AddItemToBasket());
	}


	/**
	 * @param int $id
	 */
	public function findBasketItemByItId(int $id): Response
	{
		return $this->connector->send(new FindBasketItemByItId($id));
	}
}
