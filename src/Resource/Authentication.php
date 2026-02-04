<?php

namespace PlentyOne\Api\Resource;

use PlentyOne\Api\Requests\Authentication\CheckGivenPin;
use PlentyOne\Api\Requests\Authentication\CheckPassword;
use PlentyOne\Api\Requests\Authentication\GetSessionLimits;
use PlentyOne\Api\Requests\Authentication\GetUser;
use PlentyOne\Api\Requests\Authentication\LoginByBackendUser;
use PlentyOne\Api\Requests\Authentication\LogoutUser;
use PlentyOne\Api\Requests\Authentication\QuickLoginUser;
use PlentyOne\Api\Requests\Authentication\RefreshAccessToken;
use PlentyOne\Api\Requests\Authentication\ResetFailedAuthenticationAttempts;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class Authentication extends BaseResource
{
	public function checkPassword(): Response
	{
		return $this->connector->send(new CheckPassword());
	}


	public function checkGivenPin(): Response
	{
		return $this->connector->send(new CheckGivenPin());
	}


	public function loginByBackendUser(): Response
	{
		return $this->connector->send(new LoginByBackendUser());
	}


	public function refreshAccessToken(): Response
	{
		return $this->connector->send(new RefreshAccessToken());
	}


	public function logoutUser(): Response
	{
		return $this->connector->send(new LogoutUser());
	}


	public function quickLoginUser(): Response
	{
		return $this->connector->send(new QuickLoginUser());
	}


	public function getSessionLimits(): Response
	{
		return $this->connector->send(new GetSessionLimits());
	}


	public function getUser(): Response
	{
		return $this->connector->send(new GetUser());
	}


	/**
	 * @param int $id
	 */
	public function resetFailedAuthenticationAttempts(int $id): Response
	{
		return $this->connector->send(new ResetFailedAuthenticationAttempts($id));
	}
}
