<?php

namespace PlentyOne\Api\Requests\Cloud;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get file information
 *
 * Get file information for a single object in frontend storage. Append public cloudfront url to
 * retrieved object.
 */
class GetFileInformation extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/storage/frontend/file";
	}


	/**
	 * @param string $key The key of the object to get information about.
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
