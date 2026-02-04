<?php

namespace PlentyOne\Api\Resource;

use PlentyOne\Api\Requests\Comment\CreateComment;
use PlentyOne\Api\Requests\Comment\DeleteComment;
use PlentyOne\Api\Requests\Comment\GetComment;
use PlentyOne\Api\Requests\Comment\ListComments;
use PlentyOne\Api\Requests\Comment\UpdateComment;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class Comment extends BaseResource
{
	public function createComment(): Response
	{
		return $this->connector->send(new CreateComment());
	}


	/**
	 * @param int $commentId The ID of the comment
	 */
	public function getComment(int $commentId): Response
	{
		return $this->connector->send(new GetComment($commentId));
	}


	/**
	 * @param int $commentId The ID of the comment
	 * @param string $referenceType The reference type. Valid types are 'category', 'contact', 'order'.
	 * @param int $referenceValue The reference value
	 * @param int $userId The ID of the user the comment belongs to
	 * @param bool $isVisibleForContact If true, the comment is visible for the associated contact.
	 */
	public function updateComment(
		int $commentId,
		string $referenceType,
		int $referenceValue,
		?int $userId = null,
		?bool $isVisibleForContact = null,
	): Response
	{
		return $this->connector->send(new UpdateComment($commentId, $referenceType, $referenceValue, $userId, $isVisibleForContact));
	}


	/**
	 * @param int $commentId The ID of the comment
	 */
	public function deleteComment(int $commentId): Response
	{
		return $this->connector->send(new DeleteComment($commentId));
	}


	/**
	 * @param string $referenceType The reference type. Valid types are 'category', 'contact', 'order', 'order_item'.
	 * @param int $referenceValue The reference value
	 * @param int $userId The ID of the user the comment belongs to
	 * @param bool $isVisibleForContact If true, the comment is visible for the associated contact.
	 */
	public function listComments(
		string $referenceType,
		int $referenceValue,
		?int $userId = null,
		?bool $isVisibleForContact = null,
	): Response
	{
		return $this->connector->send(new ListComments($referenceType, $referenceValue, $userId, $isVisibleForContact));
	}
}
