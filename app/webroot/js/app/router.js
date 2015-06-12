// app.config.js
sellBird.config(['$stateProvider', '$urlRouterProvider','$provide', function($stateProvider, $urlRouterProvider,$provide){

 $urlRouterProvider.otherwise('/main');
  var url = 'http://localhost/sell_bird/';

 $stateProvider
 .state('main', {
    url: '/main',
    templateUrl: './landing',
    resolve: {
       loadMyCtrl: ['$ocLazyLoad', function($ocLazyLoad) {
         return $ocLazyLoad.load({
           name: 'sellBird',
           files: []

       });
     }]
 }
})
 .state('signup', {
    url: '/signup',
    templateUrl: './signup',
    resolve: {
       loadMyCtrl: ['$ocLazyLoad', function($ocLazyLoad) {
         return $ocLazyLoad.load({
           name: 'sellBird',
           files: [url+'js/app/signup/signupcontroller.js']

       });
     }]
 }
});

}]);