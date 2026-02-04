<?php

namespace PlentyOne\Api\Requests\Bi;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get a raw data file from the storage
 *
 * Get a raw data file from the storage, the storage path of the file must be specified.
 */
class GetRawDataFileFromTheStorage extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/reports/raw-data/file";
	}


	/**
	 * @param string $path The raw data file path
	 */
	public function __construct(
		protected string $path,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['path' => $this->path]);
	}
}
