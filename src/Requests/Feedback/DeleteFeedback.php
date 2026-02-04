<?php

namespace PlentyOne\Api\Requests\Feedback;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Delete a feedback
 *
 * Deletes a feedback. The ID of the feedback must be specified.
 */
class DeleteFeedback extends Request
{
	protected Method $method = Method::DELETE;


	public function resolveEndpoint(): string
	{
		return "/rest/feedbacks/feedback/{$this->feedbackId}";
	}


	/**
	 * @param int $feedbackId The ID of the feedback
	 */
	public function __construct(
		protected int $feedbackId,
	) {
	}
}
