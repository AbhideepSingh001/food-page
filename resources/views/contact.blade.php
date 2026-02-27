{{-- Head Include --}}
@include('include.head')
@section('title', 'Contact')

<style>
    body {
        margin: 0;
        font-family: Arial, Helvetica, sans-serif;
        background: #f8f8f8;
    }

    .contact-header {
        background: url('https://images.unsplash.com/photo-1504674900247-0877df9cc836') center/cover;
        height: 300px;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        font-size: 40px;
        font-weight: bold;
    }

    .container .contact-grid{
        width: 85%;
        margin: auto;
        padding: 40px 0;
    }

    .contact-grid {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 40px;
    }

    .contact-grid .contact-info {
        background: white;
        padding: 30px;
        border-radius: 10px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    }

    .contact-grid .contact-info h2 {
        margin-bottom: 20px;
    }

    .info-box {
        margin-bottom: 20px;
    }

    .info-box span {
        font-weight: bold;
        color: #ff5722;
    }

    .opening-hours {
        margin-top: 20px;
    }

    .contact-form {
        background: white;
        padding: 30px;
        border-radius: 10px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    }

    .contact-form h2 {
        margin-bottom: 20px;
    }

    .form-group {
        margin-bottom: 15px;
    }

    input,
    select,
    textarea {
        width: 100%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
        font-size: 14px;
    }

    textarea {
        height: 120px;
    }

    .rating {
        display: flex;
        gap: 5px;
        font-size: 22px;
        color: #ffc107;
        cursor: pointer;
    }

    button {
        background: #ff5722;
        color: white;
        border: none;
        padding: 12px 25px;
        border-radius: 5px;
        cursor: pointer;
        font-size: 16px;
    }

    button:hover {
        background: #e64a19;
    }

    .map {
        margin-top: 40px;
    }

    .map iframe {
        width: 100%;
        height: 350px;
        border: 0;
        border-radius: 10px;
    }

    .footer-note {
        text-align: center;
        margin-top: 20px;
        color: #666;
    }

    @media(max-width:768px) {

        .contact-grid {
            grid-template-columns: 1fr;
        }

    }
</style>
</head>

<body>

{{-- Nav-bar Include --}}
@include('partials.header')
    <div class="contact-header">
        Contact Us
    </div>

    <div class="container">

        <div class="contact-grid">

            <!-- Contact Information -->

            <div class="contact-info">

                <h2>Get In Touch</h2>

                <div class="info-box">
                    <span>Phone :</span><br>
                    +91 98765 43210
                </div>

                <div class="info-box">
                    <span>Email :</span><br>
                    info@deliciousfood.com
                </div>

                <div class="info-box">
                    <span>Address :</span><br>
                    Food Street, Near City Mall,<br>
                    Udaipur, Rajasthan, India
                </div>

                <div class="opening-hours">

                    <h3>Opening Hours</h3>

                    <p>Monday - Friday : 10 AM - 10 PM</p>
                    <p>Saturday : 11 AM - 11 PM</p>
                    <p>Sunday : 11 AM - 9 PM</p>

                </div>

            </div>


            <!-- Contact Form -->

            <div class="contact-form">

                <h2>Send Your Enquiry</h2>

                <form>

                    <div class="form-group">
                        <input type="text" placeholder="Your Name" required>
                    </div>

                    <div class="form-group">
                        <input type="email" placeholder="Your Email" required>
                    </div>

                    <div class="form-group">
                        <input type="tel" placeholder="Phone Number">
                    </div>

                    <div class="form-group">
                        <select>
                            <option>Select Enquiry Type</option>
                            <option>Food Order</option>
                            <option>Table Reservation</option>
                            <option>Feedback</option>
                            <option>Complaint</option>
                            <option>Other</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Rate Our Food</label>

                        <div class="rating">
                            ★ ★ ★ ★ ★
                        </div>

                    </div>

                    <div class="form-group">
                        <textarea placeholder="Write your message or enquiry..."></textarea>
                    </div>

                    <button type="submit">Send Message</button>

                </form>

            </div>

        </div>


        <!-- Google Map -->

        <div class="map">

            <iframe
                src="https://maps.google.com/maps?q=udaipur&t=&z=13&ie=UTF8&iwloc=&output=embed">
            </iframe>

        </div>

        <div class="footer-note">
            We usually respond within 24 hours.
        </div>

    </div>

</body>

</html>