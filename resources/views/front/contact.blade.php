@extends('front.layout')
@section('content')


   <!--Start Content-->
   <div class="content">

    <div class="contact-page">

    <!--Start Get in Touch-->
            <div class="get-in-touch">
                <div class="container">
                <div class="row">


                    <div class="col-md-12">
                        <div class="get-touch-form">
                        <p class="success_msg" id="success_msg" style="display:none">Thank You! We will contact you shortly.</p>
                        <form name="contact_form"  action="{{url('/contactsend')}}" method="post">
                            @csrf
                            <input name="name" id="name" type="text" onKeyPress="remove_contact_errors();" onblur="if(this.value == '') { this.value='Your Name'}" onfocus="if (this.value == 'Your Name') {this.value=''}" value="Your Name">
                            <input class="last" name="email_address" id="email_address" onKeyPress="remove_contact_errors();" type="text" onblur="if(this.value == '') { this.value='E-mail Address'}" onfocus="if (this.value == 'E-mail Address') {this.value=''}" value="E-mail Address">
                            <textarea name="msg" id="msg" cols="1" onKeyPress="remove_contact_errors();" rows="1" onblur="if(this.value == '') { this.value='Message'}" onfocus="if (this.value == 'Message') {this.value=''}" value="Message">Message</textarea>
                            <input type="submit" name=" " value="send message" onClick="validateContact();">
                            </form>
                        </div>
                    </div>

                </div>
                </div>


            </div>
    <!--End Get in Touch-->


    {{-- <!--Start Map-->
        <div id='map'>
            <div id='find-us'></div>
        </div>
    <!--End Map--> --}}


    </div>

</div>
<!--End Content-->
@endsection
