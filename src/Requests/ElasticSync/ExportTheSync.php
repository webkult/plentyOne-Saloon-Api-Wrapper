<?php

namespace PlentyOne\Api\Requests\ElasticSync;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Export the sync.
 *
 * Exports the sync. The sync ID is required.
 */
class ExportTheSync extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/elastic-sync/syncs/export/{$this->syncId}";
	}


	/**
	 * @param int $syncId
	 * @param int $syncIds The ID of the sync
	 */
	public function __construct(
		protected int $syncId,
		protected int $syncIds,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['syncIds' => $this->syncIds]);
	}
}
