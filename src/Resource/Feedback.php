<?php

namespace PlentyOne\Api\Resource;

use PlentyOne\Api\Requests\Feedback\CreateFeedback;
use PlentyOne\Api\Requests\Feedback\CreateFeedbackComment;
use PlentyOne\Api\Requests\Feedback\CreateFeedbackRating;
use PlentyOne\Api\Requests\Feedback\DeleteFeedback;
use PlentyOne\Api\Requests\Feedback\DeleteFeedbackComment;
use PlentyOne\Api\Requests\Feedback\DeleteFeedbackRating;
use PlentyOne\Api\Requests\Feedback\DeleteMultipleFeedbacks;
use PlentyOne\Api\Requests\Feedback\GetFeedback;
use PlentyOne\Api\Requests\Feedback\GetFeedbackComment;
use PlentyOne\Api\Requests\Feedback\GetFeedbackRating;
use PlentyOne\Api\Requests\Feedback\ListFeedbackComments;
use PlentyOne\Api\Requests\Feedback\ListFeedbackRatings;
use PlentyOne\Api\Requests\Feedback\ListFeedbackReplies;
use PlentyOne\Api\Requests\Feedback\ListFeedbacks;
use PlentyOne\Api\Requests\Feedback\MigrateLegacyFeedbacks;
use PlentyOne\Api\Requests\Feedback\UpdateFeedback;
use PlentyOne\Api\Requests\Feedback\UpdateTheVisibilityOfMultipleFeedbacks;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class Feedback extends BaseResource
{
	/**
	 * @param string $message Feedback comment message
	 * @param int $commentRelationTargetTypeId The type ID of the comment's target
	 * @param int $commentRelationTargetId The ID of the comment's target
	 */
	public function createFeedbackComment(
		string $message,
		int $commentRelationTargetTypeId,
		int $commentRelationTargetId,
	): Response
	{
		return $this->connector->send(new CreateFeedbackComment($message, $commentRelationTargetTypeId, $commentRelationTargetId));
	}


	/**
	 * @param int $commentId
	 * @param int $feedbackCommentId The ID of the feedback comment
	 */
	public function getFeedbackComment(int $commentId, int $feedbackCommentId): Response
	{
		return $this->connector->send(new GetFeedbackComment($commentId, $feedbackCommentId));
	}


	/**
	 * @param int $commentId
	 * @param int $feedbackCommentId The ID of the feedback comment
	 */
	public function deleteFeedbackComment(int $commentId, int $feedbackCommentId): Response
	{
		return $this->connector->send(new DeleteFeedbackComment($commentId, $feedbackCommentId));
	}


	public function listFeedbackComments(): Response
	{
		return $this->connector->send(new ListFeedbackComments());
	}


	/**
	 * @param string $feedbackIds The list of feedback IDs, separated by commas
	 */
	public function deleteMultipleFeedbacks(string $feedbackIds): Response
	{
		return $this->connector->send(new DeleteMultipleFeedbacks($feedbackIds));
	}


	/**
	 * @param string $title Feedback title
	 * @param string $feedbackRelationTargetId The ID of the feedback's target
	 * @param string $feedbackRelationTargetTypeId The type ID of the feedback's target
	 * @param string $feedbackRelationSourceTypeId The type ID of the feedback's source
	 */
	public function createFeedback(
		?string $title = null,
		?string $feedbackRelationTargetId = null,
		?string $feedbackRelationTargetTypeId = null,
		?string $feedbackRelationSourceTypeId = null,
	): Response
	{
		return $this->connector->send(new CreateFeedback($title, $feedbackRelationTargetId, $feedbackRelationTargetTypeId, $feedbackRelationSourceTypeId));
	}


	/**
	 * @param int $feedbackId The ID of the feedback
	 */
	public function listFeedbackReplies(int $feedbackId): Response
	{
		return $this->connector->send(new ListFeedbackReplies($feedbackId));
	}


	/**
	 * @param int $feedbackId The ID of the feedback
	 */
	public function getFeedback(int $feedbackId): Response
	{
		return $this->connector->send(new GetFeedback($feedbackId));
	}


	/**
	 * @param int $feedbackId The ID of the feedback
	 */
	public function updateFeedback(int $feedbackId): Response
	{
		return $this->connector->send(new UpdateFeedback($feedbackId));
	}


	/**
	 * @param int $feedbackId The ID of the feedback
	 */
	public function deleteFeedback(int $feedbackId): Response
	{
		return $this->connector->send(new DeleteFeedback($feedbackId));
	}


	public function listFeedbacks(): Response
	{
		return $this->connector->send(new ListFeedbacks());
	}


	/**
	 * @param string $feedbackIds The list of feedback IDs, separated by commas
	 * @param bool $isVisible The visibility value
	 */
	public function updateTheVisibilityOfMultipleFeedbacks(string $feedbackIds, bool $isVisible): Response
	{
		return $this->connector->send(new UpdateTheVisibilityOfMultipleFeedbacks($feedbackIds, $isVisible));
	}


	public function migrateLegacyFeedbacks(): Response
	{
		return $this->connector->send(new MigrateLegacyFeedbacks());
	}


	/**
	 * @param int $ratingValue The feedback's comment message
	 * @param int $ratingRelationTargetTypeId The type ID of the rating's target
	 * @param int $ratingRelationTargetId The ID of the rating's target
	 */
	public function createFeedbackRating(
		int $ratingValue,
		int $ratingRelationTargetTypeId,
		int $ratingRelationTargetId,
	): Response
	{
		return $this->connector->send(new CreateFeedbackRating($ratingValue, $ratingRelationTargetTypeId, $ratingRelationTargetId));
	}


	/**
	 * @param int $ratingId
	 * @param int $feedbackRatingId The ID of the feedback rating
	 */
	public function getFeedbackRating(int $ratingId, int $feedbackRatingId): Response
	{
		return $this->connector->send(new GetFeedbackRating($ratingId, $feedbackRatingId));
	}


	/**
	 * @param int $ratingId
	 * @param int $feedbackRatingId The ID of the feedback rating
	 */
	public function deleteFeedbackRating(int $ratingId, int $feedbackRatingId): Response
	{
		return $this->connector->send(new DeleteFeedbackRating($ratingId, $feedbackRatingId));
	}


	public function listFeedbackRatings(): Response
	{
		return $this->connector->send(new ListFeedbackRatings());
	}
}
