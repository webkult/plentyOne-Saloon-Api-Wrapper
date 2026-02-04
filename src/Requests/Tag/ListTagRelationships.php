<?php

namespace PlentyOne\Api\Requests\Tag;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * List tag relationships
 *
 * Lists all tag relationships. The result can be filtered.
 *
 * tagId
 * type
 * value
 */
class ListTagRelationships extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/v2/tags/relationships";
	}


	public function __construct()
	{
	}
}
