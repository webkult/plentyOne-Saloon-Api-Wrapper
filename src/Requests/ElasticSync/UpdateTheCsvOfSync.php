<?php

namespace PlentyOne\Api\Requests\ElasticSync;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Update the Csv of a Sync.
 *
 * Update the Csv of a Sync. The ID of the sync must be specified.
 */
class UpdateTheCsvOfSync extends Request
{
	protected Method $method = Method::PUT;


	public function resolveEndpoint(): string
	{
		return "/rest/elastic-sync/sync/change-csv";
	}


	public function __construct()
	{
	}
}
