<?php

namespace PlentyOne\Api\Requests\Messenger;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Deletes a single category (soft delete, type will be flagged as deleted)
 *
 * Deletes a single category (soft delete, type will be flagged as deleted)
 */
class DeletesSingleCategorySoftDeleteTypeWillBeFlaggedAsDeleted extends Request
{
	protected Method $method = Method::DELETE;


	public function resolveEndpoint(): string
	{
		return "/rest/conversations/categories/{$this->id}";
	}


	/**
	 * @param int $id
	 */
	public function __construct(
		protected int $id,
	) {
	}
}
