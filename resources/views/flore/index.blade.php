@extends('layouts.app')

@section('template_title')
    Flore
@endsection
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Flore') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('flores.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Nombre</th>
										<th>Descripcion</th>
										<th>Imagen</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($flores as $flore)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $flore->nombre }}</td>
											<td>{{ $flore->descripcion }}</td>
											<td>{{ $flore->imagen }}</td>

                                            <td>
                                                <form action="{{ route('flores.destroy',$flore->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('flores.show',$flore->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('flores.edit',$flore->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $flores->links() !!}
            </div>
        </div>
    </div>
@endsection
