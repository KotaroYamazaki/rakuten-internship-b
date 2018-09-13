@extends('layouts.neko')

@section('object')


    <div id="app">
        <header>
            <h1 class="title is-5">Message</h1>
            <p class="chaturl subtitle"><a v-bind:href="developerSite" target="_blank"></a></p>
        </header>
        <div id="message-contents">
            <div v-for="message in messages" class="message-wrapper is-clearfix">
                <div class="box" v-bind:class="{'mymessage' : isMyMessage(message)}">
                    <div class="content">
                        <p>
                            <strong>{{ message.userName }}</strong>
                            <br>
                            <h4>{{ message.message }}</h4>
                        </p>
                    </div>
                </div>
            </div>
            Message
        </div>
        <footer>
            <div class="field is-ground">
                <div class="control is-expected">
                    <input v-model="message" v-on:keydown.enter="send" class="input is-medium" type="text" placeholder="Message">
                </div>
                <div class="control control-submit">
                    <button v-bind:disabled="message.length==0" v-on:click="send" class="button is-primary button-submit">Submit</button>
                </div>
            </div>
        </footer>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/babel-standalone/6.24.0/babel.js"></script> 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.js"></script>
    <script src="https://www.gstatic.com/firebasejs/4.2.0/firebase.js"></script>
    <script src="https://www.gstatic.com/firebasejs/3.8.0/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/3.8.0/firebase-database.js"></script>
    <script type="text/babel" src="script.js"></script>  
