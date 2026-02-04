<?php

namespace PlentyOne\Api\Requests\Document;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Upload category documents
 *
 * Uploads documents to a category. The ID of the category must be specified.
 */
class UploadCategoryDocuments extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/rest/categories/{$this->categoryId}/documents";
	}


	/**
	 * @param int $categoryId The ID of the category
	 * @param array $documents The array with the category documents
	 * @param null|int $number The document number
	 * @param null|string $numberWithPrefix Number with prefix
	 * @param null|int $directoryId  The directory ID
	 * @param null|string $displayDate  The date displayed on the document
	 */
	public function __construct(
		protected int $categoryId,
		protected array $documents,
		protected ?int $number = null,
		protected ?string $numberWithPrefix = null,
		protected ?int $directoryId = null,
		protected ?string $displayDate = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter([
			'documents' => $this->documents,
			'number' => $this->number,
			'numberWithPrefix' => $this->numberWithPrefix,
			'directoryId' => $this->directoryId,
			'displayDate' => $this->displayDate,
		]);
	}
}
