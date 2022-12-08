@extends('layouts.main')

@section('content')
<div class="row" style="background-color: white;padding-top: 20px;padding-bottom: 20px;">
    <h1 class="mb-sm mt-sm"><strong class="mb-4">Contact</strong> Us</h1>
	<div class="col-md-6">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3952.053212309765!2d110.35340531415557!3d-7.889502080666394!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7b00889ad8f84d%3A0x2e0009ca7815eaf0!2sVocational%20High%20School%201%20Bantul!5e0!3m2!1sen!2sid!4v1668154980948!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
	</div>

<div class="col-md-6">
                            
                            <form id="contactForm" action="" method="POST">
                                <div class="row">
                                    <div class="form-group">
                                        <div class="col-md-6">
                                            <label class="form-label fw-bold text-dark">Your name</label>
                                            <input type="text" name="nama_kontak" id="nama_kontak" value="" data-msg-required="Please enter your name." maxlength="100" class="form-control" required="">
                                        </div>
                                        <div class="col-md-6">
                                            <br>
                                            <label class="form-label fw-bold text-dark">Your email address</label>
                                            <input type="email" name="email_kontak" id="email_kontak" value="" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control" required="">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <br>
                                            <label class="form-label fw-bold text-dark">Subject</label>
                                            <input type="text" name="subject_kontak" id="subject_kontak" value="" data-msg-required="Please enter the subject." maxlength="100" class="form-control" required="">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <br>
                                            <label class="form-label fw-bold text-dark">Message</label>
                                            <textarea name="message_kontak" id="message_kontak" maxlength="5000" data-msg-required="Please enter your message." rows="10" class="form-control" required=""></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <br>
                                        <input id="btn-message" type="submit" value="Send Message" class="btn btn-primary btn-lg mb-xlg" data-loading-text="Loading...">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>


@endsection