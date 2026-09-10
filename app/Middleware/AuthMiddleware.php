<?php

class AuthMiddleware
{
	public function handle()
	{
		if (empty($_SESSION['login'])) {
			header('Location: ' . BASE_URL . '/login');
			exit;
		}
	}
}
