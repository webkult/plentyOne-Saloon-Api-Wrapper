<?php

namespace PlentyOne\Api\Requests\Document;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Download the content of a preview document
 *
 * Download the content of a preview document. The hash of the document must be specified.
 */
class DownloadTheContentOfPreviewDocument extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/documents/preview/{$this->documentHash}";
	}


	/**
	 * @param int $documentHash
	 */
	public function __construct(
		protected int $documentHash,
	) {
	}
}
