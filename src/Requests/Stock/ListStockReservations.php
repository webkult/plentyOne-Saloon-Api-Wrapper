<?php

namespace PlentyOne\Api\Requests\Stock;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * List stock reservations
 *
 * Lists stock reservations as a paginated result
 */
class ListStockReservations extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/stock/reservations";
	}


	public function __construct()
	{
	}
}
