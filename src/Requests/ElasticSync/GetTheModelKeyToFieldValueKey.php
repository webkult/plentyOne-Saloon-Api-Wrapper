<?php

namespace PlentyOne\Api\Requests\ElasticSync;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get the model key to field value key.
 *
 * Gets the model key to field value key. Sync type is required.
 */
class GetTheModelKeyToFieldValueKey extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/elastic-sync/mapping/model/{$this->syncType}";
	}


	/**
	 * @param string $syncType The sync type
	 */
	public function __construct(
		protected string $syncType,
	) {
	}
}
