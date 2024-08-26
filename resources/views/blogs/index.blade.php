@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header" style="display: flex; justify-content: space-between; align-items: center; background-color: #f8f9fa; padding: 15px;">
            <div>
                <a href="{{ route('blogs.index') }}" class="btn btn-outline-secondary" title="Regresar al inicio">
                    <i class="fas fa-arrow-left"></i> Regresar
                </a>
            </div>
            <h3 class="page__heading" style="font-weight: bold; color: #000;">Imprimir Constancia de situación fiscal</h3>
            <div>
                <a class="btn btn-light" href="#" target="_blank">
                    <i class="fas fa-print"></i> Imprimir
                </a>
            </div>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">


                        @can('crear-blog')
                        <a class="btn btn-warning" href="{{ route('blogs.create') }}">Nuevo</a>
                        @endcan

                        <table class="table table-striped mt-2">
                                <thead style="background-color:#6777ef">
                                    <th style="display: none;">ID</th>
                                    <th style="color:#fff;">Titulo</th>
                                    <th style="color:#fff;">Contenido</th>
                                    <th style="color:#fff;">Acciones</th>
                              </thead>
                              <tbody>
                            @foreach ($blogs as $blog)
                            <tr>
                                <td style="display: none;">{{ $blog->id }}</td>
                                <td>{{ $blog->titulo }}</td>
                                <td>{{ $blog->contenido }}</td>
                                <td>
                                    <form action="{{ route('blogs.destroy',$blog->id) }}" method="POST">
                                        @can('editar-blog')
                                        <a class="btn btn-info" href="{{ route('blogs.edit',$blog->id) }}">Editar</a>
                                        @endcan

                                        @csrf
                                        @method('DELETE')
                                        @can('borrar-blog')
                                        <button type="submit" class="btn btn-danger">Borrar</button>
                                        @endcan
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>

                        <!-- Ubicamos la paginacion a la derecha -->
                        <div class="pagination justify-content-end">
                            {!! $blogs->links() !!}
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
