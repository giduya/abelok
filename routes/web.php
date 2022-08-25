<?php

Route::name('users.authenticate')->post('/users/authenticate', 'UserController@authenticate');
Route::name('users.me')->get('/users/me', 'UserController@me');
Route::name('users.update-password')->post('/users/update-password', 'UserController@updatePassword');
Route::resource('users', 'UserController', ['except' => ['create', 'edit']]);


Route::name('node.logo')->post('/node-logo', 'NodesController@logo');
Route::name('node.index')->get('/node', 'NodesController@index');
Route::name('node.update')->put('/node', 'NodesController@update');


Route::resource(
    'catalogs',
    'CatalogsController',
    ['except' => ['create', 'edit']]
);
Route::resource(
    'catalogs.options',
    'CatalogOptionsController',
    ['except' => ['create', 'edit']]
);

Route::resource(
  'affiliation-areas',
  'AffiliationAreaController',
  ['except' => ['create', 'edit']]
);

Route::resource(
    'sections',
    'SectionsController',
    ['except' => ['create', 'edit']]
);

Route::resource(
    'questions',
    'QuestionsController',
    ['except' => ['create', 'edit']]
);

Route::resource(
    'sections.questions',
    'SectionsQuestionsController',
    ['except' => ['create', 'edit']]
);

Route::name('sections.assign-question')
    ->post(
    '/sections/{section}/assign-questions/{question}',
    'SectionsQuestionsController@assign_question'
    );


Route::name('utils.states')->get(
    '/utils/states',
    'UtilsController@states'
);
Route::name('utils.municipalities')->get(
    '/utils/municipalities',
    'UtilsController@municipalities'
);

Route::resource(
    'declarants',
    'DeclarantsController',
    ['except' => ['create', 'edit']]
);

// Route::resource(
//     'node.users',
//     'NodeUsersController',
//     ['except' => ['create', 'edit']]
// );

// Route::name('node.users.search')->post('/node-users-search', 'NodeUsersController@search');

Route::name('declarants.reset-password')->post('/declarants/{id}/reset-password', 'DeclarantsController@resetPassword');
Route::name('declarants.reset-password')->post('/declarants-import', 'DeclarantsController@import');
Route::name('declarants.reset-password')->post('/declarants-import-validate', 'DeclarantsController@validate_import_file');
Route::name('declarants.resume')->get('/declarants-resume', 'DeclarantsController@resume');
Route::name('declarants.download')->get('/download', 'DeclarantsController@download');


Route::resource(
    'declarations',
    'DeclarationsController',
    ['except' => ['create', 'edit']]
);

Route::resource(
    'user.declarations',
    'UserDeclarationsController',
    ['except' => ['create', 'edit']]
);

Route::name('declarants.print-declaration')
->get(
    '/user/{user}/declarations/{declaration}/print',
    'UserDeclarationsController@printDeclarationPrivate'
);

Route::name('declarants.print-declaration-public')
->get(
    '/user/{user}/declarations/{declaration}/print-public',
    'UserDeclarationsController@printDeclaration'
);

Route::name('declarants.print-acuse')
->get(
    '/user/{user}/declarations/{declaration}/print-acuse',
    'UserDeclarationsController@printAcuse'
);

Route::name('declarants.sign-declaration')
->put(
    '/user/{user}/declarations/{declaration}/sign',
    'UserDeclarationsController@sign'
);

Route::resource(
    'questions.conditions',
    'QuestionsConditionsController',
    ['except' => ['create', 'edit']]
);

Route::resource(
    'declarations.generaldata',
    'DeclarationsGeneralDataController',
    ['except' => ['create', 'edit']]
);

Route::resource(
  'declarations.domicile',
  'DeclarationsDomicileController',
  ['except' => ['create', 'edit']]
);

Route::resource(
    'declarations.scholarships',
    'DeclarationsScholarshipsController',
    ['except' => ['create', 'edit']]
);

Route::resource(
  'declarations.employment',
  'DeclarationsEmploymentController',
  ['except' => ['create', 'edit']]
);

Route::resource(
    'declarations.work-experience',
    'DeclarationsWorkExperienceController',
    ['except' => ['create', 'edit']]
);

Route::resource(
    'declarations.economic-dependents',
    'DeclarationsEconomicDependentsController',
    ['except' => ['create', 'edit']]
);

Route::resource(
    'declarations.net-income',
    'DeclarationsNetIncomeController',
    ['except' => ['create', 'edit']]
);

Route::resource(
  'declarations.public-officials',
  'DeclarationsPublicOfficialsController',
  ['except' => ['create', 'edit']]
);

Route::resource(
  'declarations.property',
  'DeclarationsPropertiesController',
  ['except' => ['create', 'edit']]
);

Route::resource(
    'declarations.vehicles',
    'DeclarationVehiclesController',
    ['except' => ['create', 'edit']]
);

Route::resource(
  'declarations.movable-property',
  'DeclarationsMovablePropertiesController',
  ['except' => ['create', 'edit']]
);

Route::resource(
    'declarations.investments',
    'DeclarationInvestmentsController',
    ['except' => ['create', 'edit']]
);

Route::resource(
  'declarations.debts',
  'DeclarationsDebtsController',
  ['except' => ['create', 'edit']]
);

Route::resource(
    'declarations.loans',
    'DeclarationsLoansController',
    ['except' => ['create', 'edit']]
);

Route::resource(
    'declarations.spousedata',
    'DeclarationsSpouseDataController',
    ['except' => ['create', 'edit']]
);

Route::resource(
    'declarations.participation-companies',
    'DeclarationsParticipationCompaniesController',
    ['except' => ['create', 'edit']]
);

Route::resource(
    'declarations.decision-companies',
    'DeclarationsDecisionCompaniesController',
    ['except' => ['create', 'edit']]
);

Route::resource(
    'declarations.public-supports',
    'DeclarationsPublicSupportsController',
    ['except' => ['create', 'edit']]
);

Route::resource(
    'declarations.representations',
    'DeclarationsRepresentationsController',
    ['except' => ['create', 'edit']]
);

Route::resource(
    'declarations.customers',
    'DeclarationsCustomersController',
    ['except' => ['create', 'edit']]
);

Route::resource(
    'declarations.private-benefits',
    'DeclarationsPrivateBenefitsController',
    ['except' => ['create', 'edit']]
);

Route::resource(
    'declarations.trusts',
    'DeclarationsTrustsController',
    ['except' => ['create', 'edit']]
);

Route::resource(
  'declarations.clarification',
  'ClarificationsController',
  ['except' => ['create', 'edit']]
);

Route::prefix('/admin')->group(function () {
    Route::get('/', 'DomainController@admin');

    Route::view('/{path?}', 'admin')
        ->where('path', '.*')
        ->name('react');
});

Route::prefix('/comptroller')->group(function () {
    Route::get('/', 'DomainController@comptroller');

    Route::view('/{path?}', 'comptroller')
        ->where('path', '.*')
        ->name('react');
});

Route::prefix('/')->group(function () {
    Route::get('/', 'DomainController@users');
    Route::view('/{path?}', 'users')
        ->where('path', '.*')
        ->name('react');
});
