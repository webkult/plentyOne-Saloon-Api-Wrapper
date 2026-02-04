<?php

namespace PlentyOne\Api\Requests\Document;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * List documents of a category
 *
 * Lists the documents of a category. The ID of the category must be specified.
 */
class ListDocumentsOfCategory extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/categories/{$this->categoryId}/documents";
	}


	/**
	 * @param int $categoryId The ID of the category
	 */
	public function __construct(
		protected int $categoryId,
	) {
	}
}
