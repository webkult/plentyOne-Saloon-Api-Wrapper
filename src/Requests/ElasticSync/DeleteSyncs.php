<?php

namespace PlentyOne\Api\Requests\ElasticSync;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Delete syncs.
 *
 * Deletes syncs. The IDs of the syncs must be specified.
 */
class DeleteSyncs extends Request
{
	protected Method $method = Method::DELETE;


	public function resolveEndpoint(): string
	{
		return "/rest/elastic-sync/syncs";
	}


	public function __construct()
	{
	}
}
