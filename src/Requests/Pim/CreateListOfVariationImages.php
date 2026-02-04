<?php

namespace PlentyOne\Api\Requests\Pim;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Create a list of variation images
 *
 * Creates a list of variation images.
 */
class CreateListOfVariationImages extends Request
{
	protected Method $method = Method::PUT;


	public function resolveEndpoint(): string
	{
		return "/rest/pim/variations/images";
	}


	public function __construct()
	{
	}
}
