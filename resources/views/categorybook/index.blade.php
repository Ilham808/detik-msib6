@extends('layouts.main')

@section('content')

    <div class="page-title">
        <h3>Category Book</h3>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">Category Book</div>
                <div class="card-body">
                    <p class="card-title">All Category Book Data here</p>

                    @if (session('success'))
                        <div class="alert alert-success" role="alert">
                            {{ session('success') }}
                        </div>
                    @endif

                    @if (session('error'))
                        <div class="alert alert-danger" role="alert">
                            {{ session('error') }}
                        </div>
                    @endif

                    <a href="{{ route('categorybooks.create') }}" class="btn btn-primary mb-2">Add Data</a>
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col" width="5%">No</th>
                                    <th scope="col">Name</th>
                                    <th scope="col" width="25%">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $no = 1; @endphp
                                @forelse ($datas as $data)
                                    <tr>
                                        <th scope="row">{{ $no++ }}</th>
                                        <td>{{ $data->name }}</td>
                                        <td>

                                            <form action="{{ route('categorybooks.destroy', $data->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <a href="{{ route('categorybooks.edit', $data->id) }}"
                                                    class="btn btn-sm btn-success">Edit</a>
                                                <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="3" class="text-center">No Data</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                    <div class="justify-content-center">
                        {!! $datas->links('vendor.pagination.bootstrap-5') !!}
                    </div>
                    {{-- {{ $datas->links() }} --}}
                </div>
            </div>
        </div>
    </div>
@endsection
