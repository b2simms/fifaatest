app.factory('matches', ['$http', function($http) { 
  return $http.get('http://localhost/fifa/index.php/matches') 
            .success(function(data) { 
              return data; 
            }) 
            .error(function(err) { 
              return err; 
            }); 
}]);