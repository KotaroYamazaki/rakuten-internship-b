@extends('layouts.neko')
@section('object')
    <div class="ui main text container">     
    </div>
    
    <div class="ui column centered grid">
        <div class="four wide column centerd row">
            <div class="ui card">
                <a class="image" href="#">
                    <img class="ui small image" src="//placekitten.com/300/{{ 500 + $user->user_id }}">
                </a>
                <div class="content">
                    <a class="header" href="#">
                        {{ Auth::user()->user_id === (int) $user->user_id ? 'You' : $user->name }}
                    </a>
                    <br>
                    <div class="meta">
                        @foreach($tags as $tag)
                            <a class="ui image label">
                                {{ $tag->tag_name }}
                            </a>
                        @endforeach
            
                    </div>
                </div>
                <div class="extra content">
                    <button class="positive ui button">{{ Auth::user()->user_id === (int) $user->user_id ? 'Edit' : 'Send message' }}</button>
                </div>
            </div>
        </div>
        <div class="eleven wide column">
            <h1>Who am I?</h1>
            <div class="ui divider"></div>
            <div class="ui message">
                <div class="content">
                    <div class="header"><h3>Introduction</h3></div>
                    <div class="description">
                        <br>
                        <p>{{ $user->introduction }}</p>
                    </div>
                </div>
            </div>
            <h1 class="ui header">Project List</h1>
            <div class="ui divider"></div>
            @foreach ($projects as $project)
                <div class="ui cards">
                    <div class="card">
                        <div class="ui content">
                            <a href="/projects?id={{ $project->project_id }}">
                                <img class="ui avatar image" src="//placekitten.com/300/{{ 600 + $project->project_id }}" alt='image'>
                            </a>
                            <div class="header">{{ $project->name }}</div>
                            <div class="description">
                                {{ $project->introduction }}
                            </div>
                        </div>
                        <div class="extra content">
                           
                            @foreach($project->tags as $tag)
                            <a class="ui image label">
                                {{ $tag->tag_name }}
                            </a>
                            @endforeach
                            
                            
                        </div>
                    </div>
                </div>
            @endforeach
        

        
            
        </div>        
    </div> 

@endsection
@section('title', $user->name . "'s profile")