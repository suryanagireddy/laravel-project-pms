@extends('layouts.app')

@section('content')



<div class="row col-md-9 col-lg-9 col-sm-9 pull-left " style="background: white;">
<h1>Update project</h1>

      <!-- Example row of columns -->
      <div class="row  col-md-12 col-lg-12 col-sm-12" >

      <form method="post" action="{{ route('projects.update',[$project->id]) }}">
                            {{ csrf_field() }}

                            <input type="hidden" name="_method" value="put">

                            <div class="form-group">
                                <label for="project-name">Name<span class="required">*</span></label>
                                <input   placeholder="Enter name"  
                                          id="project-name"
                                          required
                                          name="name"
                                          spellcheck="false"
                                          class="form-control"
                                          value="{{ $project->name }}"
                                           />
                            </div>


                            <div class="form-group">
                                <label for="company-content">Description</label>
                                <textarea placeholder="Enter description" 
                                          style="resize: vertical" 
                                          id="company-content"
                                          name="description"
                                          rows="5" spellcheck="false"
                                          class="form-control autosize-target text-left">
                                          {{ $project->description }}</textarea>
                            </div>
                            <div class="form-group">
                                <input type="submit" class="btn btn-primary"
                                       value="Submit"/>
                            </div>
                        </form>
      </div>
</div>


<div class="col-sm-3 col-md-3 col-lg-3 pull-right">
          <div class="sidebar-module">
            <h4>Actions</h4>
            <ol class="list-unstyled">
              <li><a href="/project/{{ $project->id }}"><i class="fa fa-building-o" aria-hidden="true"></i> View project</a></li>
              <li><a href="/projects"><i class="fa fa-building" aria-hidden="true"></i> All projects</a></li>
            </ol>
          </div>
        </div>


    @endsection