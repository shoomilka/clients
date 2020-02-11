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

    public function show($id)
    {
        $client = Client::findOrFail($id);
        return $client;
    }

    public function store(Request $request)
    {
        $client = Client::createValidated($request);
        if($client) return response()->json($client, 201);
        return response()->json(null, 404);
    }

    public function delete($id)
    {
        $client = Client::findOrFail($id);
        $client->delete();

        return response()->json(null, 204);
    }
}
