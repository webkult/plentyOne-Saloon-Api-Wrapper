<?php

namespace PlentyOne\Api\Requests\ElasticSync;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Save the CSV on S3.
 *
 * Saves the CSV on S3.
 */
class SaveTheCsvOnS3 extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/rest/elastic-sync/sync/import/file/public-url";
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
