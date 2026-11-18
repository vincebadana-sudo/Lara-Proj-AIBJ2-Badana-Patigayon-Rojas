@extends('layouts.app')

@section('content')
<style>
    .contact-page {
        background-color: #FAF5EE !important;
        color: #3B2314 !important;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif !important;
        margin: 0;
        padding: 0;
    }

    .contact-hero {
        position: relative;
        height: 310px;
        background: url('https://images.unsplash.com/photo-1509042239860-f550ce710b93?auto=format&fit=crop&w=1400&q=80') center/cover no-repeat;
    }

    .hero-overlay {
        width: 100%;
        height: 100%;
        background: linear-gradient(90deg, rgba(42, 22, 10, 0.85) 0%, rgba(42, 22, 10, 0.45) 60%, rgba(42, 22, 10, 0.15) 100%);
        display: flex;
        align-items: center;
    }

    .hero-inner {
        max-width: 1050px;
        width: 100%;
        margin: 0 auto;
        padding: 0 24px 25px;
        color: #FFFFFF;
    }

    .hero-inner h1 {
        font-family: Georgia, 'Times New Roman', serif;
        font-size: 3rem;
        margin: 0 0 6px;
    }

    .hero-inner p {
        font-size: 1.15rem;
        color: #F2E7D8;
        margin: 0;
    }

    .hero-wave {
        position: absolute;
        bottom: -1px;
        left: 0;
        width: 100%;
        line-height: 0;
    }

    .hero-wave svg {
        width: 100%;
        height: 50px;
    }

    .contact-details {
        max-width: 1000px;
        margin: 15px auto 40px;
        padding: 0 24px;
    }

    .details-grid {
        display: flex;
        justify-content: space-between;
        align-items: center;
        text-align: center;
        padding: 20px 0;
        border-bottom: 1px solid #E5D7C6;
    }

    .detail-box {
        flex: 1;
        padding: 10px 15px;
    }

    .detail-icon {
        margin-bottom: 8px;
    }

    .detail-box h3 {
        font-size: 1.05rem;
        margin: 0 0 5px;
        color: #3B2314;
    }

    .detail-box p {
        font-size: 0.92rem;
        color: #6B5241;
        margin: 0;
        line-height: 1.5;
    }

    .detail-divider {
        width: 1px;
        height: 75px;
        background-color: #E2D3C1;
    }

    .message-area {
        max-width: 1000px;
        margin: 0 auto 60px;
        padding: 0 24px;
    }

    .message-container {
        display: grid;
        grid-template-columns: 1.1fr 0.9fr;
        gap: 45px;
        align-items: center;
    }

    .form-side h2 {
        font-family: Georgia, 'Times New Roman', serif;
        font-size: 2.2rem;
        margin: 0 0 10px;
        color: #3B2314;
    }

    .form-desc {
        color: #6B5241;
        font-size: 0.96rem;
        margin-bottom: 22px;
    }

    .input-wrap {
        margin-bottom: 14px;
    }

    .input-wrap input,
    .input-wrap textarea {
        width: 100%;
        padding: 13px 16px;
        background-color: #FDFBF7;
        border: 1px solid #E3D5C5;
        border-radius: 10px;
        font-size: 0.95rem;
        color: #3B2314;
        font-family: inherit;
        box-sizing: border-box;
    }

    .input-wrap input:focus,
    .input-wrap textarea:focus {
        outline: none;
        border-color: #6B4226;
    }

    .input-wrap input.invalid,
    .input-wrap textarea.invalid {
        border-color: #C0392B;
        background-color: #FFF7F6;
    }

    .err-text {
        display: block;
        color: #C0392B;
        font-size: 0.82rem;
        margin-top: 4px;
        min-height: 15px;
    }

    .success-box {
        background-color: #E6F4EA;
        border: 1px solid #A8DAB5;
        color: #1E6B34;
        padding: 12px 16px;
        border-radius: 10px;
        margin-bottom: 16px;
        font-size: 0.92rem;
        font-weight: 500;
    }

    .send-btn {
        background-color: #6B4226;
        color: #FFFFFF;
        border: none;
        padding: 13px 28px;
        border-radius: 25px;
        font-size: 0.95rem;
        font-weight: 600;
        cursor: pointer;
    }

    .send-btn:hover {
        background-color: #52311B;
    }

    .photo-side img {
        width: 100%;
        height: 440px;
        object-fit: cover;
        border-radius: 18px;
        box-shadow: 0 10px 24px rgba(59, 35, 20, 0.12);
    }

    .visit-area {
        background-color: #F2E7D8;
        padding: 50px 24px;
    }

    .visit-container {
        max-width: 1000px;
        margin: 0 auto;
        display: grid;
        grid-template-columns: 0.85fr 1.15fr;
        gap: 40px;
        align-items: center;
    }

    .visit-info h2 {
        font-family: Georgia, 'Times New Roman', serif;
        font-size: 1.9rem;
        margin: 0 0 10px;
        color: #3B2314;
    }

    .visit-info p {
        color: #6B5241;
        font-size: 0.95rem;
        margin-bottom: 22px;
    }

    .hours-card {
        display: flex;
        align-items: center;
        gap: 15px;
        background-color: #E8D9C5;
        padding: 16px 20px;
        border-radius: 14px;
        max-width: 270px;
    }

    .hours-text strong {
        display: block;
        font-size: 0.95rem;
        color: #3B2314;
    }

    .hours-text span {
        display: block;
        font-size: 0.85rem;
        color: #5C4332;
    }

    .visit-photo img {
        width: 100%;
        height: 265px;
        object-fit: cover;
        border-radius: 16px;
        box-shadow: 0 8px 20px rgba(59, 35, 20, 0.1);
    }

    @media (max-width: 768px) {
        .details-grid { flex-direction: column; gap: 20px; }
        .detail-divider { width: 80px; height: 1px; }
        .message-container, .visit-container { grid-template-columns: 1fr; }
        .photo-side img { height: 300px; }
    }
