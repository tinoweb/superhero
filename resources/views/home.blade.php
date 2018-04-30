@extends('layout')

@section('content')

	<div class="container">
	    <section class="mb-5">
			
	        <h2 class="text-center mt-5">-=My Heros=-</h2>
	        <!--Card-->
	        

	        <div class="flash-message">
	            @foreach (['danger', 'warning', 'success', 'info'] as $msg)
	              @if(Session::has('alert-' . $msg))

	              <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
	              @endif
	            @endforeach
	        </div> <!-- end .flash-message -->


	        <div class="card card-cascade narrower mt-5">


	            <!--Card header-->

	            <div class="view gradient-card-header blue-gradient narrower py-2 mx-4 mb-3 d-flex justify-content-between align-items-center">

                    <div>
                        <a href="{{ route('NewSuperHero') }}" data-target="#modalContactForm" class="btn btn-outline-white btn-rounded btn-sm px-2 waves-effect waves-light"><i class="fa fa-plus mt-0"></i> Novo</a>
                    </div>

                    <a href="" class="white-text mx-3">SuperHero CRUD System</a>

                    <div>
                        {{-- <button type="button" class="btn btn-outline-white btn-rounded btn-sm px-2 waves-effect waves-light"><i class="fa fa-pencil mt-0"></i></button>
                        <button type="button" class="btn btn-outline-white btn-rounded btn-sm px-2 waves-effect waves-light"><i class="fa fa-remove mt-0"></i></button> --}}
                    </div>

                </div>

	            <!--/Card header-->

	            <!--Card content-->
	            <div class="card-body">

	                <div class="table-responsive">

	                    <table class="table">
	                        <thead class="cyan lighten-3">
	                            <tr><th>#</th>
	                                <th class="th-lg text-uppercase"><strong>Nickname​</strong></th>
	                                <th class="th-lg text-uppercase"><strong>Nome Real:</strong></th>
	                                <th class="th-lg text-uppercase"><strong>Descrição​</strong></th>
	                                <th class="th-lg text-uppercase"><strong>Super Poderes</strong></th>
	                                <th class="th-lg text-uppercase"><strong>Frase Ação</strong></th>
	                                <th class="th-lg text-uppercase"><strong>Images</strong></th>
                                    <th class="th-lg text-uppercase"><strong>Ação</strong></th>
	                            </tr>
	                        </thead>
	                        <tbody>
                                @php
                                    $conta=1;
                                @endphp
                                @foreach ($superheros as $superhero)
                                    <tr>
                                        <th>{{ $conta }}</th>
    	                                <td>{{ $superhero->nome }}</td>
                                        <td>{{ $superhero->nomereal }}</td>
                                        <td>{{ str_limit($superhero->descricao, 30) }}</td>
                                        <td>{{ $superhero->superpoderes }}</td>
                                        <td>{{ $superhero->frasecomercial }}</td>
                                        <td>
                                            <img src="/SuperHerosImage/{{ $superhero->images }}" alt="" class="img-fluid">
                                    
                                        </td>
                                        <td>
                                            <a class="btn btn-outline-blue btn-rounded btn-sm px-2 waves-effect waves-light" href="{{ URL::to('/superheroMostrar/' . $superhero->id) }}"><i class="fa fa-eye mt-0"></i></a>

                                            <a class="btn btn-outline-green btn-rounded btn-sm px-2 waves-effect waves-light" href="{{ URL::to('/superheroEditar/' . $superhero->id) }}"><i class="fa fa-pencil mt-0"></i></a>
    	                              
                                            <a href="{{ route('deletaSuperhero', $superhero->id) }}" class="btn btn-outline-red btn-rounded btn-sm px-2 waves-effect waves-light" onclick="return confirm('Tens certeza que quer Deletar?')"><i class="fa fa-remove mt-0"></i></a>

                                        </td>
                                    </tr>
                                    @php
                                        $conta++;
                                    @endphp
                                @endforeach
	                        </tbody>
                        </table>
                        
                            <nav aria-label="Page navigation">
                                {{ $superheros->render() }}
                            </nav>



	                </div>

	            </div>
	            <!--/.Card content-->

	        </div>
	        <!--/.Card-->

	    </section>
    </div>

@endsection

@section('script')
    
    <script>
        $('.pagination li').addClass('page-item');
        $('.pagination li a').addClass('page-link');
        $('.pagination span').addClass('page-link');
    </script>

@endsection