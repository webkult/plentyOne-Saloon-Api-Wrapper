<?php

namespace PlentyOne\Api\Requests\Document;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get status of a document
 *
 * Get status of a document. The ID of the document must be specified.
 */
class GetStatusOfDocument extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/documents/{$this->documentId}/status";
	}


	/**
	 * @param int $documentId
	 */
	public function __construct(
		protected int $documentId,
	) {
	}
}
