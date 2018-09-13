<!-- resources/views/layouts/default.blade.phpとして保存 -->

<!DOCTYPE html>
<html lang="eg">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.9/semantic.min.css"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.9/semantic.min.js"></script>
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
    <div class="ui fixed inverted menu">
        <div class="ui container">
          <a href="#" class="header item">
            <img class="logo" src="data:image/png;base64,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">
            　User Name
          </a>
          <a href="#" class="item">Message</a>
          <a href="#" class="item">Search</a>
        </div>
    </div> 
    <div class="ui main text container">
            {{-- コンテンツの表示 --}}
            @yield('content')        
    </div>
      {{-- コンテンツの表示 --}}
            @yield('object')


    <div class="ui inverted vertical footer segment">
        <div class="ui center aligned container">
            <div class="ui stackable inverted divided grid">
            
                <div class="ui inverted section divider"></div>
                <img src="assets/images/logo.png" class="ui centered mini image">
                <div class="ui horizontal inverted small divided link list">
                    <a class="item" href="#">Site Map</a>
                    <a class="item" href="#">Contact Us</a>
                    <a class="item" href="#">Terms and Conditions</a>
                    <a class="item" href="#">Privacy Policy</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>