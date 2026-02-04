<?php

namespace PlentyOne\Api\Requests\ElasticSync;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get all Syncs
 *
 * Get all Syncs. Filters like id, name, sync type and interval can be provided.
 */
class GetAllSyncs extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/elastic-sync/syncs";
	}


	public function __construct()
	{
	}
}
