@extends('auth.main')

@section('container')
    <div class="container-fluid w-75 py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-8 col-lg-6 col-xl-5">
          <div class="card card-oauth shadow-2-strong rounded">
            <div class="card-body p-5">

                @if (session()->has('success'))                            
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                </div>
                @endif

                <h1 class="fw-bold">Hi, {{ Auth::user()->name }}<span class="display-5">👋</span></h1>
                <p class="text-secondary">Welcome back! This is ur home</p>

                <form action="{{ url('logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-sm btn-secondary text-decoration-none">Logout</button>
                </form>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection