<?php

namespace PlentyOne\Api\Requests\Feedback;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Delete multiple feedbacks
 *
 * Deletes multiple feedbacks. A list with IDs of feedbacks must be specified.
 */
class DeleteMultipleFeedbacks extends Request
{
	protected Method $method = Method::DELETE;


	public function resolveEndpoint(): string
	{
		return "/rest/feedbacks/delete_feedbacks/{$this->feedbackIds}";
	}


	/**
	 * @param string $feedbackIds The list of feedback IDs, separated by commas
	 */
	public function __construct(
		protected string $feedbackIds,
	) {
	}
}
