@extends('layouts.account')

@section('content')
	<div class="panel centered">
		<header>
			<span>Projecten</span>
		</header>
		<ul>

			@foreach ($projects as $project)
				<a href="/project/{{ $project->url }}">
					<li>
						<span>{{ $project->title }}</span>
						<div class="progress"><div class="bar-{{ $project->progress }}"></div></div>
						<div class="description">
							<h1>{{ $project->title }}</h1>
							<p>{{ $project->desc }}</p>
						</div>
					</li>
				</a>
			@endforeach

			<a href=/project/new>
				<li>
					<span>+ Nieuw project</span>
				</li>
			</a>

    	</ul>
    </div>
@endsection
