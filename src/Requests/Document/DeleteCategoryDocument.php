<?php

namespace PlentyOne\Api\Requests\Document;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Delete a category document.
 *
 * Deletes a category document. The ID of the document must be specified.
 */
class DeleteCategoryDocument extends Request
{
	protected Method $method = Method::DELETE;


	public function resolveEndpoint(): string
	{
		return "/rest/categories/{$this->categoryId}/documents/{$this->documentId}";
	}


	/**
	 * @param int $categoryId
	 * @param int $documentId
	 */
	public function __construct(
		protected int $categoryId,
		protected int $documentId,
	) {
	}
}
