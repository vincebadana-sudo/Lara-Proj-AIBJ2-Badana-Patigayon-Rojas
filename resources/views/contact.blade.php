@extends('layouts.app')

@section('content')
<div class="contact-page-wrapper" style="background: linear-gradient(180deg, #FAF5EE 0%, #F5ECE1 100%); color: #3B2314; font-family: Arial, sans-serif; width: 100%; transition: background 0.3s ease, color 0.3s ease;">

    <!-- Luxury Hero Section -->
    <section style="position: relative; height: 380px; background: url('https://images.unsplash.com/photo-1509042239860-f550ce710b93?auto=format&fit=crop&w=1400&q=80') center/cover no-repeat;">
        <div style="width: 100%; height: 100%; background: radial-gradient(circle, rgba(42, 22, 10, 0.6) 0%, rgba(26, 13, 5, 0.9) 100%); display: flex; align-items: center; justify-content: center; text-align: center;">
            <div style="max-width: 800px; padding: 0 24px; color: #FFFFFF;">
                <span style="text-transform: uppercase; letter-spacing: 3px; font-size: 0.85rem; color: #D4B59D; font-weight: 600; display: block; margin-bottom: 10px; font-family: Arial, sans-serif;">Get In Touch</span>
                <h1 style="font-family: Arial, sans-serif; font-size: 3.5rem; margin: 0 0 12px; letter-spacing: 1px; font-weight: bold;">Contact Us</h1>
                <p style="font-size: 1.15rem; color: #E8D9C5; margin: 0; font-weight: normal; font-style: italic; font-family: Arial, sans-serif;">We'd love to hear from you and share a cup of conversation.</p>
            </div>
        </div>
    </section>

    <!-- Floating Compact Contact Cards -->
    <section style="max-width: 1050px; margin: -45px auto 55px; position: relative; z-index: 10; padding: 0 24px;">
        <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 22px;">

            <!-- Location Card -->
            <div class="info-card" style="background: #FFFFFF; padding: 24px 20px; border-radius: 16px; box-shadow: 0 15px 30px rgba(59, 35, 20, 0.07); text-align: center; border: 1px solid #EFE6DC; font-family: Arial, sans-serif; transition: background 0.3s, border 0.3s;">
                <div class="icon-circle" style="width: 50px; height: 50px; background: linear-gradient(135deg, #FAF5EE 0%, #E8D9C5 100%); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 14px; box-shadow: 0 5px 15px rgba(107, 66, 38, 0.1);">
                    <svg width="22" height="22" viewBox="0 0 24 24" fill="#6B4226">
                        <path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/>
                    </svg>
                </div>
                <h3 class="card-title" style="font-family: Arial, sans-serif; font-size: 1.15rem; margin: 0 0 6px; color: #3B2314; font-weight: bold;">Our Location</h3>
                <p class="card-text" style="font-size: 0.9rem; color: #7A5C47; margin: 0; line-height: 1.5; font-family: Arial, sans-serif;">Ampayon, Butuan,<br>Agusan Del Norte</p>
            </div>

            <!-- Email Card -->
            <div class="info-card" style="background: #FFFFFF; padding: 24px 20px; border-radius: 16px; box-shadow: 0 15px 30px rgba(59, 35, 20, 0.07); text-align: center; border: 1px solid #EFE6DC; font-family: Arial, sans-serif; transition: background 0.3s, border 0.3s;">
                <div class="icon-circle" style="width: 50px; height: 50px; background: linear-gradient(135deg, #FAF5EE 0%, #E8D9C5 100%); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 14px; box-shadow: 0 5px 15px rgba(107, 66, 38, 0.1);">
                    <svg width="22" height="22" viewBox="0 0 24 24" fill="#6B4226">
                        <path d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"/>
                    </svg>
                </div>
                <h3 class="card-title" style="font-family: Arial, sans-serif; font-size: 1.15rem; margin: 0 0 6px; color: #3B2314; font-weight: bold;">Email Us</h3>
                <p class="card-text" style="font-size: 0.9rem; color: #7A5C47; margin: 0; line-height: 1.5; font-family: Arial, sans-serif;">dailygrind.cafe@gmail.com</p>
            </div>

            <!-- Call Card -->
            <div class="info-card" style="background: #FFFFFF; padding: 24px 20px; border-radius: 16px; box-shadow: 0 15px 30px rgba(59, 35, 20, 0.07); text-align: center; border: 1px solid #EFE6DC; font-family: Arial, sans-serif; transition: background 0.3s, border 0.3s;">
                <div class="icon-circle" style="width: 50px; height: 50px; background: linear-gradient(135deg, #FAF5EE 0%, #E8D9C5 100%); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 14px; box-shadow: 0 5px 15px rgba(107, 66, 38, 0.1);">
                    <svg width="22" height="22" viewBox="0 0 24 24" fill="#6B4226">
                        <path d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z"/>
                    </svg>
                </div>
                <h3 class="card-title" style="font-family: Arial, sans-serif; font-size: 1.15rem; margin: 0 0 6px; color: #3B2314; font-weight: bold;">Call Us</h3>
                <p class="card-text" style="font-size: 0.9rem; color: #7A5C47; margin: 0; line-height: 1.5; font-family: Arial, sans-serif;">+63 912 345 6789</p>
            </div>

        </div>
    </section>

    <!-- Send Message & Image Section -->
    <section style="max-width: 1100px; margin: 0 auto 70px; padding: 0 24px; font-family: Arial, sans-serif;">
        <div class="form-container" style="display: grid; grid-template-columns: 1.15fr 0.85fr; gap: 55px; align-items: center; background: #FFFFFF; padding: 50px; border-radius: 28px; box-shadow: 0 25px 50px rgba(59, 35, 20, 0.06); border: 1px solid #EFE6DC; transition: background 0.3s, border 0.3s;">
            <div>
                <span style="text-transform: uppercase; letter-spacing: 2px; font-size: 0.8rem; color: #A67C52; font-weight: bold; display: block; margin-bottom: 8px;">Drop a Line</span>
                <h2 class="section-title" style="font-family: Arial, sans-serif; font-size: 2.5rem; margin: 0 0 12px; color: #3B2314; font-weight: bold;">Send Us a Message</h2>
                <p class="section-desc" style="color: #7A5C47; font-size: 1.02rem; margin-bottom: 25px; line-height: 1.6;">Have a question, feedback, or want to reserve a table? Send us a note below!</p>

                <!-- Success Alert Box -->
                <div id="successAlert" style="display: none; background-color: #E6F4EA; border: 1px solid #A8DAB5; color: #1E6B34; padding: 14px 18px; border-radius: 12px; margin-bottom: 20px; font-size: 0.95rem; font-weight: bold; font-family: Arial, sans-serif;">
                    ☕ Thank you! Your message has been sent successfully. We'll get back to you soon!
                </div>

                <form id="contactForm" onsubmit="event.preventDefault(); document.getElementById('successAlert').style.display='block'; this.reset();">
                    <div style="margin-bottom: 18px;">
                        <input type="text" placeholder="Your Full Name" required class="form-input" style="width: 100%; padding: 15px 20px; background: #FAF5EE; border: 1px solid #E3D5C5; border-radius: 14px; font-size: 0.95rem; color: #3B2314; box-sizing: border-box; outline: none; font-family: Arial, sans-serif;">
                    </div>
                    <div style="margin-bottom: 18px;">
                        <input type="email" placeholder="Email Address" required class="form-input" style="width: 100%; padding: 15px 20px; background: #FAF5EE; border: 1px solid #E3D5C5; border-radius: 14px; font-size: 0.95rem; color: #3B2314; box-sizing: border-box; outline: none; font-family: Arial, sans-serif;">
                    </div>
                    <div style="margin-bottom: 18px;">
                        <input type="text" placeholder="Subject" required class="form-input" style="width: 100%; padding: 15px 20px; background: #FAF5EE; border: 1px solid #E3D5C5; border-radius: 14px; font-size: 0.95rem; color: #3B2314; box-sizing: border-box; outline: none; font-family: Arial, sans-serif;">
                    </div>
                    <div style="margin-bottom: 25px;">
                        <textarea rows="4" placeholder="Your Message" required class="form-input" style="width: 100%; padding: 15px 20px; background: #FAF5EE; border: 1px solid #E3D5C5; border-radius: 14px; font-size: 0.95rem; color: #3B2314; box-sizing: border-box; outline: none; resize: vertical; font-family: Arial, sans-serif;"></textarea>
                    </div>
                    <button type="submit" style="background-color: #6B4226; color: #FFFFFF; border: none; padding: 16px 36px; border-radius: 35px; font-size: 1rem; font-weight: bold; cursor: pointer; box-shadow: 0 8px 20px rgba(107, 66, 38, 0.25); letter-spacing: 0.5px; font-family: Arial, sans-serif;">Send Message &rarr;</button>
                </form>
            </div>
            <div>
                <img src="https://images.unsplash.com/photo-1541167760496-1628856ab772?auto=format&fit=crop&w=800&q=80" alt="Latte Art" style="width: 100%; height: 480px; object-fit: cover; border-radius: 22px; box-shadow: 0 20px 40px rgba(59, 35, 20, 0.15);">
            </div>
        </div>
    </section>

    <!-- Visit Café Section -->
    <section class="visit-section" style="background-color: #EEDCC8; padding: 70px 24px; border-top: 1px solid #E2D0BD; font-family: Arial, sans-serif; transition: background 0.3s, border 0.3s;">
        <div style="max-width: 1100px; margin: 0 auto; display: grid; grid-template-columns: 0.9fr 1.1fr; gap: 60px; align-items: center;">
            <div>
                <span style="text-transform: uppercase; letter-spacing: 2px; font-size: 0.8rem; color: #7A5C47; font-weight: bold; display: block; margin-bottom: 8px;">Welcome Home</span>
                <h2 class="section-title" style="font-family: Arial, sans-serif; font-size: 2.4rem; margin: 0 0 14px; color: #3B2314; font-weight: bold;">Visit Our Café</h2>
                <p class="section-desc" style="color: #6B5241; font-size: 1.05rem; margin-bottom: 30px; line-height: 1.6;">Come enjoy great specialty coffee, freshly baked pastries, and a warm, cozy corner waiting just for you.</p>
                <div class="hours-box" style="background-color: #FAF5EE; padding: 22px 28px; border-radius: 18px; max-width: 320px; box-shadow: 0 10px 25px rgba(59, 35, 20, 0.06); border: 1px solid #E3D5C5; transition: background 0.3s, border 0.3s;">
                    <strong class="card-title" style="display: block; font-size: 1.05rem; color: #3B2314; margin-bottom: 6px; font-family: Arial, sans-serif;">Opening Hours</strong>
                    <span class="card-text" style="display: block; font-size: 0.95rem; color: #7A5C47; font-weight: normal; font-family: Arial, sans-serif;">Mon – Sun: 7:00 AM – 10:00 PM</span>
                </div>
            </div>
            <div>
                <img src="https://images.unsplash.com/photo-1554118811-1e0d58224f24?auto=format&fit=crop&w=900&q=80" alt="Café Interior" style="width: 100%; height: 340px; object-fit: cover; border-radius: 22px; box-shadow: 0 20px 40px rgba(59, 35, 20, 0.15);">
            </div>
        </div>
    </section>

