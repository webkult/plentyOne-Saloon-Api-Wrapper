<?php

namespace PlentyOne\Api\Requests\ElasticSync;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Create sync mapping filters.
 *
 * Creates sync mapping filters.
 */
class CreateSyncMappingFilters extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/rest/elastic-sync/sync/mapping/{$this->mappingId}/filters";
	}


	/**
	 * @param int $mappingId
	 */
	public function __construct(
		protected int $mappingId,
	) {
	}
}
