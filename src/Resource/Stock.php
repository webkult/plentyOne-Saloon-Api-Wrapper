<?php

namespace PlentyOne\Api\Resource;

use PlentyOne\Api\Requests\Stock\ListStockReservations;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class Stock extends BaseResource
{
	public function listStockReservations(): Response
	{
		return $this->connector->send(new ListStockReservations());
	}
}
