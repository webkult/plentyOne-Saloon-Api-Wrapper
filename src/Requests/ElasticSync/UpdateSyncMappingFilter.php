<?php

namespace PlentyOne\Api\Requests\ElasticSync;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Update a sync mapping filter.
 *
 * Updates a sync mapping filter. The ID of the sync mapping must be specified.
 */
class UpdateSyncMappingFilter extends Request
{
	protected Method $method = Method::PUT;


	public function resolveEndpoint(): string
	{
		return "/rest/elastic-sync/sync/mapping/filter/{$this->filterId}";
	}


	/**
	 * @param int $filterId
	 */
	public function __construct(
		protected int $filterId,
	) {
	}
}
