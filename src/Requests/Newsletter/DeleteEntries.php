<?php

namespace PlentyOne\Api\Requests\Newsletter;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Delete entries
 *
 * Deletes all entries.
 */
class DeleteEntries extends Request
{
	protected Method $method = Method::DELETE;


	public function resolveEndpoint(): string
	{
		return "/rest/newsletters";
	}


	public function __construct()
	{
	}
}
