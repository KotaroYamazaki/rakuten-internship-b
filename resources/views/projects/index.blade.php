@extends('layouts.neko')

@section('content')
  <h1>PROJECT NAME: {{ $project_name }}</h1>
  <?php
    // $project_name = DB::table('projects')
    //                 ->leftjoin('user_project', 'projects.project_id', '=', 'user_project.project_id')
    //                 ->where('user_id', $user_id)
    //                 ->value('name');
    // better to move to controller
    
    // このロジックをこのトローラー側に移動してください！
    $tag_name = DB::table('tag')
                ->leftjoin('tag_user_project', 'tag.tag_id', '=', 'tag_user_project.tag_id')
                ->where([['target_id', $project_id],['taeget_type','project_id']]) //need to add target_type = project_id? 
                ->value('tag_name'); //                ↑ スペルミス？
    ?>
    <h1>TAGS: {{$tag_name}}</h1>
@endsection
@section('title', "$project_name's profile")