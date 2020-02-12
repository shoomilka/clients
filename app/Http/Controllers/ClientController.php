<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Client;

class ClientController extends Controller
{
    public function index()
    {
        return Client::all();
    }

    public function show(Client $client)
    {
        return $client;
    }

    public function store(Request $request)
    {
        $client = Client::create($request);
        if($client) return response()->json($client, 201);
        return response()->json(null, 404);
    }

    public function delete(Client $client)
    {
        $client->delete();
        return response()->json(null, 204);
    }
}
