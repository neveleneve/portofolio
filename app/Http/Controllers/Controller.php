<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;

abstract class Controller {
    public $username;
    public $token;

    public function __construct() {
        $this->username = env('GITHUB_USERNAME');
        $this->token = env('GITHUB_ACCESS_TOKEN');
    }
    public function githubAccountData() {

        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . $this->token,
        ])->get("https://api.github.com/users/{$this->username}");

        if ($response->successful()) {
            $userData = $response->json();

            $profileStats = [
                'name' => $userData['name'],
                'username' => $userData['login'],
                'bio' => $userData['bio'],
                'followers' => $userData['followers'],
                'following' => $userData['following'],
                'public_repos' => $userData['public_repos'],
                'public_gists' => $userData['public_gists'],
                'avatar_url' => $userData['avatar_url'],
                'hireable' => $userData['hireable'],
            ];
            return $profileStats;
        } else {
            return [];
        }
    }

    public function githubPrivateData() {
        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . $this->token,
        ])->get('https://api.github.com/user/repos');
        if ($response->successful()) {
            $repos = $response->json();
            return $repos;
        } else {
            return [];
        }
    }

    // public function getMostUsedLanguage() {
    //     $reposResponse = Http::withHeaders([
    //         'Authorization' => 'Bearer ' . $this->token,
    //     ])->get('https://api.github.com/user/repos');

    //     if (!$reposResponse->successful()) {
    //         return [];
    //     }

    //     $repos = $reposResponse->json();
    //     $languageStats = [];

    //     // Step 2: Loop through each repository to get language usage
    //     foreach ($repos as $repo) {
    //         $languagesResponse = Http::withHeaders([
    //             'Authorization' => 'Bearer ' . $this->token,
    //         ])->get("https://api.github.com/repos/{$repo['owner']['login']}/{$repo['name']}/languages");

    //         if ($languagesResponse->successful()) {
    //             $languages = $languagesResponse->json();

    //             // Aggregate language usage
    //             foreach ($languages as $language => $bytes) {
    //                 if (!isset($languageStats[$language])) {
    //                     $languageStats[$language] = 0;
    //                 }
    //                 $languageStats[$language] += $bytes;
    //             }
    //         }
    //     }

    //     arsort($languageStats);
    //     $mostUsedLanguage = $languageStats;

    //     // return [
    //     //     'language' => $mostUsedLanguage,
    //     //     'bytes' => $languageStats[$mostUsedLanguage]
    //     // ];
    //     return $mostUsedLanguage;
    // }
}
