<?php

namespace App\Repositories;

use Illuminate\Support\Facades\Http;

class GithubUserRepository
{
    protected $apiUrl = 'https://api.github.com/users/';

    /**
     * Método responsável por realizar uma busca na API do GitHub
     * @param   string      $usuario Usuário a ser consultado
     * @return  mixed|null
     */
    public function getUserData($usuario)
    {
        $response = Http::get($this->apiUrl . $usuario);

        if ($response->successful()) {
            return $response->json();
        }

        return null;
    }
}