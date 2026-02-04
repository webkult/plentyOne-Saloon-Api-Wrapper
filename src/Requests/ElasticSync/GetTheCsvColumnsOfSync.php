<?php

namespace PlentyOne\Api\Requests\ElasticSync;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get the csv columns of a sync.
 *
 * Gets the csv columns of a sync. Sync ID is required.
 */
class GetTheCsvColumnsOfSync extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/elastic-sync/mapping/map/csv-columns/{$this->syncId}";
	}


	/**
	 * @param int $syncId The sync id of the mapping
	 */
	public function __construct(
		protected int $syncId,
	) {
	}
}
