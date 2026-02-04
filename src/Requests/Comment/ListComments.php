<?php

namespace PlentyOne\Api\Requests\Comment;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * List comments
 *
 * Lists comments. The reference type and the reference value must be specified (e.g. the reference
 * type is 'order' and the reference value is the ID of the order).
 */
class ListComments extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/comments/{$this->referenceType}/{$this->referenceValue}";
	}


	/**
	 * @param string $referenceType The reference type. Valid types are 'category', 'contact', 'order', 'order_item'.
	 * @param int $referenceValue The reference value
	 * @param null|int $userId The ID of the user the comment belongs to
	 * @param null|bool $isVisibleForContact If true, the comment is visible for the associated contact.
	 */
	public function __construct(
		protected string $referenceType,
		protected int $referenceValue,
		protected ?int $userId = null,
		protected ?bool $isVisibleForContact = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['userId' => $this->userId, 'isVisibleForContact' => $this->isVisibleForContact]);
	}
}
