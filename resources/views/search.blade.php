@extends('layouts.neko')


<script type="text/javascript">
    $('.menu .item')
  .tab();
</script>

@section('content')
<div class="ui top attached tabular menu">
  <a class="active item" data-tab="project">Project</a>
  <a class="item" data-tab="user">User</a>
</div>
<div class="ui bottom attached active tab segment" data-tab="project">
<div class="ui card">
  <a class="image" href="#">
    <img src="/images/avatar/large/steve.jpg">
  </a>
  <div class="content">
    <a class="header" href="#">Steve Jobes</a>
    <div class="meta">
      <a>Last Seen 2 days ago</a>
    </div>
  </div>
  <a class="extra content">
    <button class="fluid ui button">Attend</button>
  </a>
</div>
@endsection