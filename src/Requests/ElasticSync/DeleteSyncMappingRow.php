<?php

namespace PlentyOne\Api\Requests\ElasticSync;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Delete a sync mapping row.
 *
 * Deletes a sync mapping row. The ID of the sync mapping row must be specified.
 */
class DeleteSyncMappingRow extends Request
{
	protected Method $method = Method::DELETE;


	public function resolveEndpoint(): string
	{
		return "/rest/elastic-sync/sync/mapping/row/{$this->rowId}";
	}


	/**
	 * @param int $rowId
	 */
	public function __construct(
		protected int $rowId,
	) {
	}
}
