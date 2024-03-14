<?php

//lista todos os ativos
function index()
{
    $url = 'https://brapi.dev/api/quote/list';
    $params = [
        'search' => '',
        'sortBy' => '',
        'sortOrder' => '',
        'limit' => '',
        'sector' => '',
        'token' => '2gnipBMcsZNgy9J8SKHdSD'
    ];
    
    $query = http_build_query($params);
    
    $fullUrl = $url.'?'.$query;
    
    $response = file_get_contents($fullUrl);
    
    $data = json_decode($response, true);
    $tickers = $data['stocks'];
    return $tickers;
}


//mostra o ativo escolhido
function ticker()
{
    $ticker = $_GET['ticker'];

    $url = 'https://brapi.dev/api/quote/'.$ticker;
    $params = [
        'token' => '2gnipBMcsZNgy9J8SKHdSD'
    ];
    
    $query = http_build_query($params);
    
    $fullUrl = $url.'?'.$query;
    
    $response = file_get_contents($fullUrl);
    
    $data = json_decode($response, true);
    $ticker = $data['results'][0];
    return $ticker;
}