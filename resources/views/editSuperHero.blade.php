@extends('layout')

@section('content')

	<div class="container">
	    <section class="mb-5">
			
	        <h2 class="text-center mt-5">-=Change Heros=-</h2>
	        <!--Card-->
	        <div class="card card-cascade narrower mt-5">


	            <!--Card header-->
	            <div class="view gradient-card-header blue-gradient narrower py-2 mx-4 mb-3 d-flex justify-content-between align-items-center">
                    <div>
                        <a href="{{ route('SuperHero') }}" data-target="#modalContactForm" class="btn btn-outline-white btn-rounded btn-sm px-2 waves-effect waves-light"><i class="fa fa-arrow-left mt-0"></i> Voltar</a>
                    </div>

                    <span>Editar o superHero - {{ $suphero->nome }}</span>

                    <div>
                       
                    </div>
                </div>

                <div class="card-body">

                {!! Form::model($suphero, ['url' => 'superheroAtualizar/'. $suphero->id, 'method' => 'PUT', 'enctype'=>'multipart/form-data', 'files' => true]) !!}

                    <div class="row">
                        <div class="col-md-1">
                        </div>
                        <div class="col-md-3">
                            <div class="avatar mb-4 z-depth-1">
                                <img src="/SuperHerosImage/{{ $suphero->images }}" class="perfilEditImag" alt="First sample avatar image">
                            </div>
                        </div> 
                        <div class="col-md-2">
                        </div>
                        <div class="col-md-6">
                            <div class="md-form">
                               <div class="file-field">
                                    <div class="btn btn-primary btn-sm float-left waves-effect waves-light">
                                        <span>Escolha um arquivo</span>
                                        <input type="file" name="fotoImagem">
                                    </div>
                                   
                                </div>
                            </div>
                        </div>
                    </div>


                    <!--Content-->
                    <div class="row">
                        <div class="col-md-6">
                            <div class="md-form">
                           {{--      <input type="text" id="nomesuperheroi" name="nomeSuperHeroi" class="form-control form-control-sm"> --}}
                                {{ Form::text('nome', null, array('class' => 'form-control form-control-sm')) }}
                                {{-- <label for="nomesuperheroi">Nome do Super heroi</label> --}}
                            </div>
                        </div>

                        
                        <div class="col-md-6">
                            <div class="md-form">
                                {{ Form::text('nomereal', null, array('class' => 'form-control form-control-sm')) }}
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="md-form">
                                {{ Form::text('superpoderes', null, array('class' => 'form-control form-control-sm')) }}
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="md-form">
                                {{ Form::text('frasecomercial', null, array('class' => 'form-control form-control-sm')) }}
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="md-form">
                                {{ Form::textarea('descricao', null, array('class' => 'form-control md-textarea')) }}
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