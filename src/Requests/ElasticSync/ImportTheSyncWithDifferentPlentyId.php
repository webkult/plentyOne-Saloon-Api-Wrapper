<?php

namespace PlentyOne\Api\Requests\ElasticSync;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Import the sync with different plentyId.
 *
 * Imports the sync with different plentyId.
 */
class ImportTheSyncWithDifferentPlentyId extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/rest/elastic-sync/sync/import/file/public-url/different";
	}


	/**
	 * @param array $file The file data
	 */
	public function __construct(
		protected array $file,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['file' => $this->file]);
	}
}
