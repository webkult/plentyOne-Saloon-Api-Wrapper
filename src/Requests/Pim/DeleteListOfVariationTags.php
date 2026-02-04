<?php

namespace PlentyOne\Api\Requests\Pim;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Delete a list of variation tags
 *
 * Deletes a list of variation tags.
 */
class DeleteListOfVariationTags extends Request
{
	protected Method $method = Method::DELETE;


	public function resolveEndpoint(): string
	{
		return "/rest/pim/variations/tags";
	}


	public function __construct()
	{
	}
}
