myApp.controller('MoviesController', function ($scope, $firebaseArray, $location, moviesFactory) {

    //$scope.get = function () {
    //    var ref = new Firebase("https://burning-inferno-3260.firebaseio.com/movies");
    //    $scope.movies = $firebaseArray(ref);
    //};
    $scope.reset = function () {
        var ref = new Firebase("https://burning-inferno-3260.firebaseio.com/movies");
        ref.set(moviesFactory);
        $scope.movies = $firebaseArray(ref);
    };

    $scope.deleteMovie = function (movie) {
        $scope.movies.$remove(movie)
            .then
            (function (ref) {
                    // data has been deleted locally and in the database
                },
                function (error) {
                    console.log("Error:", error);
                }
            )
        ;
    };
    $scope.getIndex = function (movie) {
        return $scope.movies.indexOf(movie);
    };
    $scope.gotoEdit = function (path) {
        $location.path(path);
    };


    $scope.reset();

})
;