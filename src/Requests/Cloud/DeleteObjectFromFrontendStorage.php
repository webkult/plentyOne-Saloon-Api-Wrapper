<?php

namespace PlentyOne\Api\Requests\Cloud;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Delete object from frontend storage
 *
 * Remove a single object from frontend storage.
 */
class DeleteObjectFromFrontendStorage extends Request
{
	protected Method $method = Method::DELETE;


	public function resolveEndpoint(): string
	{
		return "/rest/storage/frontend/file";
	}


	/**
	 * @param string $key The key of the object to delete.
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
