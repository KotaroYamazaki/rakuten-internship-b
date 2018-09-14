var userId = $('input.js-user_id').data('user_id');
var projectId = $('input.js-project_id').data('project_id');
console.log('user_id: ' + userId);
console.log('project_id: ' + projectId);
console.log("heeeey");

var url = 'https://5f73a780fc074ffdb5b196cc83a1f54a.vfs.cloud9.ap-southeast-1.amazonaws.com/api';
var join = new Vue({
    el: '#join',
    methods: {
        join: function () {
            console.log("requested!");
            fetch(url + '/request', {
              method: 'POST',
              headers: {'Content-Type': 'application/json'},
              body: JSON.stringify({
                  user_id: userId,
                  project_id: projectId,
                  state: "applied"
              })
            })
            .then(function (response) {
                if (response.status == 200) {
                    return response.json();
                }
                // 200番以外のレスポンスはエラーを投げる
                return response.json().then(function (json) {
                    console.log(json);
                    throw new Error(json.message);
                });
            })
            .then(function (json) {
            // レスポンスが200番で返ってきたときの処理はここに記述する
              console.log(json);
              alert("Requested!");
            })
            .catch(function (err) {
            // レスポンスがエラーで返ってきたときの処理はここに記述する
                console.log(err);
            });
      }
    }
})
