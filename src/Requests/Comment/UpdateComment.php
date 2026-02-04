<?php

namespace PlentyOne\Api\Requests\Comment;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Update a comment
 *
 * Updates a comment by commentId.
 */
class UpdateComment extends Request
{
	protected Method $method = Method::PUT;


	public function resolveEndpoint(): string
	{
		return "/rest/comments/{$this->commentId}";
	}


	/**
	 * @param int $commentId The ID of the comment
	 * @param string $referenceType The reference type. Valid types are 'category', 'contact', 'order'.
	 * @param int $referenceValue The reference value
	 * @param null|int $userId The ID of the user the comment belongs to
	 * @param null|bool $isVisibleForContact If true, the comment is visible for the associated contact.
	 */
	public function __construct(
		protected int $commentId,
		protected string $referenceType,
		protected int $referenceValue,
		protected ?int $userId = null,
		protected ?bool $isVisibleForContact = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter([
			'referenceType' => $this->referenceType,
			'referenceValue' => $this->referenceValue,
			'userId' => $this->userId,
			'isVisibleForContact' => $this->isVisibleForContact,
		]);
	}
}
