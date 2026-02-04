<?php

namespace PlentyOne\Api\Requests\Feedback;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Delete a feedback comment
 *
 * Deletes a feedback comment. The ID of the feedback comment must be specified.
 */
class DeleteFeedbackComment extends Request
{
	protected Method $method = Method::DELETE;


	public function resolveEndpoint(): string
	{
		return "/rest/feedbacks/comment/{$this->commentId}";
	}


	/**
	 * @param int $commentId
	 * @param int $feedbackCommentId The ID of the feedback comment
	 */
	public function __construct(
		protected int $commentId,
		protected int $feedbackCommentId,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['feedbackCommentId' => $this->feedbackCommentId]);
	}
}
