<?php

namespace PlentyOne\Api\Requests\Tag;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Update up to 50 tags
 *
 * Updates up to 50 tags. The IDs of the tags must be specified.
 */
class UpdateUpTo50Tags extends Request
{
	protected Method $method = Method::PUT;


	public function resolveEndpoint(): string
	{
		return "/rest/tags/bulk";
	}


	public function __construct()
	{
	}
}
