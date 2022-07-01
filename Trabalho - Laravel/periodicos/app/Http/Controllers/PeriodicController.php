<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Publicacoes;

class PeriodicController extends Controller
{
    public function index() {

        $publicacoes = Publicacoes::all();

        return view('welcome', ['publicacoes' => $publicacoes]);
    }

    public function create() {
        return view('periodics.create');        
    }

    public function store(Request $request) {

        $publicacoes = new Publicacoes;

        $publicacoes->titulo = $request->titulo;
        $publicacoes->editora = $request->editora;
        $publicacoes->items = $request->items;
        $publicacoes->valor = $request->valor;

        //Image Upload
        if($request->hasFile('image') && $request->file('image')->isValid()){

            $requestImage = $request->image;

            $extension = $requestImage->extension();

            $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;

            $requestImage->move(public_path('img/publicacoes'), $imageName);

            $publicacoes->image = $imageName;
        }

        $user = auth()->user();
        $publicacoes->user_id = $user->id;
        
        $publicacoes->save();

        return redirect('/')->with('msg', 'Evento criado com sucesso!');        
    }

    public function dashboard() {

        $user = auth()->user();

        $publicacoes = $user->publicacoes;

        $publicacoesAsParticipant = $user->publicacoesAsParticipant;

        return view('periodics.dashboard', 
            ['periodics' => $publicacoes, 'publicacoesAsParticipant' => $publicacoesAsParticipant]
        );

    }

    public function destroy($id) {

        Publicacoes::findOrFail($id)->delete();

        return redirect('/dashboard')->with('msg', 'Evento excluido com sucesso!');

    }

    public function edit($id) {

        $user = auth()->user();

        $publicacoes = Publicacoes::findOrFail($id);

        if($user->id != $publicacoes->user_id) {
            return redirect('/dashboard');
        }

        return view('periodics.edit', ['publicacoes' => $publicacoes]);
    }

    public function update(Request $request) {

        $data = $request->all();

        //Image Upload
        if($request->hasFile('image') && $request->file('image')->isValid()){

            $requestImage = $request->image;

            $extension = $requestImage->extension();

            $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;

            $requestImage->move(public_path('img/publicacoes'), $imageName);

            $data['image'] = $imageName;
        }
  
        Publicacoes::findOrFail($request->id)->update($data);

        return redirect('/dashboard')->with('msg', 'Evento editado com sucesso!');
    }

    public function joinPublicacoes($id) {

        $user = auth()->user();
       
        $user->publicacoesAsParticipant()->attach($id);

        $publicacoes = Publicacoes::findOrFail($id);

        return redirect('/dashboard')->with('msg', 'Você assinou: ' . $publicacoes->titulo);

    }

    public function leavePublicacoes($id) {

        $user = auth()->user();

        $user->publicacoesAsParticipant()->detach($id);

        $publicacoes = Publicacoes::findOrFail($id);

        return redirect('/dashboard')->with('msg', 'Você cancelou a assinatura de: ' . $publicacoes->titulo);

    }

    
}
