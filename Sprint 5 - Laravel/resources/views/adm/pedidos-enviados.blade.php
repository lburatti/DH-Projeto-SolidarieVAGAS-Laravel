@extends('layouts.app')

@section('content')
<section class="container my-3 py-5" id="adm">
    <article class="mt-5 px-0">
        <div class="panel p-3">
            <div class="panel-heading">
                Resultado da Busca
            </div>
            <hr>
            <div>
                <table id="tblGrid" class="table table-striped table-bordered" cellspacing="0">
                    <thead class="text-center">
                        <tr>
                            <th>ID do Pedido
                            </th>
                            <th>Descrição
                            </th>
                            <th>Quantidade
                            </th>
                            <!-- <th>Contratante | ONG
                            </th>
                            <th>Profissional
                            </th>
                            <th>Serviço
                            </th> -->
                            <th>Data
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @if($pedidosEnviados ?? '')
                            @foreach($pedidosEnviados ?? '' as $pedidoEnviado)
                                <tr class="text-center">
                                    <th scope="row">{{$pedidoEnviado->id}}</th>
                                    <td>{{$pedidoEnviado->descricao}}</td>
                                    <td>{{$pedidoEnviado->quantidade}}</td>
                                    <td>{{$pedidoEnviado->created_at}}</td>
                                </tr>
                            @endforeach
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
        </div>
    </article>
</section>
@endsection