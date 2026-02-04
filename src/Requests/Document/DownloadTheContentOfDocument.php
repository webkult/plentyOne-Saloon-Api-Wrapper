<?php

namespace PlentyOne\Api\Requests\Document;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Download the content of a document
 *
 * Downloads the content of a document. The ID of the document must be specified.
 */
class DownloadTheContentOfDocument extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/documents/{$this->documentId}";
	}


	/**
	 * @param int $documentId The ID of the document
	 */
	public function __construct(
		protected int $documentId,
	) {
	}
}
