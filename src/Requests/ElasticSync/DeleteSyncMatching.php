<?php

namespace PlentyOne\Api\Requests\ElasticSync;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Delete a sync matching.
 *
 * Deletes a sync matching. The ID of the sync matching must be specified.
 */
class DeleteSyncMatching extends Request
{
	protected Method $method = Method::DELETE;


	public function resolveEndpoint(): string
	{
		return "/rest/elastic-sync/sync/matching/{$this->matchingId}";
	}


	/**
	 * @param int $matchingId
	 */
	public function __construct(
		protected int $matchingId,
	) {
	}
}
