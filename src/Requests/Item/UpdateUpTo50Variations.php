<?php

namespace PlentyOne\Api\Requests\Item;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Update up to 50 variations
 *
 * Updates up to 50 variations. The ID of the variation must be specified.
 */
class UpdateUpTo50Variations extends Request
{
	protected Method $method = Method::PUT;


	public function resolveEndpoint(): string
	{
		return "/rest/items/variations";
	}


	public function __construct()
	{
	}
}
