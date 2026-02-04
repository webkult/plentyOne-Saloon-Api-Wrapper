<?php

namespace PlentyOne\Api\Requests\Document;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Generate a preview of a document
 *
 * Generates a preview of a document. The type of the preview must be specified.
 */
class GeneratePreviewOfDocument extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/rest/documents/preview/generate/{$this->previewType}";
	}


	/**
	 * @param int $previewType
	 */
	public function __construct(
		protected int $previewType,
	) {
	}
}
