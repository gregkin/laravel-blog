@extends('layouts.app')

@section('content')
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body center">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                        Welcome to this Great Page 
                </div>
            </div>

@endsection
