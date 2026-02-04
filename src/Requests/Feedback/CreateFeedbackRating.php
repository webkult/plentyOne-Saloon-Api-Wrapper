<?php

namespace PlentyOne\Api\Requests\Feedback;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Create a feedback rating
 *
 * Creates a feedback rating.
 */
class CreateFeedbackRating extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/rest/feedbacks/rating";
	}


	/**
	 * @param int $ratingValue The feedback's comment message
	 * @param int $ratingRelationTargetTypeId The type ID of the rating's target
	 * @param int $ratingRelationTargetId The ID of the rating's target
	 */
	public function __construct(
		protected int $ratingValue,
		protected int $ratingRelationTargetTypeId,
		protected int $ratingRelationTargetId,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter([
			'ratingValue' => $this->ratingValue,
			'ratingRelationTargetTypeId' => $this->ratingRelationTargetTypeId,
			'ratingRelationTargetId' => $this->ratingRelationTargetId,
		]);
	}
}
