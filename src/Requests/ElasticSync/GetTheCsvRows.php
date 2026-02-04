<?php

namespace PlentyOne\Api\Requests\ElasticSync;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get the csv rows.
 *
 * Gets the csv rows. Sync ID is required.
 */
class GetTheCsvRows extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/elastic-sync/mapping/csv-rows/{$this->syncId}";
	}


	/**
	 * @param int $syncId The id of the sync
	 */
	public function __construct(
		protected int $syncId,
	) {
	}
}
