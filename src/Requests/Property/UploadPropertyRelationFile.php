<?php

namespace PlentyOne\Api\Requests\Property;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Upload a property relation file
 *
 * Upload a property relation file. The ID of the property relation must be specified.
 */
class UploadPropertyRelationFile extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/rest/v2/properties/relations/{$this->relationId}/file";
	}


	/**
	 * @param int $relationId The ID of the property relation
	 */
	public function __construct(
		protected int $relationId,
	) {
	}
}
