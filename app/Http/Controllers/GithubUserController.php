<?php

namespace App\Http\Controllers;

use App\Repositories\GithubUserRepository;

class GithubUserController extends Controller
{
    protected $githubUserRepository;

    /**
     * Método construtor do Controller
     * @param GithubUserRepository $githubUserRepository
     */
    public function __construct(GithubUserRepository $githubUserRepository)
    {
        $this->githubUserRepository = $githubUserRepository;
    }

    public function index()
    {
        return view('github-user-search');
    }

    /**
     * Método para busca de usuários
     */
    public function search($usuario)
    {
        $userData = $this->githubUserRepository->getUserData($usuario);

        return response()->json($userData);
    }
}
