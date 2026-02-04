<?php

namespace PlentyOne\Api\Requests\ElasticSync;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get an entity.
 *
 * Gets an entity by sync ID. The sync ID is required.
 */
class GetEntity extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/elastic-sync/sync/{$this->syncId}/matching/entity";
	}


	/**
	 * @param int $syncId The sync ID of the mapping
	 */
	public function __construct(
		protected int $syncId,
	) {
	}
}
