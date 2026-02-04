<?php

namespace PlentyOne\Api\Requests\Sync;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get a temporary url for a single document
 *
 * Gets a temporary url for a single document
 */
class GetTemporaryUrlForSingleDocument extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/elastic-sync/document/url";
	}


	/**
	 * @param string $key The storage key to get temporary url for
	 */
	public function __construct(
		protected string $key,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['key' => $this->key]);
	}
}
