@extends('layouts.app', ['title' => __('Doctors')])

@section('content')
<div class="container ">
    <div class="table-responsive py-4">
        <a class="btn btn-sm btn-primary text-light" href="{{ route('doctors.create') }}">
            {{ __('Create') }}
        </a>
        <table class="table table-flush" id="datatable-basic">
            <thead class="thead-light">
                <tr>
                    <th>{{ __('Name') }}</th>
                    <th>{{ __('Surname') }}</th>
                    <th>{{ __('Patronymic') }}</th>
                    <th>{{ __('JobTitle') }}</th>
                    <th>{{ __('Status') }}</th>
                    <th>{{ __('created_at') }}</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @if(isset($datas))
                    @foreach ($datas as $data)
                    <tr>
                        <td>{{ $data['name'] }}</td>
                        <td>{{ $data['surname'] }}</td>
                        <td>{{ $data['middlename'] }}</td>
                        <td>{{ $data['job_title'] }}</td>
                        <td>{{ $data['status'] }}</td>
                        <td>{{ $data['created_at'] }}</td>
                        <td>
                            <a class="btn btn-sm btn-primary text-white" href="{{ route('doctors.edit',$data['id']) }}">
                                <i class="fas fa-edit"></i>
                            </a>
                            <form action="{{ route('doctors.destroy',$data['id']) }}" method="POST">
                                @csrf
                                @method('delete')
                             <button class="btn btn-sm btn-danger">
                                <i class="fa fa-trash" aria-hidden="true"></i>
                             </button>
                            </form>
                        </td>
                    </tr>
                     @endforeach
                @endif
            </tbody>
        </table>
        {{ $datas->links() }}
    </div>
    
</div>

@endsection
