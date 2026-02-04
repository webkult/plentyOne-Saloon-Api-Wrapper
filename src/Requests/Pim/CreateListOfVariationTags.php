<?php

namespace PlentyOne\Api\Requests\Pim;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Create a list of variation tags
 *
 * Creates a list of variation tags.
 */
class CreateListOfVariationTags extends Request
{
	protected Method $method = Method::PUT;


	public function resolveEndpoint(): string
	{
		return "/rest/pim/variations/tags";
	}


	public function __construct()
	{
	}
}
