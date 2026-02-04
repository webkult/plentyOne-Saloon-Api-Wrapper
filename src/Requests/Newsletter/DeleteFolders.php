<?php

namespace PlentyOne\Api\Requests\Newsletter;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Delete folders
 *
 * Deletes all folders.
 */
class DeleteFolders extends Request
{
	protected Method $method = Method::DELETE;


	public function resolveEndpoint(): string
	{
		return "/rest/newsletters/folders";
	}


	public function __construct()
	{
	}
}
