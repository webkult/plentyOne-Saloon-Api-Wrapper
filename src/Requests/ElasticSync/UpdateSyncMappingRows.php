<?php

namespace PlentyOne\Api\Requests\ElasticSync;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Update sync mapping rows.
 *
 * Updates sync mapping rows. The ID of the sync mapping row must be specified.
 */
class UpdateSyncMappingRows extends Request
{
	protected Method $method = Method::PUT;


	public function resolveEndpoint(): string
	{
		return "/rest/elastic-sync/sync/mapping/{$this->mappingId}/rows";
	}


	/**
	 * @param int $mappingId
	 */
	public function __construct(
		protected int $mappingId,
	) {
	}
}
