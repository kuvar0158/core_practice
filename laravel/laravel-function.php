1-: findOrFail
2-: firstOrFail
3-: updateOrCreate
4-: Flight::truncate();
$flight = Flight::findOrFail(1);
$countryExit = Countries::findOrFail(3, ['country_id', 'content_id', 'language']);

-------============== laravel debug============-------------------------
echo "<pre>";
print_r(get_class_methods($countryExit));
die;

$flight = Flight::where('legs', '>', 3)->firstOrFail();
