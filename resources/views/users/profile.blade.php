@extends('layouts.neko')

@section('content')

<!--
メモ：
このページは自分のページか他人のページを区別する為に、
Auth::user()->user_id
を使って、このページのユーザIDと比較して、
同じだったら、自分の詳細ページ（編集とかのボタンを表示）
違ったら、他人のページ（何々招待とかを表示）

例）
  @if (Auth::user()->user_id === $user_id)
    <h1>あなたのプロフィール</h1>
  @else
    <h1>{{ $user_name }}のプロフィール</h1>
  @endif
  
  or
  
  <h1>{{ Auth::user()->user_id === $user_id ? 'あなた' : $user_name }}のプロフィール</h1>
  
  or
  
  コントローラー側でやって、$user_id に代入する
-->
  <h1>{{ Auth::user()->user_id === (int) $user_id ? 'あなた' : $user_name }}のプロフィール</h1>
  <h1>USER NAME: {{ $user_name }}</h1>
  
    <h2>INTRODUCTION: {{$introduction}}</h2>
    <h2>TAGS: {{$tag_name}}</h2>
    <h2>PROJECTS:</h2>
    <ul>
      @foreach ($projects as $project)
        <li>{{$project->name}}</li>
      @endforeach
    </ul>
@endsection
@section('title', "$user_name's profile")