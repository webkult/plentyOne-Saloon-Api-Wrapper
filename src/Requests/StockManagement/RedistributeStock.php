<?php

namespace PlentyOne\Api\Requests\StockManagement;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Redistribute stock
 *
 * Redistributes stock of one storage location among one or more storage locations.
 * Note: If variation
 * has Batch or BBD, they need to be included in the redistribution object.
 */
class RedistributeStock extends Request
{
	protected Method $method = Method::PUT;


	public function resolveEndpoint(): string
	{
		return "/rest/stockmanagement/stock/redistribute";
	}


	public function __construct()
	{
	}
}
