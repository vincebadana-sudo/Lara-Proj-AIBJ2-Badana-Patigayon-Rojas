@extends('layouts.app')

@section('content')
<div style="background-color: #FAF5EE; color: #3B2314; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; width: 100%;">

    <!-- Hero Section -->
    <section style="position: relative; height: 310px; background: url('https://images.unsplash.com/photo-1509042239860-f550ce710b93?auto=format&fit=crop&w=1400&q=80') center/cover no-repeat;">
        <div style="width: 100%; height: 100%; background: linear-gradient(90deg, rgba(42, 22, 10, 0.85) 0%, rgba(42, 22, 10, 0.45) 60%, rgba(42, 22, 10, 0.15) 100%); display: flex; align-items: center;">
            <div style="max-width: 1050px; width: 100%; margin: 0 auto; padding: 0 24px 25px; color: #FFFFFF;">
                <h1 style="font-family: Georgia, serif; font-size: 3rem; margin: 0 0 6px;">Contact Us</h1>
                <p style="font-size: 1.15rem; color: #F2E7D8; margin: 0;">We'd love to hear from you!</p>
            </div>
        </div>
    </section>

    <!-- Contact Details -->
    <section style="max-width: 1000px; margin: 25px auto 40px; padding: 0 24px;">
        <div style="display: flex; justify-content: space-between; align-items: center; text-align: center; padding: 20px 0; border-bottom: 1px solid #E5D7C6;">
            <div style="flex: 1; padding: 10px;">
                <h3 style="font-size: 1.05rem; margin: 0 0 5px; color: #3B2314;">Our Location</h3>
                <p style="font-size: 0.92rem; color: #6B5241; margin: 0;">Ampayon, Butuan,<br>Agusan Del Norte</p>
            </div>
            <div style="width: 1px; height: 75px; background-color: #E2D3C1;"></div>
            <div style="flex: 1; padding: 10px;">
                <h3 style="font-size: 1.05rem; margin: 0 0 5px; color: #3B2314;">Email Us</h3>
                <p style="font-size: 0.92rem; color: #6B5241; margin: 0;">dailygrind.cafe@gmail.com</p>
            </div>
            <div style="width: 1px; height: 75px; background-color: #E2D3C1;"></div>
            <div style="flex: 1; padding: 10px;">
                <h3 style="font-size: 1.05rem; margin: 0 0 5px; color: #3B2314;">Call Us</h3>
                <p style="font-size: 0.92rem; color: #6B5241; margin: 0;">+63 912 345 6789</p>
            </div>
        </div>
    </section>

    <!-- Send Message & Photo -->
    <section style="max-width: 1000px; margin: 0 auto 60px; padding: 0 24px;">
        <div style="display: grid; grid-template-columns: 1.1fr 0.9fr; gap: 45px; align-items: center;">
            <div>
                <h2 style="font-family: Georgia, serif; font-size: 2.2rem; margin: 0 0 10px; color: #3B2314;">Send Us a Message</h2>
                <p style="color: #6B5241; font-size: 0.96rem; margin-bottom: 22px;">Have a question or just want to say hi? Fill out the form below!</p>
                <form>
                    <div style="margin-bottom: 14px;"><input type="text" placeholder="Name" style="width: 100%; padding: 13px; background: #FDFBF7; border: 1px solid #E3D5C5; border-radius: 10px;"></div>
                    <div style="margin-bottom: 14px;"><input type="email" placeholder="Email Address" style="width: 100%; padding: 13px; background: #FDFBF7; border: 1px solid #E3D5C5; border-radius: 10px;"></div>
                    <div style="margin-bottom: 14px;"><input type="text" placeholder="Subject" style="width: 100%; padding: 13px; background: #FDFBF7; border: 1px solid #E3D5C5; border-radius: 10px;"></div>
                    <div style="margin-bottom: 14px;"><textarea rows="4" placeholder="Your Message" style="width: 100%; padding: 13px; background: #FDFBF7; border: 1px solid #E3D5C5; border-radius: 10px;"></textarea></div>
                    <button type="submit" style="background-color: #6B4226; color: #FFFFFF; border: none; padding: 13px 28px; border-radius: 25px; font-weight: 600; cursor: pointer;">Send Message &rarr;</button>
                </form>
            </div>
            <div>
                <img src="https://images.unsplash.com/photo-1541167760496-1628856ab772?auto=format&fit=crop&w=800&q=80" alt="Latte Art" style="width: 100%; height: 400px; object-fit: cover; border-radius: 18px;">
            </div>
        </div>
    </section>

    <!-- Visit Café -->
    <section style="background-color: #F2E7D8; padding: 50px 24px;">
        <div style="max-width: 1000px; margin: 0 auto; display: grid; grid-template-columns: 0.85fr 1.15fr; gap: 40px; align-items: center;">
            <div>
                <h2 style="font-family: Georgia, serif; font-size: 1.9rem; margin: 0 0 10px; color: #3B2314;">Visit Our Café</h2>
                <p style="color: #6B5241; font-size: 0.95rem; margin-bottom: 22px;">Come enjoy great coffee, delicious pastries, and a cozy vibe!</p>
                <div style="background-color: #E8D9C5; padding: 16px 20px; border-radius: 14px; max-width: 270px;">
                    <strong style="display: block; font-size: 0.95rem; color: #3B2314;">Opening Hours</strong>
                    <span style="font-size: 0.85rem; color: #5C4332;">Mon – Sun: 7:00 AM – 10:00 PM</span>
                </div>
            </div>
            <div>
                <img src="https://images.unsplash.com/photo-1554118811-1e0d58224f24?auto=format&fit=crop&w=900&q=80" alt="Interior" style="width: 100%; height: 265px; object-fit: cover; border-radius: 16px;">
            </div>
        </div>
    </section>

</div>
@endsection
