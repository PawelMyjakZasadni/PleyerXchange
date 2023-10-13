<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use Symfony\Component\DomCrawler\Crawler;

class Home extends BaseController
{
public function index()
{
    // Tworzymy obiekt Goutte
    $goutteClient = \Config\Services::goutte();

    // Adres URL do strony z najnowszymi informacjami piłkarskimi
    $url = 'https://www.goal.com/en/news';

    // Pobieramy zawartość strony
    $crawler = $goutteClient->request('GET', $url);

    // Wybieramy elementy z informacjami piłkarskimi (tu użyj selektorów CSS)
    $newsItems = $crawler->filter('.football-news-item')->each(function ($node) {
        // Parsujemy dane z elementu i zwracamy jako tablicę
        $title = $node->filter('h2')->text();
        $content = $node->filter('p')->text();

        return [
            'title' => $title,
            'content' => $content,
        ];
    });

    // Przekazujemy dane do widoku
    $data['newsItems'] = $newsItems;

    // Wyświetlamy widok
    return view('welcome_message', $data);
}
   // return view('welcome_message', );
}

