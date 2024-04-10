@extends('front.layouts.template')
@section('content')

<section class="page-header">
    <div class="page-header-bg" style="background-image: url({{ asset('front/assets/images/backgrounds/image43.jpg') }})">
    </div>
    <div class="container">
        <div class="page-header__inner">
            <ul class="thm-breadcrumb list-unstyled">
                <li><a href="index.html">Home</a></li>
                <li><span>/</span></li>
                <li>Register</li>
            </ul>
            <h2>Register Us</h2>
        </div>
    </div>
</section>

<section class="contact-two">
    <div class="contact-two__shape-1 float-bob-x">
        <img src="{{ asset('front/assets/images/shapes/contact-two-shape-1.png') }}" alt="">
    </div>
    <div class="container">
        <div class="section-title text-center">
            <span class="section-title__tagline">enregistrement</span>
            <h2 class="section-title__title">Always here to help you</h2>
            <div class="section-title__icon">
                <img src="{{ asset('front/assets/images/icon/section-title-icon-1.png') }}" alt="">
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title mb-4">Register</h4>
                        @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif



                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="row">
                                <div class="col-lg-6">
                                    <div>
                                        <!-- Name -->
                                        <div class="form-group">
                                            <label for="name" class="form-label">votre nom</label>
                                            <input id="name" class="form-control" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                                            <x-input-error :messages="$errors->get('name')" />
                                        </div>
                                        <!-- Email Address -->
                                        <div class="form-group mb-4">
                                            <label for="email" :value="__('Email')" class="form-label"> votre email</label>
                                            <input id="email" class="form-control" type="email" name="email" :value="old('email')" required autocomplete="username" />
                                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                        </div>
                                        <div class="form-group mb-4">
                                            <label for="numero" class="form-label">votre numero</label>
                                            <input type="text" class="form-control" placeholder="Contact" name="numero">
                                            <x-input-error :messages="$errors->get('numero')" class="mt-2" />
                                        </div>
                                        <div class="form-group mb-4">
                                            <select name="sexe" id="sexe" class="form-control">
                                                <option value="Masculin">Masculin</option>
                                                <option value="Feminin">Féminin</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mt-4 mt-lg-0">
                                        <div class="form-group mb-4">
                                            <label for="departement" class="form-label">votre departement</label>
                                            <select name="departement" id="departement" class="form-select">
                                                @foreach ( $departements as $departement )
                                                <option value="{{ $departement->id }}">{{ $departement->nom }}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="form-group mb-4">
                                            <label for="comune" class="form-label">votre commune</label>

                                            <select id="communes" name="commune" class="form-select">

                                                <option value="">Communes</option>
                                            </select>

                                        </div>


                                        <!-- Password -->
                                        <div class="form-group mb-4">
                                            <label for="password" :value="__('Password')" class="form-label">mot de pass</label>
                                            <input id="password" class="form-control" type="password" name="password" required autocomplete="new-password" />

                                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                        </div>
                                        <!-- Confirm Password -->
                                        <div class="form-group mb-4">
                                            <label for="password_confirmation" :value="__('Confirm Password')" class="form-label">confirmer mot de pass</label>
                                            <input id="password_confirmation" class="form-control" type="password" name="password_confirmation" required autocomplete="new-password" />
                                            <span :messages="$errors->get('password_confirmation')" class="mt-2"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="flex items-center justify-end mt-4">
                                <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                                    {{ __('Already registered?') }}
                                </a>

                                <button type="submit" class="btn btn-success form-control">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
</section>

@endsection

<script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>


<script type="text/javascript">
    $(document).ready(function() {
        $('#departement').change(function() {
            var departementId = $(this).val();
            $('#communes').empty();
            if (departementId) {
                $.ajax({
                    type: "GET"
                    , url: "{{url('get-communes')}}/" + departementId
                    , success: function(res) {
                        if (res) {
                            $.each(res.communes, function(key, value) {
                                $('#communes').append('<option value="' + value.id + '">' + value.nom + '</option>');
                            });
                        }
                    }
                });
            }
        });
    });

</script>
