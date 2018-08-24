@extends('layouts.master')

@section('content')
<div class="home">
    <div class="bg color-top">
    	<span class="unselectable">/////////////&lt;div&gt;///////////////////////////////////////////////////////////</span>
    	<nav>
    		<div class="navigation">
    			<a href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();">
                    Logout
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
    		</div>
    	</nav>
    </div>
    <div class="panel centered">
    	<header>
    		<span>Projects</span>
    	</header>
    	<ul>
    		<a href="">
	    		<li>
	    			<span>Speech Input</span>
	    			<div class="progress"><div class="bar-0"></div></div>
	    			<div class="description">
	    				<h1>Speech Input</h1>
	    				<p>My first project making use of the Web Speech API. It changes styling of the page based on what the user says.</p>
	    			</div>
	    		</li>
    		</a>
    		<a href="">
	    		<li>
	    			<span>Portfolio Website</span>
	    			<div class="progress"><div class="bar-0"></div></div>
	    			<div class="description">
	    				<h1>Portfolio Website</h1>
	    				<p>A portfolio website where I show my projects, achievements and skills.</p>
	    			</div>
	    		</li>
    		</a>
    		<a href="">
	    		<li>
	    			<span>Website company</span>
	    			<div class="progress"><div class="bar-0"></div></div>
	    			<div class="description">
	    				<h1>Website company</h1>
	    				<p>A website where I offer websites for companies.</p>
	    			</div>
	    		</li>
    		</a>
    	</ul>
    </div>
    <div class="bg color-bottom">
    	<span class="unselectable">//.com////////////////////////////////////</span>
    </div>
</div>
@endsection
