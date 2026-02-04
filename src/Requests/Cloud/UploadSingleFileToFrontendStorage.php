<?php

namespace PlentyOne\Api\Requests\Cloud;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Upload a single file to frontend storage.
 *
 * If file is an image, generate a thumbnail and store dimensions in metadata.
 */
class UploadSingleFileToFrontendStorage extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/rest/storage/frontend/file";
	}


	/**
	 * @param string $key The key for the uploaded object.
	 * @param null|int $maxAge Number of seconds until the content of the file expires.
	 */
	public function __construct(
		protected string $key,
		protected ?int $maxAge = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['key' => $this->key, 'maxAge' => $this->maxAge]);
	}
}
