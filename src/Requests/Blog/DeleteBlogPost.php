<?php

namespace PlentyOne\Api\Requests\Blog;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Delete a blog post
 *
 * Deletes a blog post based on its ID.
 */
class DeleteBlogPost extends Request
{
	protected Method $method = Method::DELETE;


	public function resolveEndpoint(): string
	{
		return "/rest/blogs/post/{$this->postId}";
	}


	/**
	 * @param int $postId
	 */
	public function __construct(
		protected int $postId,
	) {
	}
}
