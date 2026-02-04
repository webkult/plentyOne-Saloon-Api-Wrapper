<?php

namespace PlentyOne\Api\Requests\Pim;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Delete variation images
 *
 * Deletes a list of variation images.
 */
class DeleteVariationImages extends Request
{
	protected Method $method = Method::DELETE;


	public function resolveEndpoint(): string
	{
		return "/rest/pim/variations/images";
	}


	public function __construct()
	{
	}
}
