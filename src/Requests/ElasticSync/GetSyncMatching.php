<?php

namespace PlentyOne\Api\Requests\ElasticSync;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get a sync matching.
 *
 * Gets a sync matching. The ID of the sync matching must be specified.
 */
class GetSyncMatching extends Request
{
	protected Method $method = Method::GET;


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
