<?php

namespace PlentyOne\Api\Requests\ElasticSync;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Delete a sync mapping.
 *
 * Deletes a sync mapping. The ID of the sync mapping must be specified.
 */
class DeleteSyncMapping extends Request
{
	protected Method $method = Method::DELETE;


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
