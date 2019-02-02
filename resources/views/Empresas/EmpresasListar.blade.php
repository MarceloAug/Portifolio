@extends('layout.principal')

@section('conteudo')

    @if(empty($empresas))
        <div class="alert alert-danger">
            Você não tem nenhum produto cadastrado.
        </div>

    @else

    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Listagem de empresas</h3>
                    </div>
                    <div class="box-body">
                        <table id="listaempresas" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nome</th>
                                    <th>Descricao</th>
                                    <th>Remover</th>
                                    <th>Exibir</th>
                                    <th>Editar</th>
                                </tr>
                            </thead>
                          <tbody>
                                @foreach ($empresas as $e)
                                <tr>
                                    <td> {{$e->ID}} </td>
                                    <td> {{$e->nome}} </td>
                                    <td> {{$e->Descricao}} </td>
                                    <td>
                                        <a href="/empresas/remove/{{$e->ID}}">
                                            <span class="glyphicon glyphicon-trash"></span>
                                        </a>
                                    </td>
                                
                                    <td>
                                        <a href="/empresas/exibe/{{$e->ID}}">
                                            <span class="glyphicon glyphicon-search"></span>
                                        </a>
                                    </td>
                                      <td>
                                        <a href="/empresas/FormEditar/{{$e->ID}}">
                                            <i class="glyphicon glyphicon-pencil"></i>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                          </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>      
    @endif
@stop