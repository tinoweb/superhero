<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Superhero;
use Session;
use Input;
use Image;
use View;
use File;
use DB;

class SuperheroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $superheros = Superhero::all();
        $superheros = DB::table('superheros')->paginate(5);
        return view('home', compact('superheros'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('addSuperHero');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $filename = null;

        // se precisar de fazer validação no formulario esse é o lugar certo para tal
        $this->validate(request(),[
        //put fields to be validated here
        ]);  

        if ($request->hasFile('fotoImagem')) {
            $file = Input::file('fotoImagem');
            $avatar = $request->file('fotoImagem');
            $filename = time() . '.' . $avatar->getClientOriginalExtension();
            Image::make($avatar)->resize(300, 300)->save( public_path('SuperHerosImage/' . $filename ));
        }

        $superh= new Superhero();

        $superh->nome = $request['nomeSuperHeroi'];
        $superh->nomereal = $request['real_name'];
        $superh->descricao= $request['descricaoOrigem'];
        $superh->superpoderes = $request['superpowers'];
        $superh->frasecomercial = $request['catch_phrase'];
        $superh->images = $filename;
        $superh->save();

        $request->session()->flash('alert-success', 'SuperHero foi adicionado com sucesso!');
        return redirect('/superhero');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // dd('mostrar o superhero....');
        $suphero = Superhero::find($id);
        return View::make('showSuperHero', compact('suphero'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // dd('editar o superHero');
        $suphero = Superhero::find($id);
        return View::make('editSuperHero')
            ->with('suphero', $suphero);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       
        $filename = null;
    // $rules = array(
    //     // caso precise de validar os campos aki fica as regras de validacao
    // );

    // $validator = Validator::make(Input::all(), $rules);

    // if ($validator->fails()) { // caso a validacao falhar vai ser redirecionado   
    //     return Redirect::to('/superheroAtualizar' . $id)
    //         ->withErrors($validator)
    //         ->withInput(Input::all());
    // } else {

        if ($request->hasFile('fotoImagem')) {
            $file = Input::file('fotoImagem');
            $avatar = $request->file('fotoImagem');
            $filename = time() . '.' . $avatar->getClientOriginalExtension();
            Image::make($avatar)->resize(300, 300)->save( public_path('SuperHerosImage/' . $filename ));
        }
   

        $suphero = Superhero::find($id);
        $image_path = public_path('SuperHerosImage/'. $suphero->images);
        if ($request->hasFile('fotoImagem') && $image_path) {
            File::delete($image_path);
        }

        $suphero->nome = $request['nome'];
        $suphero->nomereal = $request['nomereal'];
        $suphero->descricao = $request['descricao'];
        $suphero->superpoderes = $request['superpoderes'];
        $suphero->frasecomercial = $request['frasecomercial'];
        $suphero->images = $filename;
        $suphero->save();

        $request->session()->flash('alert-success', 'SuperHero atualizada com sucesso!');
        return redirect('/superhero');
    // }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        /*
        Nesse metodo podem ser aplicadas dois tipos de Deleção
        no meu caso estou aplicando o metodo de deleção fisíco ou seja 
        realmente estou deletando os dados da tabela,
        Mas de acordo com os requisitos posso tambem aplicar a tecnica de 
        deleção Lógica onde somente o status muda na tablela de ATIVO -> INATIVO.
        */


        if ($id) {
            $superhero = Superhero::find($id);
            if ($superhero->images && public_path('SuperHerosImage/'. $superhero->images)) {
                File::delete(public_path('SuperHerosImage/'. $superhero->images));
            }
            $superhero->delete();
            Session::flash('alert-success', 'SuperHero deletada com sucesso!');
            return redirect('/superhero');
        }else{
            Session::flash('alert-success', 'SuperHero já foi deletada com sucesso anteriormente!');
            return redirect('/superhero');
        }

    }
}
