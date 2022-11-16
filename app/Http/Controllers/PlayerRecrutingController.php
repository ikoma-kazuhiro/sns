<?php

namespace App\Http\Controllers;

use App\Users_info;
use Illuminate\Http\Request;
use App\Http\Requests\PostRequest;
use App\Http\Requests\Users_infoRequest;
use App\Post;
use App\User;
use Illuminate\Support\Facades\Auth;
use App\Comment;
use App\Player_recruting;

class PlayerRecrutingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Player_recruting $recruting)
    {
        return view('users_infos/player_recruting/index')->with(['recrutings' => $recruting->get()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users_infos/player_recruting/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Player_recruting $recruting)
    {
        $input = $request['recruting'];
        $recruting->fill($input)->save();
        return redirect()->action('PlayerRecrutingController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Player_recruting $player_recruting)
    {
        return view('users_infos/player_recruting/show')->with(['recruting' => $player_recruting]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Player_recruting $recruting)
    {
        return view('users_infos/player_recruting/edit')->with(['recruting' => $recruting]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Player_recruting $recruting)
    {
        $input = $request['recruting'];
        $recruting->fill($input)->save();
    
        return redirect('/users_infos/player_recruting/' . $recruting->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Player_recruting $player_recruting)
    {
        $player_recruting->delete();
        return redirect()->action('PlayerRecrutingController@index');
    }
}
