=================nova relationship-========================

BelongsTo::make() can take 3 arguments.

They are:

Name to display
Name of the relationship
Nova resource
In your particular case, this should work

BelongsTo('Events', 'clientLocation', App\Nova\ClientLocation::class)

==================generate model using infoyem ========================================
refrence link-: https://www.infyom.com/open-source/laravelgenerator/docs/8.0/generator-options#supported-api-params

php artisan infyom:scaffold $MODEL_NAME


php artisan infyom:scaffold DoctorSuggestedQuestion