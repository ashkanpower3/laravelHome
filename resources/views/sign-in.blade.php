@extends("page-contnet")
@section("pages")

    <!-- login-area-strat -->
    <section class="login-area pt-100 pb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="basic-login">
                        <h3 class="text-center mb-60">Login From Here</h3>
                        <form action="#">
                            <label for="name">Username <span>**</span></label>
                            <input id="name" type="text" placeholder="Enter Username" />
                            <label for="pass">Password <span>**</span></label>
                            <input id="pass" type="password" placeholder="Enter password..." />
                            <div class="mt-10"></div>
                            <button class="tp-btn w-100">login Now</button>
                            <div class="or-divide"><span>or</span></div>
                            <a href="/register" class="tp-border-btn w-100">Register Now</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- login-area-strat-end -->

@endsection
