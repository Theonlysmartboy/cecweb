@extends('layouts.front_layout.design')
@section('content')
<!--/banner_info-->
<div class="banner_inner_con">
</div>
<div class="services-breadcrumb">
    <div class="inner_breadcrumb">

        <ul class="short">
            <li><a href="{{ route('index') }}">Home</a><span>|</span></li>
            <li>Contact</li>
        </ul>
    </div>
</div>
<!--//banner_info-->
<!-- /inner_content -->
<div class="banner_bottom">
    <div class="container">
        <div class="mail_form">
            <h3 class="tittle-w3ls">Send Us a Message</h3>
            <div class="inner_sec_info_wthree_agile">
                <form action="{{ route('contact_us') }}" method="post">@csrf
                    <span class="input input--chisato">
                    <input class="input__field input__field--chisato" name="Name" type="text" id="input-13" placeholder=" " required="" />
                    <label class="input__label input__label--chisato" for="input-13">
                        <span class="input__label-content input__label-content--chisato" data-content="Name">Name</span>
                    </label>
                    </span>
                    <span class="input input--chisato">
                    <input class="input__field input__field--chisato" name="Email" type="email" id="input-14" placeholder=" " required="" />
                    <label class="input__label input__label--chisato" for="input-14">
                        <span class="input__label-content input__label-content--chisato" data-content="Email">Email</span>
                    </label>
                    </span>
                    <span class="input input--chisato">
                    <input class="input__field input__field--chisato" name="Subject" type="text" id="input-15" placeholder=" " required="" />
                    <label class="input__label input__label--chisato" for="input-15">
                        <span class="input__label-content input__label-content--chisato" data-content="Subject">Subject</span>
                    </label>
                    </span>
                    <textarea name="Message" placeholder="Your comment here..." required=""></textarea>
                    <input type="submit" value="Submit">
                </form>
            </div>
        </div>
        <div class="inner_sec_info_wthree_agile">
           <div class="col-md-8 map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d387142.84010033106!2d-74.25819252532891!3d40.70583163828471!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew+York%2C+NY%2C+USA!5e0!3m2!1sen!2sin!4v1475140387172"
                    style="border:0"></iframe>
            </div>
            <div class="col-md-4 contact_grids_info">
                <div class="contact_grid">
                    <div class="contact_grid_right">
                        <h4>HEAD OFFICE </h4>
                        <p>P.O.  BOX 1188 - 50100,</p>
                        <p> KAKAMEGA</p>
                    </div>
                </div>
                <div class="contact_grid">
                    <div class="contact_grid_right">
                        <h4> OFFICE 1</h4>
                        <p>--</p>
                        <p>--</p>
                    </div>
                </div>
                <div class="contact_grid" data-aos="flip-up">

                    <div class="contact_grid_right">
                        <h4>OFFICE 2</h4>
                        <p>--</p>
                        <p>--</p>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="clearfix"> </div>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
</div>
@endsection