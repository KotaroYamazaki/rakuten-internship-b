@extends('layouts.neko')
@section('object')

<form method="get" action="/search">
  <div class="ui right labeled left icon input">
    <i class="tags icon"></i>
    <input name="id">
    <button class="ui tag label">
      Add Tag
    </button>
  </div>
</form>

<div class="ui top attached tabular menu">
  <a class="active item" data-tab="project">Project</a>
  <a class="item" data-tab="user">User</a>
</div>
<div class="ui bottom attached active tab segment" data-tab="project">
    <div class="ui cards">
      @foreach ($projects as $project)
        <div class="ui card">
          <div class="content">
            <a class="header" href="/projects?id={{ $project->project_id }}">
              <img class="floated ui image avatar" src="//placekitten.com/300/{{ 600 + $project->project_id }}">
            </a>
            {{ $project -> name}}
          </div>
          <div class="extra content"> 
            <button class="fluid ui button">Join Project</button>
          </div>
        </div>
      @endforeach
    </div>
</div>
<div class="ui bottom attached tab segment" data-tab="user">
    <div class="ui cards">  
      @foreach ($users as $user)
      <div class="ui card" href="">
        <div class="content">
          <a class="header" href="/users?id={{ $user->user_id }}">
            <img class="floated ui image avatar" src="//placekitten.com/300/{{ 500 + $user->user_id }}">
          </a>
          {{ $user->name }}
        </div>
        <div class="extra content">
          <button class="fluid ui button">Attend</button>
        </div>
      </div>
      @endforeach
    </div>
</div>
@endsection