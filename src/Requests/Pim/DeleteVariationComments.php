<?php

namespace PlentyOne\Api\Requests\Pim;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Delete variation comments
 *
 * Deletes a list of variation comments.
 */
class DeleteVariationComments extends Request
{
	protected Method $method = Method::DELETE;


	public function resolveEndpoint(): string
	{
		return "/rest/pim/variations/comments";
	}


	public function __construct()
	{
	}
}
