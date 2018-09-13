@extends('layouts.neko')
@section('object')
<div class="ui top attached tabular menu">
  <a class="active item" data-tab="project">Project</a>
  <a class="item" data-tab="user">User</a>
</div>
<div class="stackable ui bottom attached active tab segment" data-tab="project">
    <div class="ui cards">
      <div class="card" href="#">
        <div class="content">
          <img class="right floated mini ui image" src="/images/avatar/large/elliot.jpg">
          <a class="header">
            This place is for project name.
          </a>
          <div class="meta">
            this place is for putting project's tag.
          </div>
        </div>
        <div class="extra content">
          <button class="fluid ui button">Attend</button>
        </div>
      </div>
      <div class="card" href="#">
        <div class="content">   
          <img class="right floated mini ui image" src="/images/avatar/large/elliot.jpg">
          <a class="header">
            This place is for project name.
          </a>
          <div class="meta">
            this place is for putting project's tag.
          </div>
          <div class="description">
            This place is for putting project's introduction
          </div>
        </div>
        <div class="extra content">
          <button class="fluid ui button">Attend</button>
        </div>
      </div>
      <div class="card" href="#">
        <div class="content">   
          <img class="right floated mini ui image" src="/images/avatar/large/elliot.jpg">
          <a class="header">
            This place is for project name.
          </a>
          <div class="meta">
            this place is for putting project's tag.
          </div>
        </div>
        <div class="extra content">
          <button class="fluid ui button">Attend</button>
        </div>
      </div>
      <div class="card" href="#">
        <div class="content">   
          <img class="right floated mini ui image" src="/images/avatar/large/elliot.jpg">
          <a class="header">
            This place is for project name.
          </a>
          <div class="meta">
            this place is for putting project's tag.
          </div>
          <div class="description">
            This place is for putting project's introduction
          </div>
        </div>
        <div class="extra content">
          <button class="fluid ui button">Attend</button>
        </div>
      </div>
      <div class="card" href="#">
        <div class="content">   
          <img class="right floated mini ui image" src="/images/avatar/large/elliot.jpg">
          <a class="header">
            This place is for project name.
          </a>
          <div class="meta">
            this place is for putting project's tag.
          </div>
          <div class="description">
            This place is for putting project's introduction
          </div>
        </div>
        <div class="extra content">
          <button class="fluid ui button">Attend</button>
        </div>
      </div>
      <div class="card" href="#">
        <div class="content">   
          <img class="right floated mini ui image" src="/images/avatar/large/elliot.jpg">
          <a class="header">
            This place is for project name.
          </a>
          <div class="meta">
            this place is for putting project's tag.
          </div>
          <div class="description">
            This place is for putting project's introduction
          </div>
        </div>
        <div class="extra content">
          <button class="fluid ui button">Attend</button>
        </div>
      </div>
    </div>
</div>
<div class="ui bottom attached tab segment" data-tab="user">
    <div class="ui cards">
      <div class="card">  
        <div class="content">   
          <img class="right floated mini ui image" src="/images/avatar/large/elliot.jpg">
          <a class="header">
            This place is for user name.
          </a>
          <div class="meta">
            this place is for putting user's tag.
          </div>
          <div class="description">
            This place is for putting user's tag
          </div>
        </div>
      </div>
    </div>
</div>
<script type="text/javascript">
    $('.menu .item')
  .tab();
</script>   
@endsection