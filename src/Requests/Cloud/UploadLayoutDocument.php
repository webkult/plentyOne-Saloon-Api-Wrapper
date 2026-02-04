<?php

namespace PlentyOne\Api\Requests\Cloud;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Upload a layout document
 *
 * Uploads a layout document to storage. The storage key (i.e. file path) must be specified.
 */
class UploadLayoutDocument extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/rest/storage/layout";
	}


	/**
	 * @param string $key The storage key for the layout document to upload. Include the storage key (i.e. file path) in the request in a <code>key</code> field.
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
