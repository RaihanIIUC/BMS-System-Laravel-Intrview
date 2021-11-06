@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                 <div class="card-body">
                    @if(session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    {{ __(' Pending Request ... ') }}



                    <table class="table table-striped">
                        <thead>
                       @if(Session::has('message'))
<p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
@endif
                            <tr>
                                <th scope="col">SL</th>
                                <th scope="col">Name </th>
                                <th scope="col">Handle</th>
                             </tr>
                        </thead>
                        <tbody>
                            @foreach($players as $key => $user)

                                <tr>
                                    <th scope="row">{{ $key }}</th>
                                    <td>{{ $user->name }}</td>
                                    <td>
                                        <form
                                            action="{{ route('user.update', $user->id ) }}"
                                            method="post">
                                            {{ method_field('patch') }}

                                            {{ csrf_field() }}

                                        <button name="is_accepted_or_rejected" value="1" type="submit" class="btn btn-rounded btn-info mb-5">Accept</button>
                                        <button name="is_accepted_or_rejected" value="2" type="submit" class="btn btn-rounded btn-danger mb-5">Ignore</button>

                                        </form>
                                    </td>

                                </tr>
                            @endforeach()

                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
