@extends('layouts.default')

@section('content')
  <h1>USER NAME: {{ $user_name }}</h1>
  <?php
    $project_name = DB::table('projects')
                    ->leftjoin('user_project', 'projects.project_id', '=', 'user_project.project_id')
                    ->where('user_id', $user_id)
                    ->value('name');
    $tag_name = DB::table('tag')
                ->leftjoin('tag_user_project', 'tag.tag_id', '=', 'tag_user_project.tag_id')
                ->where('target_id', $user_id)
                ->value('tag_name');
    ?>
    <h1>TAGS: {{$tag_name}}</h1>
    <h1>PROJECTS: {{$project_name}}</h1>
@endsection
@section('title', "$user_name's profile")