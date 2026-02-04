<?php

namespace PlentyOne\Api\Requests\ElasticSync;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Update a sync matching.
 *
 * Updates a sync matching. The ID of the sync matching must be specified.
 */
class UpdateSyncMatching extends Request
{
	protected Method $method = Method::PUT;


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
