<?php

namespace PlentyOne\Api\Requests\Property;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Save property relation file to S3
 *
 * Saves property relation file to S3.
 */
class SavePropertyRelationFileToS3 extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/rest/properties/relations/{$this->relationId}/file";
	}


	/**
	 * @param int $relationId The ID of the property relation
	 * @param string $key The name of the file that needs to be saved
	 * @param string $content The actual file content in text format
	 * @param bool $deleteIfExists Condition for the check of already existing file
	 */
	public function __construct(
		protected int $relationId,
		protected string $key,
		protected string $content,
		protected bool $deleteIfExists,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['key' => $this->key, 'content' => $this->content, 'deleteIfExists' => $this->deleteIfExists]);
	}
}