</div>

<!-- Dark Mode Rules para sa tibuok Contact Page -->
<style>
    body.dark-mode .contact-page-wrapper {
        background: linear-gradient(180deg, #121212 0%, #181818 100%) !important;
        color: #E0E0E0 !important;
    }
    body.dark-mode .info-card {
        background: #1E1E1E !important;
        border: 1px solid #333333 !important;
    }
    body.dark-mode .card-title {
        color: #FFFFFF !important;
    }
    body.dark-mode .card-text {
        color: #B0B0B0 !important;
    }
    body.dark-mode .form-container {
        background: #1E1E1E !important;
        border: 1px solid #333333 !important;
    }
    body.dark-mode .section-title {
        color: #FFFFFF !important;
    }
    body.dark-mode .section-desc {
        color: #B0B0B0 !important;
    }
    body.dark-mode .form-input {
        background: #2A2A2A !important;
        border: 1px solid #444444 !important;
        color: #FFFFFF !important;
    }
    body.dark-mode .form-input::placeholder {
        color: #888888 !important;
    }
    body.dark-mode .visit-section {
        background-color: #181818 !important;
        border-top: 1px solid #282828 !important;
    }
    body.dark-mode .hours-box {
        background-color: #1E1E1E !important;
        border: 1px solid #333333 !important;
    }
</style>
@endsection
