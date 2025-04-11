@extends('admin.layouts.main')

    @section('title', 'Login | Synaptekx')

    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    @section('styles')
        <!--  BEGIN CUSTOM STYLE FILE  -->
        @vite(['resources/scss/light/assets/authentication/auth-cover.scss'])
        @vite(['resources/scss/dark/assets/authentication/auth-cover.scss'])
        <!--  END CUSTOM STYLE FILE  -->
    @endsection
    <!-- END GLOBAL MANDATORY STYLES -->
   
    @section('content')
        <div class="auth-container d-flex">

            <div class="container mx-auto align-self-center">
        
                <div class="row">
        
                    <div class="col-6 d-lg-flex d-none h-100 my-auto top-0 start-0 text-center justify-content-center flex-column">
                        <div class="auth-cover-bg-image"></div>
                        <div class="auth-overlay"></div>
                            
                        <div class="auth-cover">
        
                            <div class="position-relative">
        
                                {{-- <img src="{{Vite::asset('resources/images/auth-cover.svg')}}" alt="auth-img"> --}}
        
                                {{-- <h2 class="mt-5 text-white font-weight-bolder px-2">Join the community of expert developers</h2>
                                <p class="text-white px-2">It is easy to setup with great customer experience. Start your 7-day free trial</p> --}}

                                <div class="nav-logo">
                                    <div class="nav-item theme-text">
                                        <span style="font-size: 68px; font-weight: bold" class="text-gradient">Synaptekx <span style="letter-spacing: 12px; font-size: 30px; -webkit-text-fill-color: #fff">-CMS</span></span>
                                    </div>
                                </div>
                            </div>
                            
                        </div>

                    </div>

                    <div class="col-xxl-4 col-xl-5 col-lg-5 my-auto col-md-8 col-12 d-flex flex-column align-self-center ms-lg-auto me-lg-0 mx-auto">
                        <form class="" method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-12 mb-3">
                                            <h2>Sign In</h2>
                                            <p>Enter your email and password to login</p>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="mb-3">
                                                <label class="form-label">Email</label>
                                                <input type="email" name="email" class="form-control" value="{{old('email')}}"  required>
                                                @error('email')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="mb-4">
                                                <label class="form-label">Password</label>
                                                <input type="password" name="password" class="form-control" required>
                                                @error('password')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        {{-- <div class="col-12">
                                            <div class="mb-3">
                                                <div class="form-check form-check-primary form-check-inline">
                                                    <input class="form-check-input me-3" type="checkbox" id="form-check-default">
                                                    <label class="form-check-label" for="form-check-default">
                                                        Remember me
                                                    </label>
                                                </div>
                                            </div>
                                        </div> --}}
                                        
                                        <div class="col-12">
                                            <div class="mb-4">
                                                <button class="btn btn-secondary w-100">SIGN IN</button>
                                            </div>
                                        </div>
                                        
                                        {{-- <div class="col-12">
                                            <div class="text-center">
                                                <p class="mb-0">Dont't have an account ? <a href="{{route('register')}}" class="text-warning">Sign Up</a></p>
                                            </div>
                                        </div> --}}
                                        
                                    </div>
                                    
                                </div>
                            </div>
                        </form>
                    </div>
                    
                </div>
                
            </div>

        </div>
    @endsection