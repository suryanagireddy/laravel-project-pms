@extends('layouts.app')

@section('content')

<div class="col-md-9 col-lg-9 col-sm-9 pull-left">
<!-- Jumbotron -->
<div class="jumbotron">
    <h1>{{$company->name}}</h1>
    <p class="lead">{{$company->description}}</p>
    {{--<p><a class="btn btn-lg btn-success" href="#" role="button">Get started today</a></p>--}}
</div>

<div class="row  col-md-12 col-lg-12 col-sm-12" style="background: white; margin: 10px; ">
    <a href="/projects/create/{{ $company->id }}" class="pull-right btn btn-default btn-sm" >Add Project</a>
    @foreach($company->projects as $project)
        <div class="col-lg-4 col-md-4 col-sm-4">
        <h2>{{ $project->name }}</h2>
        <p class="text-danger">{{ $project->description }}</p>
        <p><a class="btn btn-primary" href="/projects/{{ $project->id }}" role="button">View project &raquo;</a></p>
    </div>
    @endforeach
</div>
</div>
<!-- Sidebar -->
<div class="col-sm-3 col-md-3 col-lg-3 pull-right ">
    {{--<div class="sidebar-module sidebar-module-inset">--}}
        {{--<h4>About</h4>--}}
        {{--<p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>--}}
    {{--</div>--}}
    <div class="sidebar-module">
        <h4>Actions</h4>
        <ol class="list-unstyled">
            <li><a href="/companies/{{$company ->id}}/edit"><i class="fa fa-edit" aria-hidden="true"></i>Edit</a></li>
            <li><a href="/projects/create/{{ $company->id }}"><i class="fa fa-plus-circle" aria-hidden="true"></i>Add Project</a></li>
            <li><a href="/companies"><i class="fa fa-building" aria-hidden="true"></i>List of Companies</a></li>
            {{--<li><a href="/company/create">Create new Company</a></li>--}}

            <br/>
            <li>
                <i class="fa fa-power-off" aria-hidden="true"></i>
                <a href="#" onclick=" var result = confirm('Are you sure you wish to delete this Company?');
                      if( result ){
                              event.preventDefault();
                              document.getElementById('delete-form').submit();
                      }">Delete
                </a>

                <form id="delete-form" action="{{ route('companies.destroy',[$company->id]) }}"
                      method="POST" style="display: none;">
                    <input type="hidden" name="_method" value="delete">
                    {{ csrf_field() }}
                </form>
            </li>
        </ol>
    </div>
    {{--<div class="sidebar-module">--}}
        {{--<h4>Members</h4>--}}
        {{--<ol class="list-unstyled">--}}
            {{--<li><a href="#">March 2014</a></li>--}}
        {{--</ol>--}}
    {{--</div>--}}
</div>

@endsection