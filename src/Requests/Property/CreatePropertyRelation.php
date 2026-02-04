<?php

namespace PlentyOne\Api\Requests\Property;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Create a property relation
 *
 * Creates a property relation
 */
class CreatePropertyRelation extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/rest/properties/relations";
	}


	/**
	 * @param int $propertyId The ID of the property
	 * @param string $relationTypeIdentifier The identifier of the property relation type
	 * @param int $relationTargetId The ID of the property relation target
	 * @param int $selectionRelationId The ID of the property selection relation
	 */
	public function __construct(
		protected int $propertyId,
		protected string $relationTypeIdentifier,
		protected int $relationTargetId,
		protected int $selectionRelationId,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter([
			'propertyId' => $this->propertyId,
			'relationTypeIdentifier' => $this->relationTypeIdentifier,
			'relationTargetId' => $this->relationTargetId,
			'selectionRelationId' => $this->selectionRelationId,
		]);
	}
}
