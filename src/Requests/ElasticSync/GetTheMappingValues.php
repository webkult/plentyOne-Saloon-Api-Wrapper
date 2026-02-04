<?php

namespace PlentyOne\Api\Requests\ElasticSync;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get the mapping values.
 *
 * Gets the mapping values. Sync data type is required.
 */
class GetTheMappingValues extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/elastic-sync/mapping/values/{$this->syncType}";
	}


	/**
	 * @param int $syncType
	 * @param string $syncType The sync type
	 */
	public function __construct(
		protected string $syncType,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['sync_type' => $this->syncType]);
	}
}
