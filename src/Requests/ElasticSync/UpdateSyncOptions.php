<?php

namespace PlentyOne\Api\Requests\ElasticSync;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Update sync options.
 *
 * Updates sync options. The ID of the sync must be specified.
 */
class UpdateSyncOptions extends Request
{
	protected Method $method = Method::PUT;


	public function resolveEndpoint(): string
	{
		return "/rest/elastic-sync/sync/{$this->syncId}/options";
	}


	/**
	 * @param int $syncId
	 */
	public function __construct(
		protected int $syncId,
	) {
	}
}
