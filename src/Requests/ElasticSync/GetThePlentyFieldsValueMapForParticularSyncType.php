<?php

namespace PlentyOne\Api\Requests\ElasticSync;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get the plenty fields value map for a particular sync type.
 *
 * Gets the plenty fields value map for a particular sync type. Sync type is required.
 */
class GetThePlentyFieldsValueMapForParticularSyncType extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/elastic-sync/mapping/fields/{$this->syncType}";
	}


	/**
	 * @param string $syncType The sync type
	 */
	public function __construct(
		protected string $syncType,
	) {
	}
}
