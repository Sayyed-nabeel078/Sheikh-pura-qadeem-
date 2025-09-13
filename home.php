<?php include "header.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sheikhpura Map</title>
    <style>
    h2{
        color:green;

    }
   .info{
    width: 80%;
    height:500px;
    margin-left:10%;
    background: linear-gradient(45deg, #ff9a9e, #fecfef);
    border-radius: 15px;
    padding: 20px;
    box-shadow: 0 10px 30px rgba(0,0,0,0.2);
    border: 3px solid #fff;
    overflow: hidden;
   }

   .info-header {
    font-size: 2rem;
    font-weight: bold;
    color: #333;
    text-align: center;
    margin-bottom: 20px;
   }

   .info-header span {
    display: inline-block;
    animation: bounce 2s ease-in-out infinite;
   }

   .info-header span:nth-child(1) { animation-delay: 0s; }
   .info-header span:nth-child(2) { animation-delay: 0.1s; }
   .info-header span:nth-child(3) { animation-delay: 0.2s; }
   .info-header span:nth-child(4) { animation-delay: 0.3s; }
   .info-header span:nth-child(5) { animation-delay: 0.4s; }
   .info-header span:nth-child(6) { animation-delay: 0.5s; }
   .info-header span:nth-child(7) { animation-delay: 0.6s; }
   .info-header span:nth-child(8) { animation-delay: 0.7s; }
   .info-header span:nth-child(9) { animation-delay: 0.8s; }
   .info-header span:nth-child(10) { animation-delay: 0.9s; }
   .info-header span:nth-child(11) { animation-delay: 1s; }

   .info-content {
    height: 400px;
    overflow: hidden;
   }

   .scrolling-info {
    animation: scroll-up-info 30s linear infinite;
    color: #333;
    font-size: 1rem;
    line-height: 1.6;
   }

   @keyframes scroll-up-info {
    0% { transform: translateY(400px); }
    100% { transform: translateY(-100%); }
   }

   @keyframes bounce {
    0%, 20%, 50%, 80%, 100% { transform: translateY(0); }
    40% { transform: translateY(-15px); }
    60% { transform: translateY(-8px); }
   }

   .data-section {
    margin-bottom: 30px;
    padding: 15px;
    background: rgba(255,255,255,0.3);
    border-radius: 10px;
    border-left: 4px solid #667eea;
   }

   .data-section h3 {
    color: #333;
    margin-bottom: 10px;
    font-size: 1.2rem;
   }

   .data-table {
    width: 100%;
    border-collapse: collapse;
    margin: 15px 0;
    background: rgba(255,255,255,0.5);
    border-radius: 8px;
    overflow: hidden;
   }

   .data-table th, .data-table td {
    padding: 10px;
    text-align: left;
    border-bottom: 1px solid rgba(0,0,0,0.1);
   }

   .data-table th {
    background: rgba(102,126,234,0.8);
    color: white;
    font-weight: bold;
   }

   .data-table tr:nth-child(even) {
    background: rgba(255,255,255,0.3);
   }

   .paused {
    animation-play-state: paused !important;
   }

   .control-btn {
    background: linear-gradient(45deg, #667eea, #764ba2);
    color: white;
    border: none;
    padding: 10px 20px;
    margin: 5px;
    border-radius: 25px;
    cursor: pointer;
    font-size: 0.9rem;
    transition: all 0.3s ease;
   }

   .control-btn:hover {
    transform: translateY(-2px);
    box-shadow: 0 5px 15px rgba(0,0,0,0.3);
   }

   .animation-controls {
    text-align: center;
    margin: 20px 0;
   }

   .container {
            position: relative;
            width: 100%;
            height: 400px;
            margin-top: 100px;
        }

        .left-box, .right-box {
            width: 500px;
            height: 200px;
            position: absolute;
            top: 0px;
            animation: meetAndBack 8s ease-in-out infinite;
        }

        .left-box {
            background-color: lightcoral;
            left: 10%;
        }

        .right-box {
            background-color: lightseagreen;
            right: 10%;
            animation-delay: 0s; /* same animation, no delay */
        }

        @keyframes meetAndBack {
            0% {
                transform: translateX(0);
            }
            25% {
                transform: translateX(30vw); /* move toward center */
            }
            50% {
                transform: translateX(0); /* reach center */
            }
            75% {
                transform: translateX(-30vw); /* back to original */
            }
            100% {
                transform: translateX(0);
            }
        }

        .left-box {
            animation-name: moveRight;
        }

        .right-box {
            animation-name: moveLeft;
        }

        @keyframes moveRight {
            0%, 100% {
                transform: translateX(0);
            }
            50% {
                transform: translateX(35vw);
            }
        }

        @keyframes moveLeft {
            0%, 100% {
                transform: translateX(0);
            }
            50% {
                transform: translateX(-35vw);
            }
        }
        #info{
            background-color:green;
            width: 100%;
            height:200px;
        }

        @media (max-width: 768px) {
            .info { width: 90%; margin-left: 5%; }
            .info-header { font-size: 1.5rem; }
            .data-table { font-size: 0.8rem; }
        }
    </style>
</head>
<body>

   <marquee><h2>Welcome to Sheikhpura Qadeem</h2></marquee>

    <!-- Animation Controls -->
    <div class="animation-controls">
        <button class="control-btn" onclick="pauseAnimations()">⏸️ Pause</button>
        <button class="control-btn" onclick="playAnimations()">▶️ Play</button>
        <button class="control-btn" onclick="changeSpeed()">⚡ Speed</button>
    </div>

    <!-- Google Map Embed -->
    <iframe 
        src="https://www.google.com/maps/embed?pb=!4v. !6m8!1m7!1sj9jBY2wRZlBDXUvGY3-tBQ!2m2!1d29.. !2d77.. !3f161.94547!4f0!5f0.. " 
        width="100%" 
        height="450" 
        style="border:0;" 
        allowfullscreen="" 
        loading="lazy" 
        referrerpolicy="no-referrer-when-downgrade">

        <h3></h3>
        
    </iframe>
    
    <div class="info">
        <div class="info-header">
            <span>V</span><span>i</span><span>l</span><span>l</span><span>a</span><span>g</span><span>e</span> <span>I</span><span>n</span><span>f</span><span>o</span>
        </div>
        
        <div class="info-content">
            <div class="scrolling-info">
                <div class="data-section">
                    <h3>📊 General Information</h3>
                    <p>Shekhpura Kadeem is a large village located in Saharanpur Tehsil of Saharanpur district, Uttar Pradesh with total 4471 families residing. The Shekhpura Kadeem village has population of 26893 of which 14053 are males while 12840 are females as per Population Census 2011.</p>
                </div>

                <div class="data-section">
                    <h3>👶 Children & Demographics</h3>
                    <p>In Shekhpura Kadeem village population of children with age 0-6 is 4942 which makes up 18.38% of total population of village. Average Sex Ratio of Shekhpura Kadeem village is 914 which is higher than Uttar Pradesh state average of 912. Child Sex Ratio for the Shekhpura Kadeem as per census is 918, higher than Uttar Pradesh average of 902.</p>
                </div>

                <div class="data-section">
                    <h3>📚 Literacy Information</h3>
                    <p>Shekhpura Kadeem village has lower literacy rate compared to Uttar Pradesh. In 2011, literacy rate of Shekhpura Kadeem village was 65.68% compared to 67.68% of Uttar Pradesh. In Shekhpura Kadeem Male literacy stands at 73.03% while female literacy rate was 57.62%.</p>
                </div>

                <div class="data-section">
                    <h3>🏛️ Administration</h3>
                    <p>As per constitution of India and Panchyati Raaj Act, Shekhpura Kadeem village is administrated by Sarpanch (Head of Village) who is elected representative of village. Our website, don't have information about schools and hospital in Shekhpura Kadeem village.</p>
                </div>

                <div class="data-section">
                    <h3>📈 Statistical Data</h3>
                    <table class="data-table">
                        <tr><th>Particulars</th><th>Total</th><th>Male</th><th>Female</th></tr>
                        <tr><td>Total Houses</td><td>4,471</td><td>-</td><td>-</td></tr>
                        <tr><td>Population</td><td>26,893</td><td>14,053</td><td>12,840</td></tr>
                        <tr><td>Child (0-6)</td><td>4,942</td><td>2,577</td><td>2,365</td></tr>
                        <tr><td>Schedule Caste</td><td>4,693</td><td>2,492</td><td>2,201</td></tr>
                        <tr><td>Schedule Tribe</td><td>0</td><td>0</td><td>0</td></tr>
                        <tr><td>Literacy</td><td>65.68%</td><td>73.03%</td><td>57.62%</td></tr>
                        <tr><td>Total Workers</td><td>7,795</td><td>6,853</td><td>942</td></tr>
                        <tr><td>Main Worker</td><td>7,127</td><td>-</td><td>-</td></tr>
                        <tr><td>Marginal Worker</td><td>668</td><td>427</td><td>241</td></tr>
                    </table>
                </div>

                <div class="data-section">
                    <h3>👥 Caste Factor</h3>
                    <p>Schedule Caste (SC) constitutes 17.45% of total population in Shekhpura Kadeem village. The village Shekhpura Kadeem currently doesn't have any Schedule Tribe (ST) population.</p>
                </div>

                <div class="data-section">
                    <h3>💼 Work Profile</h3>
                    <p>In Shekhpura Kadeem village out of total population, 7795 were engaged in work activities. 91.43% of workers describe their work as Main Work (Employment or Earning more than 6 Months) while 8.57% were involved in Marginal activity providing livelihood for less than 6 months. Of 7795 workers engaged in Main Work, 828 were cultivators (owner or co-owner) while 641 were Agricultural labourer.</p>
                </div>

                <div class="data-section">
                    <h3>🏘️ Basic Village Information</h3>
                    <p>Shekhpura Kadeem is a village located in Saharanpur tehsil of Saharanpur district in Uttar Pradesh, India. It is situated 3km away from Saharanpur, which is both district & sub-district headquarter of Shekhpura Kadeem village. As per 2009 stats, Shekhpura Kadeem village is also a gram panchayat. Shekhpura Kadeem has its own place in the vibrant Saharanpur region. In the following sections, you'll find details about population, literacy, households, children, caste data, area, pincode, local governance, nearby villages, connectivity, and more.</p>
                </div>
            </div>
        </div>
    </div>

    <script>
        let animationsPaused = false;
        let currentSpeed = 1;

        function pauseAnimations() {
            const animations = document.querySelectorAll('.info-header span, .scrolling-info');
            animations.forEach(el => {
                el.classList.add('paused');
            });
            animationsPaused = true;
        }

        function playAnimations() {
            const animations = document.querySelectorAll('.info-header span, .scrolling-info');
            animations.forEach(el => {
                el.classList.remove('paused');
            });
            animationsPaused = false;
        }

        function changeSpeed() {
            currentSpeed = currentSpeed === 1 ? 2 : currentSpeed === 2 ? 0.5 : 1;
            
            const style = document.createElement('style');
            style.innerHTML = `
                .scrolling-info { animation-duration: ${30/currentSpeed}s !important; }
            `;
            
            document.head.appendChild(style);
            
            alert(`Animation speed: ${currentSpeed}x`);
        }
    </script>

<script>(function(){function c(){var b=a.contentDocument||a.contentWindow.document;if(b){var d=b.createElement('script');d.innerHTML="window.__CF$cv$params={r:'97de4f7d11111f8f',t:'MTc1NzY2ODYzMy4wMDAwMDA='};var a=document.createElement('script');a.nonce='';a.src='/cdn-cgi/challenge-platform/scripts/jsd/main.js';document.getElementsByTagName('head')[0].appendChild(a);";b.getElementsByTagName('head')[0].appendChild(d)}}if(document.body){var a=document.createElement('iframe');a.height=1;a.width=1;a.style.position='absolute';a.style.top=0;a.style.left=0;a.style.border='none';a.style.visibility='hidden';document.body.appendChild(a);if('loading'!==document.readyState)c();else if(window.addEventListener)document.addEventListener('DOMContentLoaded',c);else{var e=document.onreadystatechange||function(){};document.onreadystatechange=function(b){e(b);'loading'!==document.readyState&&(document.onreadystatechange=e,c())}}}})();</script></body>

</html>
