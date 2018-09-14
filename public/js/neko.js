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
      
      
    }
  })
  
  $('.menu .item')
    .tab();
});