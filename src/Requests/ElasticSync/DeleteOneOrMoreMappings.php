<?php

namespace PlentyOne\Api\Requests\ElasticSync;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Delete one or more mappings.
 *
 * Deletes one or multiple mappings. The mapping ID must be specified.
 */
class DeleteOneOrMoreMappings extends Request
{
	protected Method $method = Method::DELETE;


	public function resolveEndpoint(): string
	{
		return "/rest/elastic-sync/sync/mappings";
	}


	public function __construct()
	{
	}
}
