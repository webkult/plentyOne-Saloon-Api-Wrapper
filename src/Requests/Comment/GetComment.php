<?php

namespace PlentyOne\Api\Requests\Comment;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get a comment
 *
 * Gets a comment. The ID of the comment must be specified.
 */
class GetComment extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/comments/{$this->commentId}";
	}


	/**
	 * @param int $commentId The ID of the comment
	 */
	public function __construct(
		protected int $commentId,
	) {
	}
}
