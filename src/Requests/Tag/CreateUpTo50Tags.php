<?php

namespace PlentyOne\Api\Requests\Tag;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Create up to 50 tags
 *
 * Creates up to 50 tags. The IDs of the tags must be specified.
 */
class CreateUpTo50Tags extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/rest/tags/bulk";
	}


	public function __construct()
	{
	}
}
