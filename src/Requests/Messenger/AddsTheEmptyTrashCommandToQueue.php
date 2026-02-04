<?php

namespace PlentyOne\Api\Requests\Messenger;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Adds the empty trash command to a queue
 *
 * Adds the empty trash command to a queue. Emptying of the trash will happen sometime in the future,
 * when the first worker is available to process the queue
 */
class AddsTheEmptyTrashCommandToQueue extends Request
{
	protected Method $method = Method::DELETE;


	public function resolveEndpoint(): string
	{
		return "/rest/conversations/emptyTrash";
	}


	public function __construct()
	{
	}
}
