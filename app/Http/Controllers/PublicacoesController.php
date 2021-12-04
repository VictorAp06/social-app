<?php

namespace App\Http\Controllers;

use App\Models\Publicacoes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PublicacoesController extends Controller
{
        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $search = request('search');

        if($search) {

            $publicacoes = Publicacoes::where([
                ['descricao', 'like', '%'.$search.'%']
            ])->orderBy('id', 'desc')->get();

        } else {
            $publicacoes = Publicacoes::orderBy('id', 'desc')->get();
        }        
    
        return view('app.home-rede',['publicacoes' => $publicacoes, 'search' => $search]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('app.cadastro',[]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->hasFile('image') && $request->file('image')->isValid()) {
            $requestImage = $request->image;
            $extension = $requestImage->extension();
            $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;
            $requestImage->move(public_path('img/events'), $imageName);
        }

        $userId = Auth::user()->id;
        
        $publicacao = [
            'noticia_id' => 1, 
            'evento_id' => 1,
            'dir_img_capa' => $imageName,
            'likes' => 0,
            'descricao' => $request->descricao,
            'user_id' => $userId,
        ];

        Publicacoes::create($publicacao);

        header('Location:' . url('/rede/home')); die;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(Publicacoes $publicacoes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $publicacoes
     * @return \Illuminate\Http\Response
     */
    public function edit(Publicacoes $publicacoes)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $publicacoes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Publicacoes $publicacoes)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $publicacoes
     * @return \Illuminate\Http\Response
     */
    public function destroy(Publicacoes $publicacoes)
    {
        //
    }
}
