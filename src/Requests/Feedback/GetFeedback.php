<?php

namespace PlentyOne\Api\Requests\Feedback;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get a feedback
 *
 * Gets a feedback. The ID of the feedback must be specified.
 */
class GetFeedback extends Request
{
	protected Method $method = Method::GET;


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
