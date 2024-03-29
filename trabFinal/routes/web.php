<?php

use Illuminate\Support\Facades\Route;
use phpDocumentor\Reflection\Types\Resource_;
use App\Http\Controllers\CursoController;


Route::get('/', function () { return view('index'); })->name('index');


Route::resource('/eixos', 'EixoController');
Route::resource('/cursos', 'CursoController');
Route::resource('/professores', 'ProfessorController');
Route::resource('/disciplinas', 'DisciplinaController');
Route::resource('/docencias','DocenciaController');
Route::resource('/alunos', 'AlunoController');
Route::resource('/matriculas', 'MatriculaController');
