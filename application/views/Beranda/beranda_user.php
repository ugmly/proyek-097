<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image Slider</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f0f0;
            color: #333;
            text-align: center;
        }

        .header {
            padding: 0;
            color: #ff4081;
            text-align: center;
            position: relative;
            z-index: 1;
            transition: color 0.5s ease, transform 1s ease;
            font-size: 1.2em;
        }

        .header:hover {
            color: #ff80ab;
            transform: scale(1.1);
        }

        .slider {
            width: 100%;
            max-width: 900px;
            margin: 20px auto;
            overflow: hidden;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            background-color: white;
            position: relative;
        }

        .slides {
            display: flex;
            transition: transform 0.5s ease-in-out;
        }

        .slides img {
            width: 100%;
            height: auto;
        }

        .navigation {
            text-align: center;
            margin-top: 10px;
        }

        .navigation a {
            display: inline-block;
            width: 12px;
            height: 12px;
            margin: 0 5px;
            background-color: #ccc;
            border-radius: 50%;
            text-indent: -9999px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .navigation a.active,
        .navigation a:hover {
            background-color: #4CAF50;
        }

        .content {
            padding: 20px;
            background-color: rgba(255, 255, 255, 0.1);
            margin: 20px auto;
            max-width: 900px;
            border-radius: 10px;
            animation: fadeIn 1s;
            color: #4CAF50;
        }


        @media (max-width: 600px) {
            .slider {
                width: 100%;
            }

            .slides img {
                height: auto;
            }
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }

        .animate-left {
            animation: slideInLeft 1s;
        }

        @keyframes slideInLeft {
            from {
                transform: translateX(-100%);
            }
            to {
                transform: translateX(0);
            }
        }

        .animate-right {
            animation: slideInRight 1s;
        }

        @keyframes slideInRight {
            from {
                transform: translateX(100%);
            }
            to {
                transform: translateX(0);
            }
        }

        .animate-up {
            animation: slideInUp 1s;
        }

        @keyframes slideInUp {
            from {
                transform: translateY(100%);
            }
            to {
                transform: translateY(0);
            }
        }

        .animate-down {
            animation: slideInDown 1s infinite alternate;
        }

        @keyframes slideInDown {
            from {
                transform: translateY(-10%);
            }
            to {
                transform: translateY(0);
            }
        }
    </style>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function () {
            let currentIndex = 0;
            const slides = $('.slides img');
            const totalSlides = slides.length;

            function showSlide(index) {
                const newLeft = -index * $('.slider').width();
                $('.slides').css('transform', `translateX(${newLeft}px)`);
                currentIndex = index;
                $('.navigation a').removeClass('active');
                $('.navigation a').eq(index).addClass('active');
            }

            function nextSlide() {
                const nextIndex = (currentIndex + 1) % totalSlides;
                showSlide(nextIndex);
            }

            setInterval(nextSlide, 3000);

            $('.navigation a').click(function (e) {
                e.preventDefault();
                const index = $(this).index();
                showSlide(index);
            });

            $(window).resize(function () {
                showSlide(currentIndex);
            });

            showSlide(currentIndex);
        });
    </script>
</head>

<body>
    <div class="header animate-down">
        <h1>Welcome to CinemaXX!</h1>
        <!-- <p class="tagline">Users Dashboard - Cinema Ticket Management</p> -->
    </div>

    <div class="jumbotron mb-5">
        <div class="slider animate-left">
            <div class="slides">
                <img src="<?php echo base_url('assets/images/1.jpg'); ?>" alt="Image 1">
                <img src="<?php echo base_url('assets/images/2.jpg'); ?>" alt="Image 2">
                <img src="<?php echo base_url('assets/images/3.jpg'); ?>" alt="Image 3">
                <img src="<?php echo base_url('assets/images/4.jpg'); ?>" alt="Image 4">
            </div>
        </div>

        <div class="navigation animate-right">
            <a href="#" class="active">1</a>
            <a href="#">2</a>
            <a href="#">3</a>
            <a href="#">4</a>
        </div>
    </div>

    <div class="content animate-up">
        <h2>About Us</h2>
        <p>Welcome to CinemaXX, where we bring you the best film experience you can imagine! Our mission is to provide our guests with top-notch service and unforgettable memories. Stay tuned as we frequently update our list of movies and exclusive features just for you.</p>

        <h2>Our Services</h2>
        <p>At CinemaXX, we offer a variety of services to enhance your movie-watching experience. From comfortable seating to the latest in audio and visual technology, we strive to make your visit as enjoyable as possible. Check out our VIP lounges, gourmet snacks, and personalized movie recommendations.</p>

        <h2>Our Movies</h2>
        <p>Our extensive movie collection includes the latest blockbusters, classic films, and indie gems. Whether you're in the mood for action, romance, comedy, or drama, CinemaXX has something for everyone. Join us for special screenings, movie marathons, and exclusive premieres.</p>

        <h2>Contact Us</h2>
        <p>Have questions or feedback? We would love to hear from you! Contact us via email at contact@cinemaxx.com or give us a call at 123-456-7890. Stay connected with us on social media for the latest news and updates. Thank you for choosing CinemaXX!</p>
    </div>
</body>

</html>
