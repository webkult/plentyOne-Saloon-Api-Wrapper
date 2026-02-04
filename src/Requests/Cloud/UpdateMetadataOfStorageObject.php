<?php

namespace PlentyOne\Api\Requests\Cloud;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Update metadata of storage object
 *
 * Update metadata of an storage object.
 */
class UpdateMetadataOfStorageObject extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/rest/storage/frontend/file/metadata";
	}


	/**
	 * @param string $key The key of the object to update metadata for.
	 * @param array $metadata The metadata to assign to storage object
	 */
	public function __construct(
		protected string $key,
		protected array $metadata,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['key' => $this->key, 'metadata' => $this->metadata]);
	}
}
