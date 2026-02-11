<?php
// Simple contact form handling
$messageSent = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name    = htmlspecialchars($_POST['name']);
    $email   = htmlspecialchars($_POST['email']);
    $phone   = htmlspecialchars($_POST['phone']);
    $message = htmlspecialchars($_POST['message']);

    // You can later connect this to email or database
    $messageSent = true;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>VRK ASSOCIATES | Construction Company</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; scroll-behavior: smooth; }
        body { font-family: Arial, Helvetica, sans-serif; line-height: 1.6; background: #f4f6f8; color: #333; }

        nav {
            position: fixed;
            width: 100%;
            background: #0b3c5d;
            padding: 15px 40px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            z-index: 1000;
        }

        nav h2 { color: white; }
        nav a { color: white; margin-left: 20px; text-decoration: none; font-weight: bold; }
        nav a:hover { color: #ffd700; }

        .hero {
            height: 100vh;
            background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)),
                        url('https://images.unsplash.com/photo-1503387762-592deb58ef4e') center/cover;
            color: white;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
        }

        .hero h1 { font-size: 50px; }
        .hero p { font-size: 20px; margin: 15px 0; }

        .btn {
            background: #ffd700;
            padding: 12px 25px;
            color: black;
            text-decoration: none;
            font-weight: bold;
            border-radius: 5px;
        }

        section { padding: 80px 40px; }

        .section-title { text-align: center; margin-bottom: 40px; }
        .section-title h2 { font-size: 36px; color: #0b3c5d; }

        .about, .contact { display: flex; flex-wrap: wrap; gap: 30px; }
        .about div, .contact div { flex: 1; min-width: 280px; }

        .services, .projects, .why-us {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 25px;
        }

        .service-box, .project, .why-box, form {
            background: white;
            padding: 25px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }

        .project { border-left: 5px solid #ffd700; }
        .why-us { background: #0b3c5d; color: white; padding: 60px 40px; }
        .why-box { background: rgba(255,255,255,0.1); box-shadow: none; }

        input, textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
        }

        button {
            background: #0b3c5d;
            color: white;
            padding: 12px;
            border: none;
            width: 100%;
            font-size: 16px;
        }

        iframe { width: 100%; height: 300px; border: 0; }

        footer {
            background: #111;
            color: white;
            text-align: center;
            padding: 25px;
        }

        .success {
            background: #d4edda;
            padding: 15px;
            margin-bottom: 15px;
            color: #155724;
            border-radius: 5px;
        }

        @media(max-width:768px) {
            nav { flex-direction: column; }
            .hero h1 { font-size: 36px; }
        }
    </style>
</head>

<body>

<nav>
    <h2>VRK ASSOCIATES</h2>
    <div>
        <a href="#home">Home</a>
        <a href="#about">About</a>
        <a href="#services">Services</a>
        <a href="#projects">Projects</a>
        <a href="#contact">Contact</a>
    </div>
</nav>

<section id="home" class="hero">
    <h1>VRK ASSOCIATES</h1>
    <p>Building Dreams, Creating Futures</p>
    <a href="#contact" class="btn">Get a Quote</a>
</section>

<section id="about">
    <div class="section-title"><h2>About Us</h2></div>
    <div class="about">
        <div>
            <p>VRK ASSOCIATES delivers high-quality residential, commercial, and industrial projects across India.</p>
            <p>We focus on quality, safety, and on-time delivery.</p>
        </div>
        <div>
            <ul>
                <li>✔ ISO Quality Standards</li>
                <li>✔ Experienced Engineers</li>
                <li>✔ Transparent Pricing</li>
                <li>✔ On-time Delivery</li>
            </ul>
        </div>
    </div>
</section>

<section id="services">
    <div class="section-title"><h2>Our Services</h2></div>
    <div class="services">
        <div class="service-box">Residential Construction</div>
        <div class="service-box">Commercial Buildings</div>
        <div class="service-box">Industrial Projects</div>
        <div class="service-box">Renovation Works</div>
    </div>
</section>

<section id="projects">
    <div class="section-title"><h2>Our Projects</h2></div>
    <div class="projects">
        <div class="project">🏗️ Villa – Coimbatore</div>
        <div class="project">🏢 Complex – Erode</div>
        <div class="project">🏭 Shed – Salem</div>
        <div class="project">🏠 Apartment – Tiruppur</div>
    </div>
</section>

<section class="why-us">
    <div class="why-box"><h3>Quality Materials</h3><p>Premium-grade materials used</p></div>
    <div class="why-box"><h3>Expert Team</h3><p>Skilled engineers & workforce</p></div>
    <div class="why-box"><h3>Customer Satisfaction</h3><p>Client-first approach</p></div>
</section>

<section id="contact">
    <div class="section-title"><h2>Contact Us</h2></div>
    <div class="contact">
        <div>
            <?php if ($messageSent): ?>
                <div class="success">Thank you! Your message has been received.</div>
            <?php endif; ?>

            <form method="post">
                <input type="text" name="name" placeholder="Your Name" required>
                <input type="email" name="email" placeholder="Email Address" required>
                <input type="text" name="phone" placeholder="Phone Number">
                <textarea name="message" placeholder="Your Message"></textarea>
                <button type="submit">Send Message</button>
            </form>
        </div>

        <div>
            <iframe src="https://maps.google.com/maps?q=Tamil%20Nadu&z=7&output=embed"></iframe>
        </div>
    </div>
</section>

<footer>
    <p>© <?php echo date("Y"); ?> VRK ASSOCIATES | All Rights Reserved</p>
    <p>📞 +91 98765 43210 | 📧 info@vrkassociates.com</p>
</footer>

</body>
</html>
