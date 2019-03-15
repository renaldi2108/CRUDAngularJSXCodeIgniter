var app = angular.module("ren", ["ngRoute"]);
app.config(['$qProvider', function ($qProvider) {
  $qProvider.errorOnUnhandledRejections(false);
}]);

var BASE_API = "/crudandroid/data/";
app.config(function($routeProvider) {
  $routeProvider
  .when("/", {
    controller: ListController,
    templateUrl : BASE_URL+'maincontroller/listed'
  })
  .when("/add", {
    controller: AddController,
    templateUrl : BASE_URL+'maincontroller/input'
  })
  .when("/edit/:id", {
    controller: EditController,
    templateUrl : BASE_URL+'maincontroller/input'
  })
});

function AddController($scope, $location, $http) {
  $scope.save = function() {
    $http({
      url: BASE_API+"add",
      method: "POST",
      data: {"name":$scope.myData.name},
      headers: {  
          "Content-Type": "application/json"  
      }  
  }).then(function(response) {
      $location.path('/');
  }, 
  function(response) {
    console.log(response);
  });
  }
}

function ListController($scope, $http) {
    $http({
        url: BASE_API,
        method: "GET",
        data: {},
        headers: {  
            "Content-Type": "application/json"  
        }  
    }).then(function(response) {
        $scope.listData = response.data;
    }, 
    function(response) {
      console.log(response);
    });

    $scope.delete = function(item) {
      var alertConfirm = confirm("Apakah kamu ingin menghapus data ini??");
      if (alertConfirm == true) {
        var index = $scope.listData.data.indexOf(item);
        $scope.listData.data.splice(index, 1); 

        $http({
          url: BASE_API+"delete/"+item.id_data,
          method: "POST",
          data: {},
          headers: {
            'Content-Type': 'application/json'
          }
        }).then(function(response) {
        $scope.listData.splice(index, 1);
        }, function(response) {
          console.log(response);
        });
      }
    }
}

function EditController($scope, $location, $http, $routeParams) {
    $http({
        url: BASE_API+$routeParams.id,
        method: "GET",
        headers: {  
            "Content-Type": "application/json"  
        }  
    }).then(function(response) {
        $scope.myData = response.data.data;
    }, 
    function(response) {
      console.log(response);
    });

    $scope.isClean = function() {
        return angular.equals(this.original, $scope.myData);
      };

    $scope.save = function() {
      $http({
        url: BASE_API+"edit/"+$routeParams.id,
        method: "POST",
        data: {"name": $scope.myData.name},
        headers: {
          'Content-Type': 'application/json'
        }
      }).then(function(response) {
        $location.path('/');
      }, function(response) {
        console.log(response);
      });
    }

    $scope.delete = function() {
      var alertConfirm = confirm("Apakah kamu ingin menghapus data ini??");
      if (alertConfirm == true) {
        $http({
          url: BASE_API+"delete/"+$routeParams.id,
          method: "POST",
          data: {},
          headers: {
            'Content-Type': 'application/json'
          }
        }).then(function(response) {
          $location.path('/');
        }, function(response) {
          console.log(response);
        });
      }
    }
}