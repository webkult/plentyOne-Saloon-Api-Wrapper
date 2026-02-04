<?php

namespace PlentyOne\Api\Requests\Document;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Download category documents
 *
 * Downloads the documents of a category as a zip file. The ID of the category must be specified.
 */
class DownloadCategoryDocuments extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/categories/{$this->categoryId}/documents/downloads";
	}


	/**
	 * @param int $categoryId The ID of the category
	 */
	public function __construct(
		protected int $categoryId,
	) {
	}
}
