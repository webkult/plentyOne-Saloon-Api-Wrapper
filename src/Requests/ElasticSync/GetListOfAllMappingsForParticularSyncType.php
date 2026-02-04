<?php

namespace PlentyOne\Api\Requests\ElasticSync;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get a list of all mappings for a particular sync type.
 *
 * Gets a list of all mappings for a particular sync type.
 */
class GetListOfAllMappingsForParticularSyncType extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/elastic-sync/sync/{$this->syncType}/matching/fields";
	}


	/**
	 * @param int $syncType
	 * @param string $syncType The sync type of the matching
	 */
	public function __construct(
		protected string $syncType,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['$syncType' => $this->syncType]);
	}
}
