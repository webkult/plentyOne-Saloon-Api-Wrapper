<?php

namespace PlentyOne\Api\Requests\Market;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * List fitments
 *
 * Lists fitments.
 */
class ListFitments extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/markets/ebay/parts-fitments";
	}


	public function __construct()
	{
	}
}
