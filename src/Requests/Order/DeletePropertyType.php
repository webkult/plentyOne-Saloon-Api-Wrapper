<?php

namespace PlentyOne\Api\Requests\Order;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Delete property type
 *
 * Deletes a property type and all names for it from the database. The ID of the property type must be
 * specified. Property type IDs lower than 1,000 cannot be deleted because they are system defaults.
 */
class DeletePropertyType extends Request
{
	protected Method $method = Method::DELETE;


	public function resolveEndpoint(): string
	{
		return "/rest/orders/properties/types/{$this->typeId}";
	}


	/**
	 * @param int $typeId The ID of the property type
	 */
	public function __construct(
		protected int $typeId,
	) {
	}
}
