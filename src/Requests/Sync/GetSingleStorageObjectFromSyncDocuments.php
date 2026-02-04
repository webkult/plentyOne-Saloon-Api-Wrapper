<?php

namespace PlentyOne\Api\Requests\Sync;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get a single storage object from sync documents
 *
 * Gets a single storage object from sync documents
 */
class GetSingleStorageObjectFromSyncDocuments extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/elastic-sync/document";
	}


	/**
	 * @param string $key The storage key of the object to get from sync documents.
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
