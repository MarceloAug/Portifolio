@extends('layout.principal')

@section('conteudo')

    @if(empty($empresas))
        <div class="alert alert-danger">
            Você não tem nenhum produto cadastrado.
        </div>

    @else


        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Listagem de empresas</h3>
                        <form action="#" method="get">
                            <div class="box-tools">
                                <div class="input-group input-group-sm lines">
                                    <div> 
                                        <select name="filtro" class="form-control">
                                            <option value="ID">ID</option>
                                            <option value="Nome">Nome</option>
                                        </select>
                                    </div>
                                    <div>
                                        <input type="text" name="campo" class="form-control pull-right" placeholder="Search">
                                    </div>
                                    <div class="input-group-btn">
                                        <button type="submit" class="btn btn-default"><i class="glyphicon glyphicon-search"></i></button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="box-body table-responsive no-padding">
                        <table id="listaempresas" class="table table-hover">
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
     
    @endif
@stop