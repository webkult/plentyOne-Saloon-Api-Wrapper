<?php

namespace PlentyOne\Api\Requests\Newsletter;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * List newsletter entries
 *
 * Lists all newsletter entries.
 */
class ListNewsletterEntries extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/newsletters";
	}


	public function __construct()
	{
	}
}
