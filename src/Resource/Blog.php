<?php

namespace PlentyOne\Api\Resource;

use PlentyOne\Api\Requests\Blog\CreateBlogPost;
use PlentyOne\Api\Requests\Blog\DeleteBlogPost;
use PlentyOne\Api\Requests\Blog\GetBlogPost;
use PlentyOne\Api\Requests\Blog\ListBlogPosts;
use PlentyOne\Api\Requests\Blog\UpdateBlogPost;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class Blog extends BaseResource
{
	public function createBlogPost(): Response
	{
		return $this->connector->send(new CreateBlogPost());
	}


	/**
	 * @param int $postId
	 */
	public function getBlogPost(int $postId): Response
	{
		return $this->connector->send(new GetBlogPost($postId));
	}


	/**
	 * @param int $postId
	 */
	public function updateBlogPost(int $postId): Response
	{
		return $this->connector->send(new UpdateBlogPost($postId));
	}


	/**
	 * @param int $postId
	 */
	public function deleteBlogPost(int $postId): Response
	{
		return $this->connector->send(new DeleteBlogPost($postId));
	}


	public function listBlogPosts(): Response
	{
		return $this->connector->send(new ListBlogPosts());
	}
}
