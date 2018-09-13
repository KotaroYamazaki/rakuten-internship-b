$(function () {
  
  
  var userId = $('input.js-user_id').data('user_id');
  console.log(userId);
  
  var url = 'https://5f73a780fc074ffdb5b196cc83a1f54a.vfs.cloud9.ap-southeast-1.amazonaws.com/api';
  
  var vm = new Vue({
    el: '#app',
    data: {
      isActive: false,
      items: []
    },
    methods: {
      open: function () {
        vm.isActive = true;
        console.log(vm.isActive)
        fetch(url + '/requests/' + userId, {
          method: 'GET'
        })
        .then(function(response) {
          return response.json();
        }).then(function(json) {
          vm.items = json;
          console.log(json)
          console.log(vm.items);
        }).catch(function (error) {
          console.log(error);
        });
      },
      
      close: function () {
        vm.isActive = false;
      },
      
      approve: function ($user_project_id, $index) {
        fetch(url + '/approve/' + $user_project_id, {
          method: 'PUT'
        })
        .then(function(response) {
          return response.json();
        }).then(function(json) {
        }).catch(function (error) {
          console.log(error);
          vm.items.splice($index, 1);
        });
      },
      
      reject: function ($user_project_id, $index) {
        fetch(url + '/reject/' + $user_project_id, {
          method: 'PUT'
        })
        .then(function(response) {
          return response.json();
        }).then(function(json) {
        }).catch(function (error) {
          console.log(error);
          vm.items.splice($index, 1);
        });
      },
      
      join: function ($project_id) {
        fetch(url + '/store', {
          method: 'POST',
          body: JSON.stringify({
              user_id: userId,
              project_id: project_id,
              state: 'applied'
          })
        })
        .then(function (response) {
            if (response.status == 200) {
                return response.json();
            }
            // 200番以外のレスポンスはエラーを投げる
            return response.json().then(function (json) {
                throw new Error(json.message);
            });
        })
        .then(function (json) {
        // レスポンスが200番で返ってきたときの処理はここに記述する
          console(json);
        })
        .catch(function (err) {
        // レスポンスがエラーで返ってきたときの処理はここに記述する
        });
      }
    }
  })
  
  $('.menu .item')
    .tab();
});