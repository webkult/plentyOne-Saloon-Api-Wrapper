<?php

namespace PlentyOne\Api\Requests\Newsletter;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Delete recipients
 *
 * Deletes a recipients.
 */
class DeleteRecipients extends Request
{
	protected Method $method = Method::DELETE;


	public function resolveEndpoint(): string
	{
		return "/rest/newsletters/recipients";
	}


	public function __construct()
	{
	}
}
