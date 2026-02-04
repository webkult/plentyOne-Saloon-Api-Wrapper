<?php

namespace PlentyOne\Api\Requests\Feedback;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * List feedback replies
 *
 * Lists feedback replies. The ID of the feedback must be specified.
 */
class ListFeedbackReplies extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/feedbacks/feedback/replies/{$this->feedbackId}";
	}


	/**
	 * @param int $feedbackId The ID of the feedback
	 */
	public function __construct(
		protected int $feedbackId,
	) {
	}
}
