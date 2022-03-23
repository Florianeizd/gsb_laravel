@extends('layouts.master')

@section("contenu")
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}

                    @auth
                    <form action="/logout" method="POST" class="text-xs font-semibold text-blue-500 ml-6">
                        @csrf
                        <button class="btn btn-primary" type="submit">Se deconnecter</button>
                    </form>
                    @endauth
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
