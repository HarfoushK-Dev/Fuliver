@extends('layout', ['page_title' => 'Fuliver | Contact Us', 'page_name' => 'contact'])

@section('page')

<section id="contact_us">
    <div class="container">
        <div class="grid_wrapper contact_wrapper">
            <div class="grid_wrapper page_title">
                <h1>contact us</h1>
                <div class="title_line"></div>
            </div>
            <div class="grid_wrapper contact_info_form">
                <div class="grid_wrapper contact_info">
                    <h2>locate us</h2>
                    <div class="grid_wrapper contact_cards">
                        <div class="grid_wrapper contact_card contact_address">
                            <i class="fi fi-rr-marker"></i>
                            <div class="address">
                                <h3>address</h3>
                                <p>iPark</p>
                                <p>Beirut Digital District 1082</p>
                                <p>Bachoura, Beirut</p>
                                <p>Lebanon</p>
                            </div>
                            <div class="view_location">
                                <a href=""><i class="fi fi-rr-arrow-right"></i> <span>View on map</span></a>
                            </div>
                        </div>
                        <div class="grid_wrapper contact_card contact_details">
                            <div class="grid_wrapper email_wrapper">
                                <i class="fi fi-rr-at"></i>
                                <div class="email">
                                    <h3>e-mail</h3>
                                    <p>info@fuliver.com</p>
                                </div>
                            </div>
                            <div class="grid_wrapper phone_wrapper">
                                <i class="fi fi-rr-phone-call"></i>
                                <div class="phone">
                                    <h3>phone</h3>
                                    <p>+961 78 123 456</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="grid_wrapper form_wrapper">
                    <h2>send us an email</h2>
                    <form action="{{ route('send.email') }}" method="POST" class="grid_wrapper contact_form">
                        @csrf
                        <div class="grid_wrapper input_wrapper name_input">
                            <fieldset>
                                <legend>full name*</legend>
                                <input type="text" name="fullName" id="fullName" placeholder="John Doe" value="{{ old('fullName') }}">
                            </fieldset>
                            @error('fullName')
                                <span class="errorMessage">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="grid_wrapper input_wrapper email_input">
                            <fieldset>
                                <legend>email address*</legend>
                                <input type="email" name="emailAddress" id="emailAddress" placeholder="johndoe@example.com" value="{{ old('emailAddress') }}">
                            </fieldset>
                            @error('emailAddress')
                                <span class="errorMessage">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="grid_wrapper input_wrapper phone_input">
                            <fieldset>
                                <legend>phone number</legend>
                                <input type="text" name="phoneNumber" id="phoneNumber" placeholder="+961 81 293 390" value="{{ old('phoneNumber') }}">
                            </fieldset>
                            @error('phoneNumber')
                                <span class="errorMessage">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="grid_wrapper input_wrapper subject_input">
                            <fieldset>
                                <legend>subjet</legend>
                                <input type="text" name="subject" id="subject" placeholder="Main Topic" value="{{ old('subject') }}">
                            </fieldset>
                            @error('subject')
                                <span class="errorMessage">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="grid_wrapper input_wrapper message_input">
                            <fieldset>
                                <legend>your message*</legend>
                                <textarea name="message" id="message" cols="30" rows="10" placeholder="Write down your message">{{ old('message') }}</textarea>
                            </fieldset>
                            @error('message')
                                <span class="errorMessage">{{ $message }}</span>
                            @enderror
                        </div>
                        <button type="submit" class="submit_btn">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection()