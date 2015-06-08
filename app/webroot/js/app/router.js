// app.config.js
sellBird.config(['$stateProvider', '$urlRouterProvider', function($stateProvider, $urlRouterProvider){

 $urlRouterProvider.otherwise('/main');

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
           files: []

       });
     }]
 }
});

}]);