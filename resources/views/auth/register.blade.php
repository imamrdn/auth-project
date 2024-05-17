@extends('auth.main')

@section('container')
    <div class="container-fluid w-75 py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-8 col-lg-6 col-xl-5">
          <div class="card card-oauth shadow-2-strong rounded">
            <div class="card-body p-5">
  
                <h1 class="fw-bold">Create your account</h1>
                <p class="text-secondary mb-4">Hello there! Welcome abroad! I'm glad you're interested in creating an account</p>
    
                <form action="{{ route('register') }}" method="POST">
                    @csrf
                    <div class="form-outline mb-1">
                        <label class="form-label fw-bold" for="name">Full Name</label>
                        <div class="input-group mb-3">
                            <span class="material-symbols-outlined text-secondary input-group-text fs-5">person</span>
                            <input type="text" id="name" class="form-control @error('name') is-invalid @enderror" aria-label="Default" aria-describedby="inputGroup-sizing-default" placeholder="enter your name" name="name" value="{{ old('name') }}" required autofocus>
                            @error('name')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    
                    <div class="form-outline mb-1">
                        <label class="form-label fw-bold" for="email">Email Address</label>
                        <div class="input-group mb-3">
                            <span class="material-symbols-outlined text-secondary input-group-text fs-5">mail</span>
                            <input type="email" id="email" class="form-control @error('email') is-invalid @enderror" aria-label="Default" aria-describedby="inputGroup-sizing-default" placeholder="enter your email" name="email" value="{{ old('email') }}" required>
                            @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    
                    <div class="form-outline mb-1">
                        <label class="form-label fw-bold" for="password">Create Password</label>
                        <div class="input-group mb-2">
                            <span class="material-symbols-outlined text-secondary input-group-text fs-5">key</span>
                            <input type="password" id="password" class="form-control @error('password') is-invalid @enderror" aria-label="Default" aria-describedby="inputGroup-sizing-default" placeholder="enter your password" name="password" required>
                            @error('password')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div id="password-validation" class="row d-none">
                        <div class="col-md-6">
                            <div class="d-flex flex-column">
                                <div class="d-flex align-items-center">
                                    <svg id="uppercase-icon" class="bi flex-shrink-0 me-2" width="15" height="15" fill="#6c757d" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
                                    <div id="uppercase-text" class="small">One uppercase character</div>
                                </div>
                                <div class="d-flex align-items-center">
                                    <svg id="number-icon" class="bi flex-shrink-0 me-2" width="15" height="15" fill="#6c757d" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
                                    <div id="number-text" class="small">One number</div>
                                </div>
                                <div class="d-flex align-items-center">
                                    <svg id="length-icon" class="bi flex-shrink-0 me-2" width="15" height="15" fill="#6c757d" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
                                    <div id="length-text" class="small">8 character minimum</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex flex-column mb-3">
                                <div class="d-flex align-items-center">
                                    <svg id="lowercase-icon" class="bi flex-shrink-0 me-2" width="15" height="15" fill="#6c757d" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
                                    <div id="lowercase-text" class="small">One lower Character</div>
                                </div>
                                <div class="d-flex align-items-center">
                                    <svg id="special-icon" class="bi flex-shrink-0 me-2" width="15" height="15" fill="#6c757d" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
                                    <div id="special-text" class="small">One special character</div>
                                </div>
                            </div>
                        </div>
                    </div>                    
                    
                    <div class="d-flex align-items-center my-4">
                        <hr class="flex-grow-1">
                        <span class="mx-3 text-secondary">Or</span>
                        <hr class="flex-grow-1">
                    </div>

                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <button class="oauth w-50 rounded">
                            <svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 48 48" width="30px" height="30px"><path fill="#FFC107" d="M43.611,20.083H42V20H24v8h11.303c-1.649,4.657-6.08,8-11.303,8c-6.627,0-12-5.373-12-12c0-6.627,5.373-12,12-12c3.059,0,5.842,1.154,7.961,3.039l5.657-5.657C34.046,6.053,29.268,4,24,4C12.955,4,4,12.955,4,24c0,11.045,8.955,20,20,20c11.045,0,20-8.955,20-20C44,22.659,43.862,21.35,43.611,20.083z"/><path fill="#FF3D00" d="M6.306,14.691l6.571,4.819C14.655,15.108,18.961,12,24,12c3.059,0,5.842,1.154,7.961,3.039l5.657-5.657C34.046,6.053,29.268,4,24,4C16.318,4,9.656,8.337,6.306,14.691z"/><path fill="#4CAF50" d="M24,44c5.166,0,9.86-1.977,13.409-5.192l-6.19-5.238C29.211,35.091,26.715,36,24,36c-5.202,0-9.619-3.317-11.283-7.946l-6.522,5.025C9.505,39.556,16.227,44,24,44z"/><path fill="#1976D2" d="M43.611,20.083H42V20H24v8h11.303c-0.792,2.237-2.231,4.166-4.087,5.571c0.001-0.001,0.002-0.001,0.003-0.002l6.19,5.238C36.971,39.205,44,34,44,24C44,22.659,43.862,21.35,43.611,20.083z"/></svg>
                            <span class="fw-bold">Sign up with Google</span>
                        </button>
                        <button class="oauth w-50 rounded">
                                <svg fill="#4267B2" width="30px" height="30px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12.001 2.002c-5.522 0-9.999 4.477-9.999 9.999 0 4.99 3.656 9.126 8.437 9.879v-6.988h-2.54v-2.891h2.54V9.798c0-2.508 1.493-3.891 3.776-3.891 1.094 0 2.24.195 2.24.195v2.459h-1.264c-1.24 0-1.628.772-1.628 1.563v1.875h2.771l-.443 2.891h-2.328v6.988C18.344 21.129 22 16.992 22 12.001c0-5.522-4.477-9.999-9.999-9.999z"/></svg>
                                </svg>
                            <span class="fw-bold">Sign up with Facebook</span>
                        </button>
                    </div>

                    <button class="btn btn-primary btn-lg w-100 py-3 fs-6 fw-normal mb-3" type="submit">Sign Up</button>
                </form>
            
                <p class="text-secondary text-center mb-3">Already have an account? <a href="/login" class="text-decoration-none">Login</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script>
        document.getElementById('password').addEventListener('input', function() {
            const password = this.value;
            const passwordValidation = document.getElementById('password-validation');

            if (password === '') {
                passwordValidation.classList.add('d-none');
            } else {
                passwordValidation.classList.remove('d-none');
            }
        });

        document.getElementById('password').addEventListener('input', function() {
            let password = this.value;
            let regexUppercase = /[A-Z]/;
            let regexNumber = /[0-9]/;
            let regexLength = /.{8,}/;
            let regexLowercase = /[a-z]/;
            let regexSpecial = /[\\@\$!%*#?&]/;

            let isValid = true;

            if (regexUppercase.test(password)) {
                document.getElementById('uppercase-icon').setAttribute('fill', '#0d6efd');
                document.getElementById('uppercase-text').classList.remove('text-secondary')
            } else {
                document.getElementById('uppercase-icon').setAttribute('fill', '#6c757d');
                document.getElementById('uppercase-text').classList.add('text-secondary');
                isValid = false;
            }

            if (regexNumber.test(password)) {
                document.getElementById('number-icon').setAttribute('fill', '#0d6efd');
                document.getElementById('number-text').classList.remove('text-secondary')
            } else {
                document.getElementById('number-icon').setAttribute('fill', '#6c757d');
                document.getElementById('number-text').classList.add('text-secondary');
                isValid = false;
            }

            if (regexLength.test(password)) {
                document.getElementById('length-icon').setAttribute('fill', '#0d6efd');
                document.getElementById('length-text').classList.remove('text-secondary')
            } else {
                document.getElementById('length-icon').setAttribute('fill', '#6c757d');
                document.getElementById('length-text').classList.add('text-secondary');
                isValid = false;
            }

            if (regexLowercase.test(password)) {
                document.getElementById('lowercase-icon').setAttribute('fill', '#0d6efd');
                document.getElementById('lowercase-text').classList.remove('text-secondary')
            } else {
                document.getElementById('lowercase-icon').setAttribute('fill', '#6c757d');
                document.getElementById('lowercase-text').classList.add('text-secondary');
                isValid = false;
            }

            if (regexSpecial.test(password)) {
                document.getElementById('special-icon').setAttribute('fill', '#0d6efd');
                document.getElementById('special-text').classList.remove('text-secondary')
            } else {
                document.getElementById('special-icon').setAttribute('fill', '#6c757d');
                document.getElementById('special-text').classList.add('text-secondary');
                isValid = false;
            }

        });


    </script>


@endsection