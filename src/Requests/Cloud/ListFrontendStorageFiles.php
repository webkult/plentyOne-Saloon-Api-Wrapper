<?php

namespace PlentyOne\Api\Requests\Cloud;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * List frontend storage files
 *
 * List files from frontend storage. Append public cloudfront url to each retrieved object.
 */
class ListFrontendStorageFiles extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/storage/frontend/files";
	}


	/**
	 * @param null|string $continuationToken The <code>continuationToken</code> of a previous request to continue listing objects with.
	 */
	public function __construct(
		protected ?string $continuationToken = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['continuationToken' => $this->continuationToken]);
	}
}
