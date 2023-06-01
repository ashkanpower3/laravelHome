@extends('page-contnet')
@section("pages")
    <!-- login-area-strat -->
    <section class="login-area pt-100 pb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="basic-login">
                        <h3 class="text-center mb-60">Signup From Here</h3>
                        <form action="/register" method="post">
                            @csrf

                            <label for="name">Username <span>*</span></label>
                            <input id="name" name="username" type="text" value="{{old('username')}}" placeholder="Enter Username"/>
                            @error('username')
                            <b class="p-5 text-danger">{{$message}}</b>
                            @enderror()

                            <label for="email-id">Email Address <span>*</span></label>
                            <input id="email-id" name="email" type="email" value="{{old('email')}}" placeholder="Email address..."/>
                            @error('email')
                            <b class="p-5 text-danger">{{$message}}</b>
                            @enderror()
                            <label for="number-id">phone number <span>*</span></label>
                            <input id="number-id" name="phone" type="number" value="{{old('phone')}}" placeholder="phone number..."/>
                            @error('phone')
                            <b class="p-5 text-danger">{{$message}}</b>
                            @enderror()
                            <label for="pass">Password <span>*</span></label>
                            <input id="pass" name="password" type="password" placeholder="Enter password..."/>
                            @error('password')
                            <b class="p-5 text-danger">{{$message}}</b>
                            @enderror()
{{--                            <label for="confirm-pass">password_confirmation  <span>*</span></label>--}}
{{--                            <input id="confirm-pass" name="password_confirmation " type="password" placeholder="Enter your password again..."/>--}}


                            <div class="mt-10"></div>
                            <button class="tp-btn w-100">Register Now</button>
                            <div class="or-divide"><span>or</span></div>
                            <a href="/login" class="tp-border-btn w-100">login Now</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- login-area-strat-end -->

@endsection
