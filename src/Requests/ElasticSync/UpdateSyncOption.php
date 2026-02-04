<?php

namespace PlentyOne\Api\Requests\ElasticSync;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Update a sync option.
 *
 * Updates a sync option. The ID of the sync must be specified.
 */
class UpdateSyncOption extends Request
{
	protected Method $method = Method::PUT;


	public function resolveEndpoint(): string
	{
		return "/rest/elastic-sync/sync/option/{$this->optionId}";
	}


	/**
	 * @param int $optionId
	 */
	public function __construct(
		protected int $optionId,
	) {
	}
}
