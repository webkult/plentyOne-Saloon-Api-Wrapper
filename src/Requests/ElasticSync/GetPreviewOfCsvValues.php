<?php

namespace PlentyOne\Api\Requests\ElasticSync;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get preview of csv values.
 *
 * Gets preview of csv values. The sync ID is required.
 */
class GetPreviewOfCsvValues extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/elastic-sync/sync/{$this->syncId}/preview-values";
	}


	/**
	 * @param int $syncId The id of the sync
	 */
	public function __construct(
		protected int $syncId,
	) {
	}
}
