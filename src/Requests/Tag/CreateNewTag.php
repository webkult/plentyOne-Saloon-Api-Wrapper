<?php

namespace PlentyOne\Api\Requests\Tag;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Create a new tag
 *
 * Creates a new tag.
 */
class CreateNewTag extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/rest/v2/tags";
	}


	public function __construct()
	{
	}
}
