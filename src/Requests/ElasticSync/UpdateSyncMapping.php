<?php

namespace PlentyOne\Api\Requests\ElasticSync;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Update a sync mapping.
 *
 * Updates a sync mapping. The ID of the sync mapping must be specified.
 */
class UpdateSyncMapping extends Request
{
	protected Method $method = Method::PUT;


	public function resolveEndpoint(): string
	{
		return "/rest/elastic-sync/sync/mapping/{$this->mappingId}";
	}


	/**
	 * @param int $mappingId
	 */
	public function __construct(
		protected int $mappingId,
	) {
	}
}
