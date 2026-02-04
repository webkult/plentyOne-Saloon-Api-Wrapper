<?php

namespace PlentyOne\Api\Requests\Tag;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Delete tag relationships
 *
 * Deletes a list of tag relationships. The tag ID, tag type and relation value must be specified.
 */
class DeleteTagRelationships extends Request
{
	protected Method $method = Method::DELETE;


	public function resolveEndpoint(): string
	{
		return "/rest/tags/relationships";
	}


	public function __construct()
	{
	}
}
