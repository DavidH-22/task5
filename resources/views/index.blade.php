<!DOCTYPE html> 
<html lang="en">
    <head>
        <title>Second Choice</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/styles.css') }}">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" >

      
    </head>

    <body>
        
    <div id="weather-widget"></div>
              </div>
         <div class="navbar">
            <ul>
                <li><a class="active" href="#section-about">About</a></li>
                <li><a href="#section-services">Services</a></li>
                <li><a href="#section-contact">Contact</a></li>
              </ul>
             
        </div>

        <button id="dark-mode-toggle" class="dark-mode-button"><span class="material-symbols-outlined">
          mode_night
          </span></button>   
        
         
          
  <section id="section-about" class="about-section">
        <h2>About</h2>
  <div class="about">
        

      <p>
      At <strong>Second Choice</strong>, we are dedicated to revolutionizing the way people experience the internet.
      As a leading provider of high-speed fiber optic internet services, our mission is to empower individuals, businesses,
      and communities by delivering seamless, lightning-fast connectivity that fuels innovation, productivity, and entertainment.
    </p>

    <p>
      Founded on the belief that the internet should be accessible, reliable, and fast for everyone, we have grown into a trusted partner for
      thousands of homes and businesses. With our cutting-edge fiber-optic technology, we offer unmatched internet speeds that allow for smooth
      streaming, crystal-clear video calls, uninterrupted gaming, and efficient work-from-home solutions.
    </p>

    <h2>Why Choose Us?</h2>
    
    <div class="features-wrapper">
      <div class="feature-item">
        <strong>Blazing Fast Speeds:</strong>
        <p>Our fiber-optic network delivers speeds up to 1 Gbps, ensuring you stay connected at the fastest speeds available.</p>
      </div>
      <div class="feature-item">
        <strong>Reliable Connectivity:</strong>
        <p>Say goodbye to buffering and connection drops. Our network is designed for stability and reliability, even during peak hours.</p>
      </div>
      <div class="feature-item">
        <strong>Tailored for Everyone:</strong>
        <p>Whether you're streaming, gaming, or running a business, we offer flexible packages that meet your specific internet needs.</p>
      </div>
      <div class="feature-item">
        <strong>Future-Proof Technology:</strong>
        <p>Our fiber infrastructure is designed to support the digital future, from smart home integration to emerging IoT solutions.</p>
      </div>
      <div class="feature-item">
        <strong>Dedicated Support:</strong>
        <p>We provide 24/7 customer support to ensure you're always connected.</p>
      </div>
    </div>

    <p>
      At <strong>Second Choice</strong>, we don’t just provide internet — we provide the foundation for a connected future. Join us as we continue
      to expand, innovate, and shape the future of digital connectivity.
    </p>
  </div>

  <div class="lokasi">
    <h1>Find Second Choice in your city</h1>
    <div class="input-lokasi">
        <input type="text" id="nama-kota" placeholder="Masukkan kotamu">
        <a href="#" class="check-availability" onclick="checkAvailability()">check</a>
  </div>

    <div id="result" class="result"></div>

    <div class="highlights">
            <div class="highlight-item">
                <i class="fas fa-network-wired"></i>
                <h3>State-of-the-Art Infrastructure</h3>
                <p>Our robust fiber-optic network ensures reliable, high-speed internet access for all your personal and business needs.</p>
            </div>
            <div class="highlight-item">
                <i class="fas fa-bolt"></i>
                <h3>Blazing Fast Speeds</h3>
                <p>Enjoy lightning-fast internet speeds up to 1 Gbps, perfect for streaming, gaming, and running your business efficiently.</p>
            </div>
            <div class="highlight-item">
                <i class="fas fa-headset"></i>
                <h3>24/7 Customer Support</h3>
                <p>Our dedicated support team is available round the clock to assist you with any issues and ensure seamless connectivity.</p>
            </div>
            <div class="highlight-item">
                <i class="fas fa-globe"></i>
                <h3>Nationwide Coverage</h3>
                <p>With extensive coverage, we bring reliable internet services to both urban and rural areas across the country.</p>
            </div>
          </div>
    
  </section>

    <section id="section-services">   
      <h2>Services</h2>
            
      <div class="container">
        <h1>Our Services</h1>
        <div class="services">
            <div class="service1">
                <h2>High-Speed Fiber Internet</h2>
                <p>Enjoy unlimited internet speed with our fiber-optic service. With speeds up to 1 Gbps, we ensure a seamless browsing, streaming, and gaming experience without lag.</p>
            </div>
            <div class="service2">
                <h2>Dedicated Business Internet</h2>
                <p>For businesses that require fast, stable, and secure internet connections, we offer Dedicated Business Internet with guaranteed bandwidth and uninterrupted service.</p>
            </div>
            <div class="service3">
                <h2>Smart Home Integration</h2>
                <p>Enhance your home’s comfort and security with our Smart Home Integration services, allowing you to control your smart devices from your smartphone.</p>
            </div>
            <div class="service4">
                <h2>Wi-Fi Mesh Solutions</h2>
                <p>Eliminate dead spots in your home or office with our Wi-Fi Mesh Solutions, ensuring strong and stable signals in every corner of your space.</p>
            </div>
            <div class="service5">
                <h2>VoIP (Voice over IP) Services</h2>
                <p>Get internet-based phone services with crystal-clear voice quality and cost-effective rates. Our VoIP service supports low-cost international calls and advanced phone features.</p>
            </div>
            <div class="service6">
                <h2>Managed IT Services</h2>
                <p>Entrust your company's IT management to us, from network monitoring to technical support, allowing you to focus on your core business operations.</p>
            </div>
            <div class="service7">
                <h2>Cloud Hosting Solutions</h2>
                <p>Leverage the power of the cloud with our fast, secure, and reliable hosting solutions for your websites, applications, and databases.</p>
            </div>
            
        </div>
     
      </div>
      <iframe src='https://62bad66d3911471785903318ad206b84.elf.site'></iframe>
      
  
            
    </section>
      <br> 
      </br>   
     <footer>
        <section id="section-contact">
        
        <div class="formcontact">

            <div class="heading_container">
              <h2>
                Contact Us
              </h2>
            </div>
            
            <div class="contact ">
            
            <form action="{{ url('formulir') }}" method="POST" id="form">
            @csrf
                <!-- Input  Nama Depan -->
                <label for="namaD">First Name</label>
                <input type="text" id="namaD" name="namaD" placeholder="Your firs name.." required><br>
              
                <!-- Input  Nama Belakang -->
                <label for="namaB">Last Name</label>
                <input type="text" id="namaB" name="namaB" placeholder="Your last name.." required><br>

                <!-- Input  Nomor Telefon -->
                <label for="notelp">Telephone Number</label>
                <input type="text" id="notelp" name="notelp" placeholder="08xxxxxxx" required><br>

                <!-- Select Provinsi -->
                <label for="provinsi">Province</label>
                <select id="provinsi" name="provinsi" required>
                    <!-- (List  provinsi) -->
                    @foreach($provinsi as $key => $value)
                    <option value="{{ $key }}">{{ $value }}</option>
                    @endforeach
                </select><br>
          
                <!-- Input  Pesan -->
                <label for="pesan">Message</label>
                <textarea id="pesan" name="pesan" placeholder="Input Message.." style="height:200px" required></textarea><br>
          
               
                <!-- tombol submit -->
                <input type="submit" name="submit" value="submit">
                
                
            </form>
             <!--status pesan-->
             <p id="message"></p>
        </div>
         
            

                <p><strong>Address:</strong> 1234 Internet Blvd, Tech City, 56789</p>
                <p><strong>Phone:</strong> +123 456 7890</p>
                <p><strong>Email:</strong> contact@internetcompany.com</p>
            </div>
            <div id="weather" class="weather-container">
            <p>Loading weather data...</p>
          </div>

          <iframe width="425" height="350" 
          src="https://www.openstreetmap.org/export/embed.html?bbox=110.30136108398438%2C-7.8035208613796225%2C111.17889404296876%2C-7.337269730056307&amp;layer=mapnik" style="border: 1px solid black">
          </iframe><br/><small>
        </section>
     </footer>
            
         

          
     <script src="{{ asset('js/scripts.js') }}"></script>
  
    </body>
</html>