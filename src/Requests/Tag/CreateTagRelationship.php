<?php

namespace PlentyOne\Api\Requests\Tag;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Create a tag relationship
 *
 * Creates a tag relationship. The ID of the tag, the type of the relation and a value must be
 * specified.
 */
class CreateTagRelationship extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/rest/v2/tags/relationships";
	}


	public function __construct()
	{
	}
}
