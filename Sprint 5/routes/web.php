<?php

// SOLIDARIE-VAGAS
Route::get('/', function () {
    return view('welcome');
})->name('welcome');
//BUSCAS
Route::get('/busca', 'BuscaController@index')->name('busca.index');
Route::post('/busca/{servico}', 'BuscaController@pesquisar')->name('busca.pesquisar');
Route::get('/busca/{id}', 'BuscaController@retornar')->name('busca.retornar');
//SERVICOS
Route::get('/servicos', function () {
    return view('servicos');
})->name('servicos');

Route::get('/cadastro', function () {
    return view('cadastro');
})->name('cadastro');


// ÁREA ADM - LOGADO
//HOME-LOGADO
Route::get('/adm/home', function () {
    return view('adm.home');
})->name('adm.home');

//NÍVEL ACESSO
Route::get('/adm/niveis-acesso', 'Adm\NiveisAcessoController@index')->name('adm.niveis-acesso.index');
// criar
Route::get('/adm/niveis-acesso/criar', 'Adm\NiveisAcessoController@criar')->name('adm.niveis-acesso.criar');
Route::post('/adm/niveis-acesso/criar', 'Adm\NiveisAcessoController@criarNivelAcesso')->name('adm.niveis-acesso.criarNivelAcesso');
// editar
Route::get('/adm/niveis-acesso/editar', 'Adm\NiveisAcessoController@editar')->name('adm.niveis-acesso.editar');
Route::put('/adm/niveis-acesso/editar/{id}', 'Adm\NiveisAcessoController@atualizarNivelAcesso')->name('adm.niveis-acesso.atualizarNivelAcesso');
// excluir
Route::delete('/adm/niveis-acesso/excluir/{id}', 'Adm\NiveisAcessoController@excluirNivelAcesso')->name('adm.niveis-acess.excluirNivelAcesso');

//USUARIOS
Route::get('/adm/usuarios', 'Adm\UsuariosController@index')->name('adm.usuarios.index');
// pesquisar
Route::post('/adm/usuarios/pesquisar', 'Adm\UsuariosController@pesquisar')->name('adm.usuarios.pesquisar');
// editar
Route::get('/adm/usuarios/editar/{id}', 'Adm\UsuariosController@editar')->name('adm.usuarios.editar');
Route::put('/adm/usuarios/editar/{id}', 'Adm\UsuariosController@atualizarUsuario')->name('adm.usuarios.atualizarUsuario');
// excluir
Route::delete('/adm/usuarios/excluir/{id}', 'Adm\UsuariosController@excluirUsuario')->name('adm.usuarios.excluirUsuario');

//SERVIÇOS
Route::get('/adm/servicos', 'Adm\ServicosController@index')->name('adm.servicos.index');
// criar
Route::get('/adm/servicos/criar', 'Adm\ServicosController@criar')->name('adm.servicos.criar');
Route::post('/adm/servicos/criar/servico', 'Adm\ServicosController@criarServico')->name('adm.servicos.criarServico');
Route::post('/adm/servicos/criar/grupo-servico', 'Adm\ServicosController@criarGrupoServico')->name('adm.servicos.criarGrupoServico');
// editar
Route::get('/adm/servicos/editar', 'Adm\ServicosController@editar')->name('adm.servicos.editar');
Route::put('/adm/servicos/editar/{id}', 'Adm\ServicosController@atualizarServico')->name('adm.servicos.atualizarServico');
Route::put('/adm/servicos/editar/{id}', 'Adm\ServicosController@atualizarGrupoServico')->name('adm.servicos.atualizarGrupoServico');
// excluir
Route::delete('/adm/servicos/excluir/{id}', 'Adm\ServicosController@excluirServico')->name('adm.servicos.excluirServico');
Route::delete('/adm/servicos/excluir/{id}', 'Adm\ServicosController@excluirGrupoServico')->name('adm.servicos.excluirGrupoServico');

//MEU CADASTRO
Route::get('/adm/meu-cadastro', function () {
    return view('adm.meu-cadastro');
})->name('adm.meu-cadastro');

//PROFISSIONAIS
Route::get('/adm/profissionais', 'Adm\ProfissionaisController@index')->name('adm.profissionais.index');
// pesquisar
Route::get('/adm/profissionais/pesquisar', 'Adm\ProfissionaisController@pesquisar')->name('adm.profissionais.pesquisar');
// criar
Route::get('/adm/profissionais/criar', 'Adm\ProfissionaisController@criar')->name('adm.profissionais.criar');
Route::post('/adm/profissionais/criar', 'Adm\ProfissionaisController@criarProfissional')->name('adm.profissionais.criarProfissional');
// editar
Route::get('/adm/profissionais/editar', 'Adm\ProfissionaisController@editar')->name('adm.profissionais.editar');
Route::put('/adm/profissionais/editar/{id}', 'Adm\ProfissionaisController@atualizar')->name('adm.profissionais.atualizar');
// excluir
Route::delete('/adm/profissionais/excluir/{id}', 'Adm\ProfissionaisController@excluir')->name('adm.profissionais.excluir');

//PEDIDOS RECEBIDOS
Route::get('/adm/pedidos-recebidos', 'Adm\PedidosRecebidosController@index')->name('adm.pedidos-recebidos.index');
// pesquisar
Route::post('/adm/pedidos-recebidos', 'Adm\PedidosRecebidosController@pesquisar')->name('adm.pedidos-recebidos.pesquisar');

//PEDIDOS ENVIADOS
Route::get('/adm/pedidos-enviados', 'Adm\PedidosEnviadosController@index')->name('adm.pedidos-enviados.index');
// pesquisar
Route::post('/adm/pedidos-enviados', 'Adm\PedidosEnviadosController@pesquisar')->name('adm.pedidos-enviados.pesquisar');

//CADASTRO PROFISSIONAIS
Route::get('/adm/cadastro-profissionais', function () {
    return view('adm.cadastro-profissionais');
})->name('adm.cadastro-profissionais');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