</style>

<div class="contact-page">

    <!-- Hero Section -->
    <section class="contact-hero">
        <div class="hero-overlay">
            <div class="hero-inner">
                <h1>Contact Us</h1>
                <p>We'd love to hear from you!</p>
            </div>
        </div>
        <div class="hero-wave">
            <svg viewBox="0 0 1440 80" preserveAspectRatio="none">
                <path d="M0,35 C380,90 740,0 1120,50 C1280,70 1380,55 1440,40 L1440,80 L0,80 Z" fill="#FAF5EE"></path>
            </svg>
        </div>
    </section>

    <!-- Contact Details (3 Columns) -->
    <section class="contact-details">
        <div class="details-grid">
            <div class="detail-box">
                <div class="detail-icon">
                    <svg width="26" height="26" viewBox="0 0 24 24" fill="#4E311E">
                        <path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/>
                    </svg>
                </div>
                <h3>Our Location</h3>
                <p>Ampayon, Butuan,<br>Agusan Del Norte</p>
            </div>

            <div class="detail-divider"></div>

            <div class="detail-box">
                <div class="detail-icon">
                    <svg width="26" height="26" viewBox="0 0 24 24" fill="#4E311E">
                        <path d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"/>
                    </svg>
                </div>
                <h3>Email Us</h3>
                <p>dailygrind.cafe@gmail.com</p>
            </div>

            <div class="detail-divider"></div>

            <div class="detail-box">
                <div class="detail-icon">
                    <svg width="26" height="26" viewBox="0 0 24 24" fill="#4E311E">
                        <path d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z"/>
                    </svg>
                </div>
                <h3>Call Us</h3>
                <p>+63 912 345 6789</p>
            </div>
        </div>
    </section>

    <!-- Send Us a Message + Latte Image -->
    <section class="message-area">
        <div class="message-container">
            <div class="form-side">
                <h2>Send Us a Message</h2>
                <p class="form-desc">Have a question, suggestion, or just want to say hi? Fill out the form below!</p>

                <div id="successAlert" class="success-box" style="display: none;">
                    Thank you! Your message has been sent successfully.
                </div>

                <form id="contactForm" novalidate>
                    <div class="input-wrap">
                        <input type="text" id="name" name="name" placeholder="Name">
                        <span class="err-text" id="nameErr"></span>
                    </div>

                    <div class="input-wrap">
                        <input type="email" id="email" name="email" placeholder="Email Address">
                        <span class="err-text" id="emailErr"></span>
                    </div>

                    <div class="input-wrap">
                        <input type="text" id="subject" name="subject" placeholder="Subject">
                        <span class="err-text" id="subjectErr"></span>
                    </div>

                    <div class="input-wrap">
                        <textarea id="message" name="message" rows="5" placeholder="Your Message"></textarea>
                        <span class="err-text" id="messageErr"></span>
                    </div>

                    <button type="submit" class="send-btn">Send Message &rarr;</button>
                </form>
            </div>

            <div class="photo-side">
                <img src="https://images.unsplash.com/photo-1541167760496-1628856ab772?auto=format&fit=crop&w=800&q=80" alt="Latte Art Coffee">
            </div>
        </div>
    </section>

    <!-- Visit Our Café -->
    <section class="visit-area">
        <div class="visit-container">
            <div class="visit-info">
                <h2>Visit Our Café</h2>
                <p>Come enjoy great coffee, delicious pastries, and a cozy vibe!</p>

                <div class="hours-card">
                    <div class="hours-icon">
                        <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="#4E311E" stroke-width="2">
                            <circle cx="12" cy="12" r="10"></circle>
                            <polyline points="12 6 12 12 16 14"></polyline>
                        </svg>
                    </div>
                    <div class="hours-text">
                        <strong>Opening Hours</strong>
                        <span>Mon – Sun</span>
                        <span>7:00 AM – 10:00 PM</span>
                    </div>
                </div>
            </div>

            <div class="visit-photo">
                <img src="https://images.unsplash.com/photo-1554118811-1e0d58224f24?auto=format&fit=crop&w=900&q=80" alt="Café Interior">
            </div>
        </div>
    </section>

</div>
@endsection

@push('scripts')
    <script src="{{ asset('js/contact.js') }}"></script>
@endpush
