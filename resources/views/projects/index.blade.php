@extends('layouts.neko')

@section('object')
    <div class="ui main text container">
    </div>
        
    <div class="ui column centered grid">
        <div class="five wide column centerd row" id="join">
            <div class="ui card">
                <a class="image" href="#">
                    <img class="ui small image" src="//placekitten.com/300/{{ 600 + $project->project_id }}">
                </a>
                <div class="content">
                    <br>
                    <div class="ui tag labels">
                        @foreach ($project->tags as $tag)
                            <a class="ui teal tag label">
                                {{ $tag->tag_name }}
                            </a>
                        @endforeach
                    </div>
                </div>
                <div class="extra content">
                    <input type="hidden" class="js-user_id" data-user_id="{{ Auth::user()->user_id }}">
                    <input type="hidden" class="js-project_id" data-project_id="{{ $project->project_id }}">
                    <button class="positive ui button" v-on:click="join()">Join Project</button>
                </div>
            </div>
        </div>
        <div class="ten wide column">
            <h1 class="ui header">{{ $project->name }}</h1>
            <div class="ui divider"></div>
            <div class="ui horizontal list">
                <div class="item">
                    <a clas="ui label" href="/users?id={{ $project->admin_user_id }}">
                        <img class="ui right spaced avatar image" src="//placekitten.com/300/{{ 500 + 10 * $project->admin_user_id }}" alt='image'>
                        {{ $project->admin->name }}
                        <div class="detail">Administrator</div>
                    </a>
                    
                </div>
                @foreach($project->users as $user)
                    <div class="item">
                        <a class="ui label" href="/users?id={{ $user->user_id }}">
                            <img class="ui right spaced avatar image" src="//placekitten.com/300/{{ 500 + 10 * $user->user_id }}" alt='image'>
                            {{ $user->name }}
                        </a>
                    </div>
                @endforeach
            </div>
        <br>
        <h1>What's this project for?</h1>
        <div class="ui divider"></div>
        <div class="ui message">
            <div class="content">
                <div class="header"><h3>About</h3></div>
                <div class="description">
                <p>{{ $project->introduction }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
<br>
<div id="apple">
    <div class="ui comments">
        <h3 class="ui dividing header">Comments</h3>
        <div v-for="message in messages">
            <div v-bind:class="{'mymessage' : isMyMessage(message)}">
                
                <div class="comment">
                    <a class="ui avatar image">
                        <img src="//placekitten.com/300/{{ 500 + 10 * $project->admin_user_id }}">
                    </a>
                    <div class="content">
                        <a class="author">{{ Auth::user()->name }}</a>
                    </div>
                    <div class="metadata">
                        <span class="data">read</span>
                    </div>
                    <div class="text">
                        @{{ message.message }}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <form class="ui reply form" v-on:submit.prevent>
        <div class="field">
            <input v-model="message" v-on:keydown.enter="send" type="text">
        </div>
        <button v-bind:disabled="message.length==0" v-on:click="send" class="ui basic button" type="submit">
            <i class="icon edit"></i>
            Send
        </button>  
    </form>
</div>
<script src="https://cdn.jsdelivr.net/npm/vue@2.5.16/dist/vue.js"></script> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.js"></script>
<script
      src="https://code.jquery.com/jquery-3.1.1.min.js"
      integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
      crossorigin="anonymous"></script>
<script src="https://www.gstatic.com/firebasejs/4.2.0/firebase.js"></script>
<script src="https://www.gstatic.com/firebasejs/3.8.0/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/3.8.0/firebase-database.js"></script>
<script type="text/javascript" src="{{ asset('js/script.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/join.js') }}"></script>

@endsection
@section('title', $project->name. "'s profile")