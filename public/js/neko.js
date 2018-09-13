var vm = new Vue({
  el: '#app',
  data: {
    isActive: false,
    items: []
  },
  methods: {
    open: function () {
      vm.isActive = true
      console.log(vm.isActive)
      fetch( 'https://5f73a780fc074ffdb5b196cc83a1f54a.vfs.cloud9.ap-southeast-1.amazonaws.com/api/requests/5', {
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
    }
  }
})