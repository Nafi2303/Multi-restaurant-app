<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div class="" id="sign-in" aria-labelledby="myModalLabel">
            <div class="modal-dialog">
                <div class="login-form">
                    <div class="modal-content">
                        <div class="tab-content">
                            <div id="user-login-tab" class="tab-pane fade in active">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                    <h5 class="modal-title foodbakery-dev-login-main-title">Login To Your Account</h5>
                                </div>
                                <div class="modal-body">
                                    <p class="foodbakery-dev-login-top-msg"></p>
                                    <div class="cs-login-pbox">
                                        <div class="status status-message"></div>
                                        <form method="post" class="wp-user-form webkit" id="ControlForm_43687">
                                            <div class="cs-demo-login">
                                                <div class="cs-demo-login-lable text-color">Click to login with Demo User
                                                </div>
                                                <div class="clearfix"></div>
                                                <ul class="login-switches">
                                                    <li>
                                                        <a href="{{ url('res-dashboard') }}"
                                                            class="btn-red demo-publisher-user"><i class="icon-food"></i>
                                                            Restaurant</a>
                                                    </li>
                                                    <li>
                                                        <a href="buyer-dashboard.html"
                                                            class="btn-red btn-green demo-buyer-user"><i
                                                                class="icon-user4"></i> Buyer</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div>
                                                <x-input-label for="nom" :value="__('Nom')" />
                                                <x-text-input id="nom" class="block mt-1 w-full" type="text" name="nom" :value="old('nom')" required autofocus autocomplete="nom" />
                                                <x-input-error :messages="$errors->get('nom')" class="mt-2" />
                                            </div>

                                            <div>
                                                <x-input-label for="prenom" :value="__('Prenom')" />
                                                <x-text-input id="prenom" class="block mt-1 w-full" type="text" name="prenom" :value="old('prenom')" required autofocus autocomplete="prenom" />
                                                <x-input-error :messages="$errors->get('prenom')" class="mt-2" />
                                            </div>

                                            <div>
                                                <x-input-label for="tel" :value="__('Tel')" />
                                                <x-text-input id="tel" class="block mt-1 w-full" type="text" name="tel" :value="old('tel')" required autofocus autocomplete="tel" />
                                                <x-input-error :messages="$errors->get('tel')" class="mt-2" />
                                            </div>

                                            <div>
                                                <x-input-label for="role" :value="__('Role')" />
                                                <x-text-input id="role" class="block mt-1 w-full" type="text" name="role" :value="old('role')" required autofocus autocomplete="role" />
                                                <x-input-error :messages="$errors->get('role')" class="mt-2" />
                                            </div>

                                            <div>
                                                <x-input-label for="position" :value="__('Position')" />
                                                <x-text-input id="position" class="block mt-1 w-full" type="text" name="position" :value="old('position')" required autofocus autocomplete="position" />
                                                <x-input-error :messages="$errors->get('position')" class="mt-2" />
                                            </div>

                                            <!-- Email Address -->
                                            <div class="mt-4">
                                                <x-input-label for="email" :value="__('Email')" />
                                                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
                                                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                            </div>

                                            <!-- Password -->
                                            <div class="mt-4">
                                                <x-input-label for="password" :value="__('Password')" />

                                                <x-text-input id="password" class="block mt-1 w-full"
                                                                type="password"
                                                                name="password"
                                                                required autocomplete="new-password" />

                                                <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                            </div>

                                            <!-- Confirm Password -->
                                            <div class="mt-4">
                                                <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

                                                <x-text-input id="password_confirmation" class="block mt-1 w-full"
                                                                type="password"
                                                                name="password_confirmation" required autocomplete="new-password" />

                                                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                                            </div>
                                            <div class="input-filed input-field-btn">
                                                <div class="ajax-login-button input-button-loader">
                                                    <input type="button" class="cs-bgcolor" value="Log in">
                                                </div>
                                            </div>
                                        </form>
                                        <div class="signin-tab-link forget-password">
                                            New Here?
                                            <a data-toggle="tab" href="#user-register"
                                                class="foodbakery-dev-login-box-btn forgot-switch">Signup</a>
                                        </div>
                                        <div class="footer-element comment-form-social-connect social_login_ui ">
                                            <div class="social-media">
                                                <h6><span>Login with</span></h6>
                                                <ul>
                                                    <li><a href="#" title="Facebook" data-original-title="Facebook"
                                                            class="social_login_login_facebook facebook"><span
                                                                class="social-mess-top fb-social-login"
                                                                style="display:none">Please set API key</span><i
                                                                class="icon-facebook"></i>Sign In With Facebook</a></li>
                                                    <li><a href="#" title="Twitter" data-original-title="twitter"
                                                            class="social_login_login_twitter twitter"><span
                                                                class="social-mess-top tw-social-login"
                                                                style="display:none">Please set API key</span><i
                                                                class="icon-twitter3"></i>Sign In With Twitter</a></li>
                                                    <li><a href="#" rel="nofollow" title="google-plus"
                                                            data-original-title="google+"
                                                            class="social_login_login_google gplus"><span
                                                                class="social-mess-top gplus-social-login"
                                                                style="display:none">Please set API key</span><i
                                                                class="icon-google4"></i>Sign In With Google</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="user-register" class="tab-pane fade">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">×</span> </button>
                                    <h5 id="myModalLabel" class="modal-title">Sign Up</h5>
                                </div>
                                <div class="modal-body">
                                    <div role="tabpanel" class="tab-pane active">
                                        <div id="result_296069" class="status-message"></div>
                                        <form method="post" class="wp-user-form demo_test">
                                            <div class="input-filed foodbakery-company-name">
                                                <i class="icon-v-card"></i>
                                                <input type="text" placeholder="Company Name">
                                            </div>
                                            <div class="input-filed">
                                                <i class="icon-user4"></i>
                                                <input type="text" placeholder="Username">
                                            </div>
                                            <div class="input-filed">
                                                <i class="icon-v-card"></i>
                                                <input type="text" placeholder="Display Name">
                                            </div>
                                            <div class="input-filed">
                                                <i class="icon-email"></i>
                                                <input type="email" placeholder="Email">
                                            </div>
                                            <span class="signup-alert">
                                                <b>Note :</b> Please enter your correct email and we will send you a
                                                password
                                                on that email.
                                            </span>
                                            <div class="checkbox-area">
                                                <input type="checkbox" id="terms-head"
                                                    class="foodbakery-dev-req-field">
                                                <label for="terms-head">
                                                    By Registering You Confirm That You Accept theme
                                                    <a target="_blank" href="#">
                                                        Terms &amp; conditions
                                                    </a>
                                                    And
                                                    <a target="_blank" href="#">
                                                        Privacy Policy
                                                    </a>
                                                </label>
                                            </div>
                                            <div class="side-by-side select-icon clearfix">
                                                <div class="select-holder"></div>
                                            </div>

                                            <div class="checks-holder">
                                                <div class="input-filed input-field-btn">
                                                    <div class="ajax-signup-button input-button-loader">
                                                        <input type="button" value="Sign Up">
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                        <div class="register_content"></div>
                                        <div class="create- signin-tab-link ">Already have an account?
                                            <a data-toggle="tab" href="#user-login-tab"
                                                class="foodbakery-dev-signup-box-btn">Login here</a>
                                        </div>
                                        <div class="footer-element comment-form-social-connect social_login_ui">
                                            <div class="social-media">
                                                <h6><span>Login with</span></h6>
                                                <ul>
                                                    <li><a href="javascript:void(0);" title="Facebook"
                                                            data-original-title="Facebook"
                                                            class="social_login_login_facebook facebook"><span
                                                                class="social-mess-top fb-social-login"
                                                                style="display:none">Please set API key</span><i
                                                                class="icon-facebook"></i>Sign In With
                                                            Facebook</a></li>
                                                    <li><a href="javascript:void(0);" title="Twitter"
                                                            data-original-title="twitter"
                                                            class="social_login_login_twitter twitter"><span
                                                                class="social-mess-top tw-social-login"
                                                                style="display:none">Please set API key</span><i
                                                                class="icon-twitter3"></i>Sign In With
                                                            Twitter</a></li>
                                                    <li><a href="javascript:void(0);" rel="nofollow"
                                                            title="google-plus" data-original-title="google+"
                                                            class="social_login_login_google gplus"><span
                                                                class="social-mess-top gplus-social-login"
                                                                style="display:none">Please set API key</span><i
                                                                class="icon-google4"></i>Sign In With
                                                            Google</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="user-password" class="tab-pane fade">
                                <div class="content-style-form cs-forgot-pbox content-style-form-2">
                                    <div>
                                        <form class="user_form" method="post">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">×</span>
                                                </button>
                                                <h5 class="modal-title foodbakery-dev-login-main-title">Create Your Food
                                                    Bakery Account</h5>
                                            </div>
                                            <div class="modal-body modal-body-loader">
                                                <span class="alert-info">Enter your email address below and we'll send you
                                                    an
                                                    email with instructions on how to change your password</span>
                                                <div class="input-filed">
                                                    <i class="icon-email"></i>
                                                    <input type="text" placeholder="Enter email address..."
                                                        name="user_input">
                                                </div>
                                                <div class="input-filed input-field-btn">
                                                    <div class="ajax-forgot-button input-button-loader">
                                                        <input type="submit" class="reset_password cs-bgcolor"
                                                            name="submit" value="Submit">
                                                    </div>
                                                </div>
                                                <div class="forget-password">
                                                    <a data-toggle="tab" href="#user-login-tab"
                                                        class="cs-login-switch forgot-switch triggered-click">Login
                                                        Here</a>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ml-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
