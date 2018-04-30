@extends('layout')

@section('content')

	<div class="container">
	    <section class="mb-5">
			
	        <h2 class="text-center mt-5">-=Make Heros=-</h2>
	        <!--Card-->
	        <div class="card card-cascade narrower mt-5">


	            <!--Card header-->

	            <div class="view gradient-card-header blue-gradient narrower py-2 mx-4 mb-3 d-flex justify-content-between align-items-center">

                    <div>
                        <a href="{{ route('SuperHero') }}" data-target="#modalContactForm" class="btn btn-outline-white btn-rounded btn-sm px-2 waves-effect waves-light"><i class="fa fa-arrow-left mt-0"></i> Voltar</a>
                    </div>

                    <a href="" class="white-text mx-3">Adicionar Novo SuperHero</a>

                    <div>
                        {{-- <button type="button" class="btn btn-outline-white btn-rounded btn-sm px-2 waves-effect waves-light"><i class="fa fa-pencil mt-0"></i></button>
                        <button type="button" class="btn btn-outline-white btn-rounded btn-sm px-2 waves-effect waves-light"><i class="fa fa-remove mt-0"></i></button> --}}
                    </div>

                </div>

                <div class="card-body">
                {!! Form::open(['url' => 'superheroStore', 'method' => 'post', 'enctype'=>'multipart/form-data', 'files' => true]) !!}

                    <div class="row">
                      <div class="col-md-12">
                        <div class="md-form">
                           <div class="file-field">
                                <div class="btn btn-primary btn-sm float-left waves-effect waves-light">
                                    <span>Escolha um arquivo</span>
                                    <input type="file" name="fotoImagem">
                                </div>
                                <div class="file-path-wrapper">
                                    <input class="file-path validate" name="fotoImagemNome" type="text" placeholder="Upload your file">
                                </div>
                            </div>
                        </div>
                      </div>
                    </div>


                    <!--Content-->
                    <div class="row">
                        <div class="col-md-6">
                            <div class="md-form">
                                <input type="text" id="nomesuperheroi" name="nomeSuperHeroi" class="form-control form-control-sm">
                                <label for="nomesuperheroi">Nome do Super heroi</label>
                            </div>
                        </div>

                        
                        <div class="col-md-6">
                            <div class="md-form">
                                <input type="text" id="nomereal" name="real_name" class="form-control form-control-sm">
                                <label for="nomereal">Nome Real</label>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="md-form">
                                <input type="text" id="superpoderes" name="superpowers" class="form-control form-control-sm">
                                <label for="superpoderes">Super Poderes</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="md-form">
                                <input type="text" id="frazepropaganda" name="catch_phrase" class="form-control form-control-sm">
                                <label for="frazepropaganda">Frase de Propaganda</label>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="md-form">
                                <textarea name="descricaoOrigem" id="descricaoOrigem" rows="3" class="form-control md-textarea"></textarea>
                                <label for="descricaoOrigem">Descrição de Origem</label>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="text-center mt-4 mb-2">
                            <button type="submit" class="btn btn-primary btn-block">Salvar 
                                <i class="fa fa-send ml-2"></i>
                            </button>
                        </div>
                    </div>

                {!! Form::close() !!}
                </div>
            </div>
        </section>
    </div>

@endsection