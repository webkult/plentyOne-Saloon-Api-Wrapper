<?php

namespace PlentyOne\Api\Requests\ElasticSync;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Export the syncs.
 *
 * Exports the syncs. The sync ID is required.
 */
class ExportTheSyncs extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/rest/elastic-sync/syncs/export";
	}


	/**
	 * @param int $syncIds The ID of the sync
	 */
	public function __construct(
		protected int $syncIds,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['syncIds' => $this->syncIds]);
	}
}
