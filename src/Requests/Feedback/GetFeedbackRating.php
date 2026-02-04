<?php

namespace PlentyOne\Api\Requests\Feedback;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get a feedback rating
 *
 * Gets a feedback rating. The ID of the feedback rating must be specified.
 */
class GetFeedbackRating extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/feedbacks/rating/{$this->ratingId}";
	}


	/**
	 * @param int $ratingId
	 * @param int $feedbackRatingId The ID of the feedback rating
	 */
	public function __construct(
		protected int $ratingId,
		protected int $feedbackRatingId,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['feedbackRatingId' => $this->feedbackRatingId]);
	}
}
