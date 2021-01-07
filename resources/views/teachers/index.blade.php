@extends('layout')

@section('title', 'Teachers')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <h1>Teachers</h1>
            <a href="/teacher/create" class="btn bg-blue font-weight-bold text-white my-3 p-2 pr-4 "><i class="fa fa-plus pl-3 pr-3"></i> Add</a>
            @if (session('status'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('status') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            @endif
            <table class="table table-borderless">
                <tbody>
                    <div class="card  bg-blue text-white align-self-center mb-3 p-4">
                        <div class="row">
                            <div class="col-auto mr-auto align-self-center font-weight-bolder" style="width: 60px;">No</div>
                            <div class="col-1 mr-auto align-self-center font-weight-bolder">Image</div>
                            <div class="col-2 align-self-center font-weight-bolder">NIP</div>
                            <div class="col align-self-center font-weight-bolder">Name</div>
                            <div class="col align-self-center font-weight-bolder">Subject</div>
                            <div class="col-3 ml-auto align-self-center font-weight-bolder">Actions</div>
                        </div>
                    </div>
                    @foreach( $teacher as $t )
                    <div class="card shadow bg-white align-self-center mb-3 p-3">
                        <div class="row">
                            <div class="col-auto mr-auto align-self-center" style="width: 60px;">{{ $loop->iteration}}</div>
                            <div class="col-1 mr-auto align-self-center "><img src="/img/{{ $t->image }}" alt="" style="width: 40px;"> </div>
                            <div class="col-2 align-self-center ">{{ $t->nip }}</div>
                            <div class="col align-self-center ">{{ $t->name }}</div>
                            <div class="col align-self-center ">{{ $t->subject }}</div>
                            <div class="col-3 ml-auto align-self-center "><a href="{{ $t->id }}/edit" class="btn soundcloud text-white font-weight-bold">Edit</a>
                                <form action="{{ $t->id }}" method="post" class="d-inline">
                                    @method('delete')
                                    @csrf
                                    <button type="submit" class="btn youtube text-white font-weight-bold">Delete</button>
                                </form>
                            </div>
                        </div>
                    </div>

                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection