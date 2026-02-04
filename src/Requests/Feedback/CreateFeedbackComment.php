<?php

namespace PlentyOne\Api\Requests\Feedback;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Create a feedback comment
 *
 * Creates a comment for a review.
 */
class CreateFeedbackComment extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/rest/feedbacks/comment";
	}


	/**
	 * @param string $message Feedback comment message
	 * @param int $commentRelationTargetTypeId The type ID of the comment's target
	 * @param int $commentRelationTargetId The ID of the comment's target
	 */
	public function __construct(
		protected string $message,
		protected int $commentRelationTargetTypeId,
		protected int $commentRelationTargetId,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter([
			'message' => $this->message,
			'commentRelationTargetTypeId' => $this->commentRelationTargetTypeId,
			'commentRelationTargetId' => $this->commentRelationTargetId,
		]);
	}
}
