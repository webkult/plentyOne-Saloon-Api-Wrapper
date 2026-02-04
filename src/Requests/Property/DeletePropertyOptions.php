<?php

namespace PlentyOne\Api\Requests\Property;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Delete property options
 *
 * Deletes property options.
 */
class DeletePropertyOptions extends Request
{
	protected Method $method = Method::DELETE;


	public function resolveEndpoint(): string
	{
		return "/rest/properties/multiple/options";
	}


	public function __construct()
	{
	}
}
