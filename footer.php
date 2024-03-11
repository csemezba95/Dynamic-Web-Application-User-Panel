

      <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-12">
                    <h2>Who we are</h2>
                    <p class='text-left'>
                       From the latest in artificial intelligence and machine learning to immersive virtual reality experiences and groundbreaking hardware developments, "TechXperience" showcases the forefront of technological evolution. Engage with interactive demos, experience live demonstrations, and engage with experts who are shaping the future of technology.
                    </p>

                </div>
                <div class="col-md-4 col-sm-12">
                    <h2>Menu</h2>
                    <ul class="list-unstyled link-list">
                        <li><a href="who-we-are.php">Who we are <i class="fa fa-angle-right"></i></a></li>
                        <li><a href="what-we-do.php">What we do <i class="fa fa-angle-right"></i></a></li>
                        <li><a href="projects.php">Projects <i class="fa fa-angle-right"></i></a></li>
                        <li><a href="gallery.php">Gallery <i class="fa fa-angle-right"></i></a></li>
                    </ul>
                </div>
                <div class="col-md-4 col-sm-12 map-img">
                    <h2>Contact Us</h2>
                    <address class="md-margin-bottom-40">
						<i class='fa fa-home'></i> Dhaka, Bangladesh<br><br>
                        <i class='fa fa-phone'></i> 01920519595<br><br>
                        <i class='fa fa-envelope'></i> csemezba@gmail.com
                    </address>

                </div>
            </div>
            
          
            
        </div>
        

    </footer>
    <div class="copy">
            <div class="container">
                <a href="#">Dynamic Web Application</a>
                
                <span>
                <a href=''><i class="fab fa-facebook-f"></i></a>
        </span>
            </div>

        </div>
          
    
</body>


<script>

	/*document.addEventListener('DOMContentLoaded', function () {
	  // Set default language to 'en' if not already set in local storage
	  if (!localStorage.getItem('lang')) {
		localStorage.setItem('lang', 'en');
	  }

	  // Check the current language and show/hide buttons accordingly
	  updateLanguageButtons();

	});

	function changeLanguage(lang) {
	  // Change the language and update the buttons
	  localStorage.setItem('lang', lang);
	  updateLanguageButtons();
	}

	function updateLanguageButtons() {
	  // Get the current language from local storage
	  const currentLang = localStorage.getItem('lang');

	  // Show/hide buttons based on the current language
	  if (currentLang === 'en') {
		document.getElementById('enButton').style.display = 'none';
		document.getElementById('bnButton').style.display = 'block';
	  } else {
		document.getElementById('enButton').style.display = 'block';
		document.getElementById('bnButton').style.display = 'none';
	  }
	}*/
	
	     document.addEventListener('DOMContentLoaded', function () {
            // Set default language to 'en' if not already set in cookies
            if (!getCookie('lang')) {
                setCookie('lang', 'en');
            }

            // Check the current language and show/hide buttons accordingly
            updateLanguageButtons();
        });

        function changeLanguage(lang) {
            // Change the language and update the buttons
            setCookie('lang', lang);
            updateLanguageButtons();
			location.reload(true);
        }

        function updateLanguageButtons() {
            // Get the current language from cookies
            const currentLang = getCookie('lang');

            // Show/hide buttons based on the current language
            if (currentLang === 'en') {
                document.getElementById('enButton').style.display = 'none';
                document.getElementById('bnButton').style.display = 'block';
            } else {
                document.getElementById('enButton').style.display = 'block';
                document.getElementById('bnButton').style.display = 'none';
            }
        }

        // Function to set a cookie
        function setCookie(name, value, days = 7) {
            var expires = new Date();
            expires.setTime(expires.getTime() + days * 24 * 60 * 60 * 1000);
            document.cookie = name + '=' + value + ';expires=' + expires.toUTCString();
        }

        // Function to get the value of a cookie
        function getCookie(name) {
            var cookies = document.cookie.split('; ');
            for (var i = 0; i < cookies.length; i++) {
                var cookie = cookies[i].split('=');
                if (cookie[0] === name) {
                    return cookie[1];
                }
            }
            return null;
        }

</script>

<script src="assets/js/jquery-3.2.1.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/plugins/scroll-fixed/jquery-scrolltofixed-min.js"></script>
<script src="assets/plugins/slider/js/owl.carousel.min.js"></script>
<script src="assets/js/script.js"></script>

