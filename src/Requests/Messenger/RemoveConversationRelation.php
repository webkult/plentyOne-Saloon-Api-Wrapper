<?php

namespace PlentyOne\Api\Requests\Messenger;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Remove conversation relation
 *
 * Remove conversation relation
 */
class RemoveConversationRelation extends Request
{
	protected Method $method = Method::DELETE;


	public function resolveEndpoint(): string
	{
		return "/rest/conversations/removeRelation";
	}


	public function __construct()
	{
	}
}
