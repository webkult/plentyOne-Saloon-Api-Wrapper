<?php

namespace PlentyOne\Api\Requests\ElasticSync;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Update a sync mapping row.
 *
 * Updates a sync mapping row. The ID of the sync mapping row must be specified.
 */
class UpdateSyncMappingRow extends Request
{
	protected Method $method = Method::PUT;


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
