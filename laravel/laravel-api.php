reference link for laravel api-:https://www.youtube.com/watch?v=k23eKfz5YqI&list=PL8p2I9GklV45jJzLsexf2_hNNafpCXw9k&index=47&ab_channel=phpstepbystep

step 1-: create a controller for api and create mwthod for api on that controller

step 2-: define route inside api.php route file give the path and set url 

Route::get("data",[TestapiController::class, 'getData']);

ex-: run this url like this -: http://localhost/laravel-crud/api/data

-==============join-query===========
reference link-: https://kirschbaumdevelopment.com/insights/power-joins


User::select('users.*')
->join('posts', 'posts.user_id', '=', 'users.id')
->join('comments', 'comments.post_id', '=', 'posts.id');