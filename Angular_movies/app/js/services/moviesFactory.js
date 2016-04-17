/**
 * Created by Emmanuelle on 05/04/2016.
 */
myApp.factory('moviesFactory', function ($firebaseArray) {
    var data = {
        get: function () {
            var ref = new Firebase("https://burning-inferno-3260.firebaseio.com/movies");
            $firebaseArray(ref);
        }
    };
    return data;
});

//myApp.factory('moviesFactory', function ($resource) {
//    //return $resource("http://skylightbubble.com/movies.json:movie", {movie: "@id"},
//    return $resource("http://skylightbubble.com/movies.json",
//        {
//            'update': {method: 'PUT'}
//        });
//});