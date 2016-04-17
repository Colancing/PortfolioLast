myApp.controller('MovieEditController', function ($scope, $routeParams, $location, $firebaseArray) {

    var ref = new Firebase("https://burning-inferno-3260.firebaseio.com/movies");
    $scope.movies = $firebaseArray(ref);
    $scope.movies.$loaded().then(function (data) {
        $scope.movie = data[$routeParams.id];
        $scope.editMovie = function () {
            $scope.movies.$save($scope.movie)
                .then(function () {
                        $scope.goto("/movies")
                    },
                    function (error) {
                        console.log("Error:", error);
                    }
                )
            ;
        }
    });

    $scope.goto = function (path) {
        $location.path(path);
    };
});
