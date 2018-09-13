<!-- resources/views/layouts/default.blade.phpとして保存 -->
<!DOCTYPE html>
<html lang="eg">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdn.jsdelivr.net/npm/vue@2.5.17/dist/vue.js"></script>
    
    <title>@yield('title')</title>
</head>
<style type="text/css">
    body {
      background-color: #FFFFFF;
    }
    .ui.menu .item img.logo {
      margin-right: 1.5em;
    }
    .main.container {
      margin-top: 7em;
    }
    .wireframe {
      margin-top: 2em;
    }
    .ui.footer.segment {
      margin: 5em 0em 0em;
      padding: 5em 0em;
    }
</style>
<body>
  <div>
    <div id="app">
      <div class="ui fixed menu">
        <a class="header item">
          <img class="avatar image" src="{{ asset('storage/icons/app_icons/app_icon_face.png') }}">
        </a>
        <a href="/users?id={{ Auth::user()->user_id }}" class="header item">
            <img class="ui avatar image" src="//placekitten.com/300/{{ 500 + Auth::user()->user_id }}" alt='image'>
          　{{ Auth::user()->name }}
        </a>
        <a href="{{ url('search') }}" class="item">Search</a>
       
        <div class="right menu">
          <div class="item ui dropdown" id="dropdown" v-on:click="open">
            <i class="comment icon"></i>
            <i class="dropdown icon"></i>
            <div class="menu">
              <div v-for="element in items">
                <div class="item">@{{ element.name }}</div>
                <button class="ui button">
                  <i class="check icon"></i>
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
      <section>
        <div class="ui modal container" v-bind:class="{ active: isActive }">
          <div class="header">Header</div>
          <div class="content">
            <div v-for="(element, index) in items">
              <div class="ui segment">
                <div class="ui grid">
                  <div class="thirteen wide column">@{{ element.project_name}} from @{{ element.name }}</div>
                  <button class="ui icon button basic one wide column" v-on:click="approve(element.user_project_id, index)"><i class="check icon"></i></button>
                  <button class="ui icon button basic one wide column" v-on:click="reject(element.user_project_id, index)"><i class="close icon"></i></button>
                </div>
              </div>
            </div>
            <div><button class="ui basic button" v-on:click="close">Close</button></div>
          </div>
        </div>
      </section>
      </div>
      <div class="ui main text container">
              {{-- コンテンツの表示 --}}
              @yield('content')
      </div>
      <div class="ui container" style="margin:0em 0em 4em;">
        {{-- コンテンツの表示 --}}
            @yield('object')
      </div>
      
      <div class="ui inverted vertical footer segment">
          <div class="ui center aligned container">
              <div class="ui stackable inverted divided grid">
              
                  <div class="ui inverted section divider"></div>
                  <div class="ui horizontal inverted small divided link list">
                      <a class="item" href="#">Site Map</a>
                      <a class="item" href="#">Contact Us</a>
                      <a class="item" href="#">Terms and Conditions</a>
                      <a class="item" href="#">Privacy Policy</a>
                  </div>
              </div>
          </div>
      </div>
    </div>
    <input type="hidden" class="js-user_id" data-user_id="{{ Auth::user()->user_id }}">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.3.3/semantic.css">
    <script
      src="https://code.jquery.com/jquery-3.1.1.min.js"
      integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
      crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.3.3/semantic.js"></script>
    <script type="text/javascript" src="{{ secure_asset('js/neko.js') }}"></script>
</body>
</html>