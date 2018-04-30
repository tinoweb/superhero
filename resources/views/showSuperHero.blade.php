@extends('layout')

@section('content')

	<div class="container">
	    <section class="mb-5">
			
	        <h2 class="text-center mt-5">-=Show Heros=-</h2>
	        <!--Card-->
	        <div class="card card-cascade narrower mt-5">


	            <!--Card header-->
	            <div class="view gradient-card-header blue-gradient narrower py-2 mx-4 mb-3 d-flex justify-content-between align-items-center">
                    <div>
                        <a href="{{ route('SuperHero') }}" data-target="#modalContactForm" class="btn btn-outline-white btn-rounded btn-sm px-2 waves-effect waves-light"><i class="fa fa-arrow-left mt-0"></i> Voltar</a>
                    </div>

                    <span>Mostrar o superHero - 
                        <button type="button" class="btn btn-default btn-rounded btn-sm px-3 waves-effect waves-light" data-toggle="modal" data-target="#modalAchievment">{{ $suphero->nome }}</button>
                    </span>

                    <div>
                       
                    </div>
                </div>

                <div class="card-body">
                    <div class="row">

                        <!--Grid column-->
                        <div class="col-lg-3 mb-4">
                            <!--Featured image-->
                            <div class="view overlay z-depth-1">
                                <img src="/SuperHerosImage/{{ $suphero->images }}" class="img-fluid" alt="First sample image">
                                <a>
                                    <div class="mask rgba-white-slight waves-effect waves-light"></div>
                                </a>
                            </div>
                        </div>
                        <!--Grid column-->

                        <!--Grid column-->
                        <div class="col-lg-8 mb-4">
                            <!--Excerpt-->
                            <span class=""><h4>Nickname​:<strong class="pb-1 teal-text"> {{$suphero->nome}} </strong></h4></span>
                            <span class=""><h4>Nome Real:<strong class="pb-1 blue-text"> {{$suphero->nomereal}} </strong></h4></span>
                            <span class=""><h5>Super Poder:<strong class="pb-1 red-text"> {{$suphero->superpoderes}} </strong></h5></span>
                            <span class=""><h6>Frase comercial:<strong class="pb-1 light-blue-text"> {{$suphero->frasecomercial}}</strong></h6></span>
                            <p>Descrição: <span class="brown-text">{{$suphero->descricao}}</span></p>
                        </div>
                        <!--Grid column-->
                    </div>
                </div>
            </div>
        </section>
    </div>

@endsection