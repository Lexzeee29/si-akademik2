<?php

class AuthController
{
	public function login($error = null)
	{
		require_once __DIR__ . '/../Views/auth/login.php';
	}

	public function processLogin()
	{
		$username = trim($_POST['username'] ?? '');
		$password = $_POST['password'] ?? '';

		if ($username === 'admin' && $password === '12345') {
			$_SESSION['login'] = true;
			$_SESSION['username'] = $username;

			header('Location: ' . BASE_URL . '/dashboard');
			exit;
		}

		$this->login('Username atau password salah.');
	}

	public function logout()
	{
		$_SESSION = [];
		session_destroy();

		header('Location: ' . BASE_URL . '/login');
		exit;
	}
}
