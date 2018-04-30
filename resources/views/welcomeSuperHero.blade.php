@extends('layout')

@section('content')
	
	<div class="container">
	
	<section class="section team-section text-center pb-3 wow fadeIn" data-wow-delay="0.3s" style="visibility: visible; animation-name: fadeIn; animation-delay: 0.3s;">

	    <!--Section heading-->
	    <h1 class="section-heading h1 pt-4">SuperHero</h1>
	    <!--Section description-->
	    <p class="section-description mb-5 pb-3">Um super-herói é um personagem modelo fictício "sem precedentes das proezas físicas dedicadas aos atos em prol do interesse público". Com no nosso sistema: SuperHero podemos gerenciar todos os super herois Vamos conhecer ...</p>

	    <a href="{{ URL::to('/superhero') }}" class="btn btn-outline-blue btn-rounded wow fadeInLeft waves-effect waves-light" data-wow-delay="0.3s" style="visibility: visible; animation-name: fadeInLeft; animation-delay: 0.3s;">Entre agora</a>

	</section>
	</div>

@endsection