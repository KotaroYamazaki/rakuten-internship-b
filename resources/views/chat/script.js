let app = new Vue({
    el: '#app',
    created: function(){
        let inputedUserName = window.prompt("Input your user name", "");
        this.userName = inputedUserName

        if(inputedUserName.length == 0){
            let dummyNameList = ['Riu','Pedro','Yosyy', 'Teppy'];
            this.userName =  dummyNameList[Math.floor(Math.random() * dummyNameList.length)];
        }

        this.setupFirebase()
        this.setupChat()
        this.loadMessage()
    },

    data: {
        message: "",
        userName: "",
        userId: Math.random().toString(36).slice(-8),
        messages: [],
        developerName: "",
        developerSite: ""
    },


    methods: {
        setupFirebase: function(){
            var config = {
                apiKey: "AIzaSyAy140OpzHCJRGYf6plHZbLl57UJCTnRC0",
                authDomain: "rakuten-fd9f8.firebaseapp.com",
                databaseURL: "https://rakuten-fd9f8.firebaseio.com",
                projectId: "rakuten-fd9f8",
                storageBucket: "rakuten-fd9f8.appspot.com",
                messagingSenderId: "700654965875"
            };
            firebase.initializeApp(config);
        },

        setupChat: function(){
            let ref = firebase.database().ref('message')
            let hash = location.hash

            if(hash != null && hash.length > 0){
                let chatId = hash.slice(1);
                this.chatRef = ref.child(chatId)
                console.log("read", chatId)
            }
            else{
                let createdAt = this.timestamp()

                this.chatRef = ref.push()

                this.chatRef.set({
                    createdAt: createdAt
                , createdAtReverse: -createdAt
            })

            location.href = location.origin + location.pathname + "#" + this.chatRef.key
            console.log("create chat", this.chatRef.key)
        }
    },

    // Send message
    send: function(event){
        if(this.message.length == 0){
            return;
        }

        // New Message
        let messageRef = firebase.database().ref('messages').push()
        let createdAt = this.timestamp()

        // Save message
        let chat = this.chatRef.key
        messageRef.set({
            chat: chat
            , message: this.message
            , userName: this.userName
            , userId: this.userId
            , createdAt: createdAt
            , createdAtReverse: -createdAt
        })

        // initialize input form
        this.message = ""
    }

    // Read Message
    , loadMessage:function(){
        let chatKey = this.chatRef.key
        let loadRef = firebase.database().ref("messages").orderByChild("chat").equalTo(chatKey)

        // fetch all
        loadRef.once('value').then((snapshot) => {

            var messages = []            
            snapshot.forEach(function(childSnapshot) {
                var data = childSnapshot.val()
                data.key = childSnapshot.key
                messages.push(data)
            })

            // sort by date
            messages.sort(function(a,b){
                if( a.createdAt < b.createdAt ) return -1;
                if( a.createdAt > b.createdAt ) return 1;
                return 0;
            });

            // 
            this.messages = messages

            // 
            this.observeMessage()

            // 
            this.scrollToBottom()
        });
    },

    // Ovserbation
    observeMessage: function(){
        let chatKey = this.chatRef.key
        let chatRef = firebase.database().ref("messages").orderByChild("chat").equalTo(chatKey)
        chatRef.on("child_added", (snapshot) => {
            let newMessage = snapshot.val()
            newMessage.key = snapshot.key
            for(var i=0,max=this.messages.length;i<max;i++) {
                let message = this.messages[i]
                if(message.key == newMessage.key){
                    return
                }
            }


            this.messages.push(newMessage)
            this.scrollToBottom()
        })
    },

    // scroll down
    scrollToBottom :function() {
        setTimeout(()=>{
            let height = Math.max(0, document.body.scrollHeight - document.body.clientHeight)
            anime({
                targets: "body",
                scrollTop: height,
                duration: 200,
                easing: "easeInQuad"
            });
        }, 100)
    },

    // My message?
    isMyMessage: function(message){
        return this.userId == message.userId
    },
    timestamp: function(){
        let date = new Date()
        let timestamp = date.getTime()
        return Math.floor( timestamp / 1000 )
    }
  }
})
