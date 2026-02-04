<?php

namespace PlentyOne\Api\Requests\Messenger;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Returns a list with all configured inboxes
 *
 * Returns a list with all configured inboxes (only active ones)
 */
class ReturnsListWithAllConfiguredInboxes extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/conversations/inboxes";
	}


	public function __construct()
	{
	}
}
