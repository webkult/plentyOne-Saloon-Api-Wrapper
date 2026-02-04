<?php

namespace PlentyOne\Api\Requests\Cloud;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get metadata for storage object
 *
 * Get assigned metadata for a single storage object
 */
class GetMetadataForStorageObject extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/storage/frontend/file/metadata";
	}


	/**
	 * @param string $key The key of the object to get metadata for.
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
