myApp.controller('MovieFormController', function ($scope,$http) {
    $scope.submitMovie = function (movie) {
            movie.postedOn = new Date().getTime();
            $scope.movies.$add(movie).then(
                function(ref){
                    $scope.movie="";
                    $scope.goto("/movies");
                }
            );

    };
    $scope.goto = function (path) {
        $location.path(path);
    };
});

