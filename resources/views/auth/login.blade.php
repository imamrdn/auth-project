@extends('auth.main')

@section('container')
    <div class="container-fluid w-75 py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-8 col-lg-6 col-xl-5">
          <div class="card card-oauth shadow-2-strong rounded">
            <div class="card-body p-5">
  
                <h1 class="fw-bold">Welcome<span class="display-5">👋</span></h1>
                <p class="text-secondary mb-4">Welcome back! Enter your login details to access your account</p>

                @if (session()->has('success'))                            
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                </div>
                @endif
    
                <form class="user" action="/login" method="POST">
                    @csrf
                    <div class="form-outline mb-1">
                        <label class="form-label fw-bold" for="email">Email Address</label>
                        <div class="input-group mb-3">
                            <span class="material-symbols-outlined text-secondary input-group-text fs-5">mail</span>
                            <input type="text" id="email" class="form-control @error('email') is-invalid @enderror" aria-label="Default" aria-describedby="inputGroup-sizing-default" placeholder="enter your email" name="email" value="{{ old('email') }}">
                            @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    
                    <div class="form-outline mb-1">
                        <label class="form-label fw-bold" for="password">Password</label>
                        <div class="input-group mb-2">
                            <span class="material-symbols-outlined text-secondary input-group-text fs-5">key</span>
                            <input type="password" id="password" class="form-control @error('password') is-invalid @enderror" aria-label="Default" aria-describedby="inputGroup-sizing-default" placeholder="enter your password" name="password">
                            @error('password')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>                

                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <!-- Checkbox -->
                        <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="checkbox"/>
                        <label class="form-check-label text-secondary" for="checkbox"> Remember me </label>
                        </div>
                        <a href="#!" class="text-decoration-none">Forget password?</a>
                    </div>

                    <div class="d-flex align-items-center my-4">
                        <hr class="flex-grow-1">
                        <span class="mx-3 text-secondary">Or</span>
                        <hr class="flex-grow-1">
                    </div>

                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <button class="oauth w-50 rounded">
                            <svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 48 48" width="30px" height="30px"><path fill="#FFC107" d="M43.611,20.083H42V20H24v8h11.303c-1.649,4.657-6.08,8-11.303,8c-6.627,0-12-5.373-12-12c0-6.627,5.373-12,12-12c3.059,0,5.842,1.154,7.961,3.039l5.657-5.657C34.046,6.053,29.268,4,24,4C12.955,4,4,12.955,4,24c0,11.045,8.955,20,20,20c11.045,0,20-8.955,20-20C44,22.659,43.862,21.35,43.611,20.083z"/><path fill="#FF3D00" d="M6.306,14.691l6.571,4.819C14.655,15.108,18.961,12,24,12c3.059,0,5.842,1.154,7.961,3.039l5.657-5.657C34.046,6.053,29.268,4,24,4C16.318,4,9.656,8.337,6.306,14.691z"/><path fill="#4CAF50" d="M24,44c5.166,0,9.86-1.977,13.409-5.192l-6.19-5.238C29.211,35.091,26.715,36,24,36c-5.202,0-9.619-3.317-11.283-7.946l-6.522,5.025C9.505,39.556,16.227,44,24,44z"/><path fill="#1976D2" d="M43.611,20.083H42V20H24v8h11.303c-0.792,2.237-2.231,4.166-4.087,5.571c0.001-0.001,0.002-0.001,0.003-0.002l6.19,5.238C36.971,39.205,44,34,44,24C44,22.659,43.862,21.35,43.611,20.083z"/></svg>
                            <span class="fw-bold">Sign in with Google</span>
                        </button>
                        <button class="oauth w-50 rounded">
                                <svg fill="#4267B2" width="30px" height="30px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12.001 2.002c-5.522 0-9.999 4.477-9.999 9.999 0 4.99 3.656 9.126 8.437 9.879v-6.988h-2.54v-2.891h2.54V9.798c0-2.508 1.493-3.891 3.776-3.891 1.094 0 2.24.195 2.24.195v2.459h-1.264c-1.24 0-1.628.772-1.628 1.563v1.875h2.771l-.443 2.891h-2.328v6.988C18.344 21.129 22 16.992 22 12.001c0-5.522-4.477-9.999-9.999-9.999z"/></svg>
                                </svg>
                            <span class="fw-bold">Sign in with Facebook</span>
                        </button>
                    </div>

                    <button class="btn btn-primary btn-lg w-100 py-3 fs-6 fw-normal mb-3" type="submit">Login</button>
                </form>

                <p class="text-secondary text-center mb-3">Don't have an account? <a href="/register" class="text-decoration-none">Sign Up</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection