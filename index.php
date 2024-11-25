<?php
session_start(); // Start the session

// Check if the user is logged in
if (isset($_SESSION['user_id'])) {
    // Redirect to login page if not logged in
    header("Location: dashboard.php");
    exit();
}



?>
<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="shortcut icon" href="https://debhal.com/icon.png" type="image/x-icon">
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!-- primary meta tags -->
  <title>Debhal Housings - Your Trusted Partner In Real Estate Development</title>
  <meta name="title" content="Debhal" />

  <!-- Google font link -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&display=swap" rel="stylesheet" />

  <!-- Google Icon link -->
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@24,400,0..1,0" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="./assets/css/style.css" />

</head>

<body>


  <!-- Popup -->


  <!-- <style>

.popup {
    display: none; 
    position: fixed; 
    z-index: 1000; 
    left: 0;
    top: 0;
    width: 100%; 
    height: 100%; 
    background-color: rgba(255, 255, 255, 0.9); 
    justify-content: center; 
    align-items: center; 
}

.popup-content {
    background-color: #ffffff; 
    border-radius: 10px;
    padding: 20px;
    text-align: center;
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1); 
    width: 300px;
}

.close-btnx {
    color: #007bff;
    float: right;
    font-size: 20px;
    font-weight: bold;
    cursor: pointer;
}

#popupTitle {
    margin: 10px 0;
    color: #007bff; 
}

#emailInput {
    width: 90%;
    padding: 10px;
    margin: 10px 0;
    border: 1px solid #007bff;
    border-radius: 5px;
    outline: none;
}

#emailInput:focus {
    border-color: #0056b3;
}

#signupButton {
    background-color: #007bff;
    color: #ffffff;
    border: none;
    padding: 10px 15px;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s; 
}

#signupButton:hover {
    background-color: #0056b3; 
}


</style>

<div id="signupPopupContainer" class="popup">
    <div id="signupPopupContent" class="popup-content">
        <span id="closePopupBtn" class="close-btnx" onclick="closeSignupPopup()">&times;</span>
        <h2 id="popupTitle"><i class="fas fa-user-plus"></i> Sign Up Now!</h2>
        <p id="popupMessage">Sign up to get the latest updates.</p>
        <form id="signupForm">
            <a id="signupButton"  href="Register/">Sign Up</a>
        </form>
    </div>
</div>


<script>
  function showSignupPopup() {
    document.getElementById('signupPopupContainer').style.display = 'flex';
}

function closeSignupPopup() {
    document.getElementById('signupPopupContainer').style.display = 'none';
}

document.getElementById('signupForm').addEventListener('submit', function(event) {
    event.preventDefault();
    alert('Thank you for signing up!');
    closeSignupPopup();
});

// Show the popup every 15 seconds
setTimeout(showSignupPopup, 120000);

</script> -->


  <!-- Popup -->





  <header class="header" data-header>
    <div class="container">
      <a href="/" class="logo">
        <!-- <img src="./logo.png" width="50" height="28" alt="Debhal" /> -->
        <div>
          <h3 class="logo-text">DEBHAL</h3>
          <p class="logo-p">THE HOMECOMING</p>
        </div>
      </a>

      <nav class="navbar" data-navbar>
        <ul class="navbar-list">
          <li>
            <a href="/" class="navbar-link label-medium active">Home</a>
            <a href="all_properties/" class="navbar-link label-medium">All Posts</a>
            <a href="#pricing" class="navbar-link label-medium">Pricing</a>
            <a href="about/" class="navbar-link label-medium">About</a>
            <a href="contact/" class="navbar-link label-medium">Contact Us</a>
          </li>
        </ul>

        <div class="navbar-wrapper">
          <!-- <a href="#" class="btn-link label-medium">SignUp</a> -->

          <a href="Register/" class="btn btn-outline label-medium">Sign Up / LogIn</a>
          <a onclick="alert('Please Sign Up to add Post.')" class="btn btn-primary btn-outline label-medium"
            style="color: white;">Add Post +</a>
        </div>
      </nav>

      <button class="nav-toggle-btn icon-btn" aria-label="toggle navbar" data-nav-toggler>
        <span class="material-symbols-rounded open" aria-hidden="true">menu</span>
        <span class="material-symbols-rounded close" aria-hidden="true">close</span>
      </button>
    </div>
  </header>

  <main>
    <article>
      <!-- #HERO -->

      <section class="hero">
        <div class="container">
          <div class="hero-content">
            <h1 class="headline-large hero-title">
              Find a place where you can be yourself.
            </h1>
            <p class="body-large hero-text">
              <!-- If you're looking for a place where you can be yourself, don't
              give up. Keep searching until you find a place that feels like
              home. -->
            </p>

            <form method="GET" action="all_properties/index.php" class="search-bar"
              style="margin: 0 auto; max-width: 1000px;">
              <label class="search-item">
                <span class="label-medium label">I am Looking For</span>
                <select name="property_owner_type_filter" class="search-item-field body-medium" id="propertyOwnerType">
                  <option value="any" selected>Select</option>
                  <option value="rent">Rent</option>
                  <option value="sale">Purchase</option>
                </select>
                <span class="material-symbols-rounded" aria-hidden="true">real_estate_agent</span>
              </label>

              <label class="search-item">
                <span class="label-medium label">Property Type</span>
                <select name="property_type_filter" class="search-item-field body-medium" id="propertyType">
                  <option value="any" selected>Select</option>
                  <option value="Apartments / Houses & Villas">Apartments</option>
                  <option value="Apartments / Houses & Villas">Houses & Villas</option>
                  <option value="pg roommate">PG</option>
                  <option value="pg roommate">Roommate</option>
                  <option value="shop office godown">Shop</option>
                  <option value="shop office godown">Office</option>
                  <option value="shop office godown">Godown</option>
                </select>
                <span class="material-symbols-rounded" aria-hidden="true">gite</span>
              </label>


              <script>
                document.getElementById('propertyOwnerType').addEventListener('change', function () {
                  const propertyTypeSelect = document.getElementById('propertyType');
                  const options = propertyTypeSelect.options;

                  let pgOption, roommateOption;

                  // Loop through options to find PG and Roommate
                  for (let i = 0; i < options.length; i++) {
                    if (options[i].textContent === 'PG') {
                      pgOption = options[i];
                    } else if (options[i].textContent === 'Roommate') {
                      roommateOption = options[i];
                    }
                  }

                  if (this.value === 'sale') { // When Purchase is selected
                    pgOption.disabled = true;
                    roommateOption.disabled = true;
                    propertyTypeSelect.value = 'any'; // Reset selection to 'Select'
                  } else { // When Rent is selected
                    pgOption.disabled = false;
                    roommateOption.disabled = false;
                  }

                  // Check if PG or Roommate is selected and then change to Purchase
                  if (propertyTypeSelect.value === 'pg' || propertyTypeSelect.value === 'roommate') {
                    propertyOwnerTypeSelect.value = 'any'; // Reset to 'Select' in owner type dropdown
                  }
                });
              </script>





              <label class="search-item">
                <span class="label-medium label">Location</span>

                <input type="text" name="location" placeholder="Street, City, Zip..."
                  class="search-item-field body-medium" id="location" />
                <span class="material-symbols-rounded" aria-hidden="true">location_on</span>



              </label>

              <link rel="stylesheet" href="https://unpkg.com/@mapbox/mapbox-gl-geocoder/dist/mapbox-gl-geocoder.css" />
              <script src="https://api.mapbox.com/mapbox-gl-js/v2.10.0/mapbox-gl.js"></script>
              <script src="https://unpkg.com/@mapbox/mapbox-gl-geocoder/dist/mapbox-gl-geocoder.min.js"></script>
              <style>
                .mapboxgl-ctrl-geocoder {
                  max-width: unset !important;
                  width: 60% !important;
                  box-shadow: unset !important;
                  /* border: 1px solid rgb(183, 183, 183); */
                }

                .mapboxgl-ctrl-geocoder--input {
                  padding: 6px 15px !important;


                }

                .mapboxgl-ctrl-geocoder .mapboxgl-ctrl-geocoder--pin-right>* {
                  z-index: 2;
                  position: absolute;
                  right: 70px;
                  top: 15px;
                  display: none;
                }

                .mapboxgl-ctrl-geocoder {
                  height: 36px;
                  padding: 6px 15px !important;
                  color: rgba(0, 0, 0, 0.75);
                  box-shadow: none;
                  border: 0px none rgba(0, 0, 0, 0.75);
                  background-color: rgba(0, 0, 0, 0);
                  margin: 30px 0px 0px 0px;
                }

                .mapboxgl-ctrl-geocoder--input:focus {
                  border: none !important;
                  outline: none;
                  /* Removes the dotted border */
                }

                .mapboxgl-ctrl-geocoder--icon-search {
                  display: none;
                }

                .mapboxgl-ctrl-geocoder .suggestions {
                  z-index: 999 !important;
                  width: auto;
                  overflow: scroll;
                  height: 300px;
                }

                .mapboxgl-ctrl-geocoder .suggestions ul li {
                  width: auto;
                }

                @media screen and (max-width: 640px) {
                  .mapboxgl-ctrl-geocoder {
                    width: 100% !important;
                    max-width: unset !important;
                    box-shadow: unset !important;
                  }

                  .mapboxgl-ctrl-geocoder--input {
                    padding: 2px 2px !important;
                    width: 100%;
                    font-size: small;
                    height: unset;
                  }

                  .mapboxgl-ctrl-geocoder--icon-close {
                    width: 15px;
                    margin-top: -5px;
                    background: transparent !important;
                  }
                }
              </style>
              <script>
                // Set up Mapbox Geocoder
                const geocoder = new MapboxGeocoder({
                  accessToken: 'sk.eyJ1IjoiZGViaGFsNzE1MCIsImEiOiJjbTE5bmhxdmYxZnN5MmpzY3Bkenh1andpIn0.mJ7gQr4LHUjsOBP_8_EGWA',
                  placeholder: 'Search for an address...',
                  mapboxgl: mapboxgl,
                  limit: 10, // Limit results
                  countries: 'IN', // Restrict to India
                  bbox: [68.1766451354, 6.5546079001, 97.4025614766, 35.6745458126] // Bounding box for India (west, south, east, north)
                });

                // Add the geocoder to the input element
                document.getElementById('location').parentNode.appendChild(geocoder.onAdd());
                document.getElementById('location').style.display = 'none';

                // Handle result selection
                geocoder.on('result', (event) => {
                  const address = event.result.place_name;
                  document.getElementById('location').value = address;
                });
              </script>

              <button type="submit" class="search-btn">
                <span class="material-symbols-rounded" aria-hidden="true">search</span>
                <span class="label-medium">Search</span>
              </button>
            </form>

          </div>

          <img src="./assets/images/hero.png" width="816" height="659" role="presentation" class="hero-banner" />

          <img src="./assets/images/bg-pattern.png" width="1240" height="840" role="presentation" class="bg-pattern" />
        </div>
      </section>

      <!-- PROPERTY SECTION -->
      <section class="section property" aria-labelledby="property-label">
        <div class="container">
          <div class="title-wrapper">
            <div>
              <h2 class="section-title headline-small">
                Our Recent Properties
              </h2>
              <p class="section-text body-large">
                Explore our latest listings showcasing unique homes and prime locations, perfect for finding your dream
                property or investment opportunity.
              </p>
            </div>
            <a href="all_properties/" class="btn btn-outline">
              <span class="label-medium">Explore more</span>
              <span class="material-symbols-rounded" aria-hidden="true">arrow_outward</span>
            </a>
          </div>

          <div class="property-list">
            <?php
            require 'db_connect.php';

            // Fetch properties where visibility is 'visible'
            $sql = "SELECT * FROM properties WHERE property_display_filter = 'visible' ORDER BY created_at DESC LIMIT 7";
            $result = $conn->query($sql);

            function parse_serialized_array($data) {
              preg_match_all('/i:\d+;s:\d+:"([^"]+)"/', trim($data, 'a:{'), $matches);
              return $matches[1] ?? [];
          }

          if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $photos = parse_serialized_array($row['property_photos']);
                if ($photos) {
                    $photo_list = json_encode($photos);
                } else {
                    $photo_list = '[]';
                }
                ?>
                <div class="card">
                    <div class="card-banner">
                        <figure class="img-holder" style="--width: 585; --height: 390">
                            <img src="add_post/<?php echo htmlspecialchars($photos[0] ?? 'uploads/_default_home_pic.avif'); ?>"
                                width="585" height="390" alt="Property Image" title="Click To View Full Image"
                                style="cursor: pointer; height: 250px; object-position: center;" class="img-cover"
                                onclick="viewfullimage(<?php echo htmlspecialchars($photo_list); ?>);" loading="lazy" />
                        </figure>


                <div id="imageModal" class="modal">
                  <span class="close" onclick="closeImage()">&times;</span>
                  <div class="slider-container">
                    <span class="prev" onclick="changeSlide(-1)">&#10094;</span>
                    <img class="modal-content" id="modalImage" src="" alt="Modal Image">
                    <span class="next" onclick="changeSlide(1)">&#10095;</span>
                  </div>
                </div>


                <style>
                  .card-meta-list ul li {
                    align-items: baseline;
                  }
                </style>


                <span class="badge label-medium" style="color: black;">For
                  <?php echo htmlspecialchars($row['property_owner_type_filter']); ?>
                </span>
                <button class="icon-btn fav-btn" aria-label="add to favorite " data-toggle-btn
                  onclick="alert('Please Login To Add To Faviorates');">
                  <span class="material-symbols-rounded" aria-hidden="true">favorite</span>
                </button>
              </div>
              <div class="card-content">
                <span class="tittle-large">
                  <?php 
    if (!empty($row['price']) && $row['price'] !== '0') {
        echo 'Rs. ' . number_format($row['price']);
    } elseif (!empty($row['monthly_rent']) && $row['monthly_rent'] !== '0') {
        echo 'Rs. ' . number_format($row['monthly_rent']) . ' /month';
    } else {
        echo 'Rs. N/A';
    }
    ?>
                </span>
                <h3>
                  <p class="title-small card-title">
                    <?php echo htmlspecialchars($row['property_name']); ?>
                  </p>
                </h3>
                <address class="body-medium card-text">
                  <?php echo htmlspecialchars($row['location']); ?>
                </address>

                <span class="tittle-large">
                  <i>(
                    <?php echo htmlspecialchars($row['property_type_filter']); ?> )
                  </i></span>


                <div class="card-meta-list">
                  <div class="meta-item">
                    <span class="material-symbols-rounded meta-icon" aria-hidden="true">bed</span>

                    <span class="meta-text label-medium">
                      <?php $bedrooms = !empty($row['bedrooms']) ? htmlspecialchars($row['bedrooms']) : 'N/A';
    echo $bedrooms . ' Bed';
    ?>
                    </span>
                  </div>

                  <div class="meta-item">
                    <span class="material-symbols-rounded meta-icon" aria-hidden="true">bathtub</span>
                    <span class="meta-text label-medium"><span class="meta-text label-medium">
                        <?php $bathrooms = !empty($row['bathrooms']) ? htmlspecialchars($row['bathrooms']) : 'N/A';
    echo $bathrooms . ' Bath';
    ?>
                      </span></span>
                  </div>

                  <div class="meta-item">
                    <span class="material-symbols-rounded meta-icon" aria-hidden="true">straighte</span>

                    <span class="meta-text label-medium">
                      <?php 
    if (!empty($row['carpet_area']) && $row['carpet_area'] !== '0') {
        echo number_format($row['carpet_area']);
    } elseif (!empty($row['super_built_area']) && $row['super_built_area'] !== '0') {
        echo number_format($row['super_built_area']);
    } else {
        echo 'N/a ';
    }
    ?> sqft
                    </span>
                  </div>
                </div>

                <div class="card-meta-list">
                  <details>
                    <summary>View More Details </summary>
                    <ul>
                      <?php if (!empty($row['ad_posted_by'])): ?>
                      <li><b>AD Posted By</b>:
                        <?php echo htmlspecialchars($row['ad_posted_by']); ?>
                      </li>
                      <?php endif; ?>

                      <?php if ($row['total_floor'] > 0): ?>
                      <li><b>Total Floors</b>:
                        <?php echo htmlspecialchars($row['total_floor']); ?>
                      </li>
                      <?php endif; ?>

                      <?php if ($row['situated_floor'] > 0): ?>
                      <li><b>Situated Floor</b>:
                        <?php echo htmlspecialchars($row['situated_floor']); ?>
                      </li>
                      <?php endif; ?>

                      <?php if ($row['carpet_area'] > 0): ?>
                      <li><b>Carpet Area</b>:
                        <?php echo htmlspecialchars($row['carpet_area']) . ' sqft'; ?>
                      </li>
                      <?php endif; ?>

                      <?php if ($row['super_built_area'] > 0): ?>
                      <li><b>Super Built Area</b>:
                        <?php echo htmlspecialchars($row['super_built_area']) . ' sqft'; ?>
                      </li>
                      <?php endif; ?>

                      <?php if (!empty($row['furnishing_status'])): ?>
                      <li><b>Furnishing Status</b>:
                        <?php echo htmlspecialchars($row['furnishing_status']); ?>
                      </li>
                      <?php endif; ?>

                      <?php if ($row['monthly_rent'] > 0): ?>
                      <li><b>Monthly Rent</b>: Rs.
                        <?php echo number_format($row['monthly_rent']); ?>
                      </li>
                      <?php endif; ?>

                      <?php if ($row['price'] > 0): ?>
                      <li><b>Price</b>: Rs.
                        <?php echo number_format($row['price']); ?>
                      </li>
                      <?php endif; ?>

                      <?php if ($row['bachelors_allowed'] > 0): ?>
                      <li><b>Bachelors Allowed</b>:
                        <?php echo ($row['bachelors_allowed']); ?>
                      </li>
                      <?php endif; ?>

                      <?php if ($row['meal_included'] > 0): ?>
                      <li><b>Meal Included</b>:
                        <?php echo ($row['meal_included']); ?>
                      </li>
                      <?php endif; ?>

                      <?php if (!empty($row['ideal_for'])): ?>
                      <li><b>Ideal For</b>:
                        <?php echo htmlspecialchars($row['ideal_for']); ?>
                      </li>
                      <?php endif; ?>

                      <li><b>Bedrooms</b>:
                        <?php echo ($row['bedrooms'] > 0) ? htmlspecialchars($row['bedrooms']) : 'N/A'; ?> Bed
                      </li>

                      <li><b>Bathrooms</b>:
                        <?php echo ($row['bathrooms'] > 0) ? htmlspecialchars($row['bathrooms']) : 'N/A'; ?> Bath
                      </li>

                      <?php if ($row['balconies'] > 0): ?>
                      <li><b>Balconies</b>:
                        <?php echo htmlspecialchars($row['balconies']); ?>
                      </li>
                      <?php endif; ?>

                      <?php if ($row['parking'] > 0): ?>
                      <li><b>Parking</b>:
                        <?php echo htmlspecialchars($row['parking']); ?>
                      </li>
                      <?php endif; ?>

                      <?php if ($row['monthly_maintenance'] > 0): ?>
                      <li><b>Monthly Maintenance</b>: Rs.
                        <?php echo number_format($row['monthly_maintenance']); ?>
                      </li>
                      <?php endif; ?>

                      <?php if ($row['deposit_amount'] > 0): ?>
                      <li><b>Deposit Amount</b>: Rs.
                        <?php echo number_format($row['deposit_amount']); ?>
                      </li>
                      <?php endif; ?>

                      <?php if (!empty($row['property_name'])): ?>
                      <li><b>Property Name</b>:
                        <?php echo htmlspecialchars($row['property_name']); ?>
                      </li>
                      <?php endif; ?>

                      <?php if (!empty($row['key_features'])): ?>
                      <li><b>Key Features</b>:
                        <?php echo htmlspecialchars($row['key_features']); ?>
                      </li>
                      <?php endif; ?>

                      <li><b>Contact No:&nbsp;</b>
                      <i> Please LogIn To Contact</i>
                      </li>

                      <?php if (!empty($row['location'])): ?>
                      <li><b>Location</b>:
                        <?php echo htmlspecialchars($row['location']); ?>
                      </li>
                      <?php endif; ?>

                      <?php if (!empty($row['created_at'])): ?>
                      <li><b>Posted At</b>:
                        <?php echo htmlspecialchars($row['created_at']); ?>
                      </li>
                      <?php endif; ?>

                      <?php if (!empty($row['id'])): ?>
                      <li><b>Property Id</b>:
                        <?php echo htmlspecialchars($row['id']); ?>
                      </li>
                      <?php endif; ?>
                    </ul>

                    <a onclick="alert('Please Log In To Contact For Property')" class="btn btn-outline">
                      <span class="label-medium">Book Property Now </span>
                      <span class="material-symbols-rounded" aria-hidden="true">phone</span>
                    </a>

                  </details>
                </div>
              </div>
            </div>
            <?php
                }
            } else {
                echo "No properties found.";
            }

            $conn->close();
            ?>
          </div>


          <style>
            /* Modal styles */
            .modal {
              display: none;
              /* Hidden by default */
              position: fixed;
              /* Stay in place */
              z-index: 100;
              /* Sit on top */
              left: 0;
              top: 0;
              width: 100%;
              /* Full width */
              height: 100%;
              /* Full height */
              overflow: auto;
              /* Enable scroll if needed */
              background-color: rgba(0, 0, 0, 0.8);
              /* Black background with opacity */
              justify-content: center;
              align-items: center;
            }

            /* Modal content (image) */
            .modal-content {
              margin: auto;
              display: block;
              max-width: 600px;
              width: 600px;
              max-height: 80vh;
            }

            /* Close button */
            .close {
              position: absolute;
              top: 20px;
              right: 35px;
              color: white;
              font-size: 40px;
              font-weight: bold;
              cursor: pointer;
            }

            .close:hover,
            .close:focus {
              color: #ddd;
              text-decoration: none;
              cursor: pointer;
            }

            /* Slider container */
            .slider-container {
              position: relative;
              max-width: 90vw;
              max-height: 80vh;
            }

            /* Navigation buttons */
            .prev,
            .next {
              position: absolute;
              top: 50%;
              width: auto;
              padding: 16px;
              margin-top: -22px;
              color: white;
              font-weight: bold;
              font-size: 24px;
              transition: 0.6s ease;
              border-radius: 3px;
              user-select: none;
              cursor: pointer;
              z-index: 1;
              background-color: rgba(70, 70, 70, 0.44);
            }

            .prev {
              left: 0;
            }

            .next {
              right: 0;
            }

            .prev:hover,
            .next:hover {
              background-color: rgba(0, 0, 0, 0.8);
            }

            /* Gallery styles (optional) */
            .gallery img {
              width: 200px;
              /* Adjust as needed */
              margin: 10px;
              cursor: pointer;
            }


            @media only screen and (max-width: 600px) {
              .modal-content {
                width: 100%;
              }
            }
          </style>
          <script>
            let currentSlideIndex = 0;
            let slides = [];

            // Function to open the modal and show images
            function viewfullimage(photoArray) {
              // Initialize the array of images
              slides = photoArray;

              // Set the initial slide index
              currentSlideIndex = 0;

              // Get the modal and the image element
              const modal = document.getElementById("imageModal");
              const modalImg = document.getElementById("modalImage");

              // Set the source of the modal image to the first image
              modalImg.src = slides[currentSlideIndex] ? 'add_post/' + slides[currentSlideIndex] : 'add_post/uploads/_default_home_pic.avif';


              // Show the modal
              modal.style.display = "flex";
            }

            // Function to close the modal
            function closeImage() {
              const modal = document.getElementById("imageModal");
              modal.style.display = "none";
            }

            // Function to change slides
            function changeSlide(n) {
              const modalImg = document.getElementById("modalImage");

              // Change the slide index
              currentSlideIndex += n;

              // Wrap around if needed
              if (currentSlideIndex >= slides.length) currentSlideIndex = 0;
              if (currentSlideIndex < 0) currentSlideIndex = slides.length - 1;

              // Update the source of the modal image
              modalImg.src = slides[currentSlideIndex] ? 'add_post/' + slides[currentSlideIndex] : 'add_post/uploads/_default_home_pic.avif';

            }
          </script>






          <script src="./assets/js/script.js" defer></script>
        </div>
      </section>

      <!-- FEATURES -->
      <section class="section feature" aria-labelledby="feature-label">
        <div class="container">
          <figure class="feature-banner">
            <img src="./assets/images/feature-banner-1.jpg" width="1020" height="690" loading="lazy"
              alt="feature banner" class="img-cover" />
          </figure>

          <div class="feature-content">
            <h2 class="headline-medium" id="feature-label">
              We Specialize in Quality Rental & Sale Properties
            </h2>
            <p class="body-large feature-text">
              Looking for a property that reflects your style and offers the perfect balance of comfort and luxury?
              Whether you're looking to rent or buy, our expertly renovated properties are designed to meet your needs.
              From modern smart home features to an exceptional lifestyle, we offer spaces you'll love to call home.
            </p>
            <ul class="feature-list">
              <li class="feature-item">
                <span class="material-symbols-rounded feature-icon" aria-hidden="true">check_circle</span>
                <span class="body-medium">Smart Home Features</span>
              </li>

              <li class="feature-item">
                <span class="material-symbols-rounded feature-icon" aria-hidden="true">check_circle</span>
                <span class="body-medium">Beautiful Surroundings</span>
              </li>

              <li class="feature-item">
                <span class="material-symbols-rounded feature-icon" aria-hidden="true">check_circle</span>
                <span class="body-medium">Exceptional Lifestyle Amenities</span>
              </li>

              <li class="feature-item">
                <span class="material-symbols-rounded feature-icon" aria-hidden="true">check_circle</span>
                <span class="body-medium">Complete 24/7 Security</span>
              </li>
            </ul>
          </div>
        </div>
      </section>

      <!-- VIDEO -->

      <section class="section video">
        <div class="container">
          <div class="video-card">
            <!-- Play button -->
            <button class="play-btn" aria-label="play video" onclick="openModal();">
              <span class="material-symbols-rounded" aria-hidden="true">play_arrow</span>
            </button>
          </div>
        </div>
      </section>

      <!-- Full-Screen Modal for Video -->
      <div id="videoModal" class="modal">
        <div class="modal-content-vid">
          <!-- Close button -->
          <span class="close-btn" onclick="closeModal();">&times;</span>
          <!-- Video player -->
          <video id="videoPlayer" controls muted>
            <source src="Register/video.mp4" type="video/mp4">
            Your browser does not support the video tag.
          </video>
        </div>
      </div>

      <!-- CSS Styles for the Modal -->
      <style>
        /* Modal styling */
        .modal {
          display: none;
          /* Hidden by default */
          position: fixed;
          z-index: 1000;
          /* Ensure it appears above all other content */
          left: 0;
          top: 0;
          width: 100%;
          height: 100%;
          background-color: rgba(0, 0, 0, 0.8);
          /* Semi-transparent background */
        }

        /* Modal content (video container) */
        .modal-content-vid {
          position: relative;
          margin: auto;
          top: 50%;
          transform: translateY(-50%);
          width: 70%;
          max-width: 60vw;
          background-color: transparent;
        }

        /* Video player styling */
        #videoPlayer {
          width: 100%;
          border-radius: 8px;
        }

        /* Close button styling */
        .close-btn {
          position: absolute;
          top: 10px;
          right: 10px;
          font-size: 24px;
          color: white;
          cursor: pointer;
          z-index: 1111111;
        }
      </style>

      <!-- JavaScript to Control Modal -->
      <script>
        function openModal() {
          // Show the modal
          document.getElementById('videoModal').style.display = 'block';
          document.querySelector('body').style.overflow = 'hidden';
          // Play the video
          document.getElementById('videoPlayer').play();
        }

        function closeModal() {
          // Hide the modal
          document.getElementById('videoModal').style.display = 'none';
          // Pause the video
          document.querySelector('body').style.overflow = 'unset';

          document.getElementById('videoPlayer').pause();
        }
      </script>




      <!-- Pricing -->


      <style>
        .containerx {
          display: flex;
          flex-wrap: wrap;
          max-width: 1200px;
          width: 100%;
          margin: 30px auto;
        }

        .table-containerx,
        .image-containerx {
          flex: 1;
          padding: 20px;
        }

        .table-containerx {
          background-color: transparent;
          border-radius: 100px;

        }

        tr:last-child td {
          border-bottom: none;
        }

        tr:first-child th:first-child {
          border-top-left-radius: 12px;
        }

        tr:first-child th:last-child {
          border-top-right-radius: 12px;
        }

        tr:last-child td:first-child {
          border-bottom-left-radius: 12px;
        }

        tr:last-child td:last-child {
          border-bottom-right-radius: 12px;
        }

        table {
          width: 100%;
          border-collapse: separate;
          margin: 0;
          background-color: transparent;
          box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        th,
        td {
          padding: 2px;
          text-align: left;
          border-bottom: 1px solid #ddd;
          text-align: center;
        }

        th {
          background-color: #007bff;
          color: white;
        }

        td {
          color: grey;
          font-size: 14px;

        }

        td button {
          color: #007bff;
          font-weight: 700;
          padding: 2px 6px;
          border-radius: 10px;
          font-size: 12px;
          text-align: center;
          width: 100%;
        }

        tr:nth-child(even) {
          background-color: #ececec;
        }

        .image-containerx {
          display: flex;
          justify-content: center;
          align-items: center;
        }

        .table-containerx img {
          max-width: 100%;
          width: auto;

          height: auto;
          border-radius: 8px;
        }

        @media (max-width: 768px) {
          .containerx {
            flex-direction: column;
          }
        }
      </style>

      <section class="containerx" id="pricing">
        <div class="table-containerx">
          <h2 class="section-title headline-medium" style="margin-bottom: 20px;">
            Our Pricing
          </h2>
          <img src="assets/images/pricing.webp" alt="Description of Image">
        </div>
        <div class="image-containerx">
          <table>
            <thead>
              <tr>
                <th>S No.</th>
                <th>No, Of Ads</th>
                <th>Amount</th>
                <th>Subscribe</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><b>1</b></td>
                <td>1</td>
                <td>₹ 13 /-</td>
                <td><button onclick="alert('Please Log In To Get Your Plan')">Get This Plan</button></td>
              </tr>
              <tr>
                <td><b>2</b></td>
                <td>2</td>
                <td>₹ 25 /-</td>
                <td><button onclick="alert('Please Log In To Get Your Plan')">Get This Plan</button></td>
              </tr>
              <tr>
                <td><b>3</b></td>
                <td>3</td>
                <td>₹ 36 /-</td>
                <td><button onclick="alert('Please Log In To Get Your Plan')">Get This Plan</button></td>
              </tr>
              <tr>
                <td><b>4</b></td>
                <td>5</td>
                <td>₹ 55 /-</td>
                <td><button onclick="alert('Please Log In To Get Your Plan')">Get This Plan</button></td>
              </tr>
              <tr>
                <td><b>5</b></td>
                <td>8</td>
                <td>₹ 80 /-</td>
                <td><button onclick="alert('Please Log In To Get Your Plan')">Get This Plan</button></td>
              </tr>
              <tr>
                <td><b>6</b></td>
                <td>10</td>
                <td>₹ 90 /-</td>
                <td><button onclick="alert('Please Log In To Get Your Plan')">Get This Plan</button></td>
              </tr>
              <tr>
                <td><b>7</b></td>
                <td>12</td>
                <td>₹ 96 /-</td>
                <td><button onclick="alert('Please Log In To Get Your Plan')">Get This Plan</button></td>
              </tr>
              <tr>
                <td><b>8</b></td>
                <td>15</td>
                <td>₹ 105 /-</td>
                <td><button onclick="alert('Please Log In To Get Your Plan')">Get This Plan</button></td>
              </tr>
              <tr>
                <td><b>9</b></td>
                <td>20</td>
                <td>₹ 120 /-</td>
                <td><button onclick="alert('Please Log In To Get Your Plan')">Get This Plan</button></td>
              </tr>
              <tr>
                <td><b>10</b></td>
                <td>25</td>
                <td>₹ 125 /-</td>
                <td><button onclick="alert('Please Log In To Get Your Plan')">Get This Plan</button></td>
              </tr>

            </tbody>
          </table>

        </div>
      </section>



      <!-- Pricing -->






      <!-- STORY -->

      <section class="section story">
        <div class="container">
          <div class="title-wrapper">
            <p class="section-subtitle title-medium">Our Customers</p>

            <h2 class="section-title headline-medium">
              We Help 1000+ Family Find Their True Home
            </h2>

            <ul class="avatar-list">
              <li class="avatar">
                <img src="./assets/images/avatar-1.jpg" width="120" height="80" loading="lazy" alt="John smith"
                  class="img-cover" />
              </li>

              <li class="avatar">
                <img src="./assets/images/avatar-2.jpg" width="120" height="80" loading="lazy" alt="John smith"
                  class="img-cover" />
              </li>

              <li class="avatar">
                <img src="./assets/images/avatar-3.jpg" width="120" height="80" loading="lazy" alt="John smith"
                  class="img-cover" />
              </li>

              <li class="avatar">
                <img src="./assets/images/avatar-4.jpg" width="120" height="80" loading="lazy" alt="John smith"
                  class="img-cover" />

                <div class="overlay-content">
                  <span class="label-medium">99+</span>
                </div>
              </li>
            </ul>

            <a href="about/" class="btn btn-outline">
              <span class="label-medium">View All Stories</span>
              <span class="material-symbols-rounded" aria-hidden="true">arrow_outward</span>
            </a>
          </div>
          <ul class="story-list">
            <li class="story-card" style="background-image: url('./assets/images/story-1.jpg')">
              <a href="#" class="overlay-content">
                <div>
                  <h3 class="title-small">Chris Traeger</h3>
                  <div class="rating-wrapper">
                    <span class="material-symbols-rounded" aria-hidden="true">star</span>
                    <span class="material-symbols-rounded" aria-hidden="true">star</span>
                    <span class="material-symbols-rounded" aria-hidden="true">star</span>
                    <span class="material-symbols-rounded" aria-hidden="true">star</span>
                    <span class="material-symbols-rounded" aria-hidden="true">star</span>
                    <data class="title-small rating-text" value="5">5.0</data>
                  </div>
                </div>

                <figure class="card-avatar">
                  <img src="./assets/images/story-1.jpg" alt="Chris" class="img-cover" />
                </figure>
              </a>
            </li>

            <li class="story-card" style="background-image: url('./assets/images/story-2.jpg')">
              <a href="#" class="overlay-content">
                <div>
                  <h3 class="title-small">Duke Silver</h3>
                  <div class="rating-wrapper">
                    <span class="material-symbols-rounded" aria-hidden="true">star</span>
                    <span class="material-symbols-rounded" aria-hidden="true">star</span>
                    <span class="material-symbols-rounded" aria-hidden="true">star</span>
                    <span class="material-symbols-rounded" aria-hidden="true">star</span>
                    <span class="material-symbols-rounded" aria-hidden="true">star</span>
                    <data class="title-small rating-text" value="5">5.0</data>
                  </div>
                </div>

                <figure class="card-avatar">
                  <img src="./assets/images/story-2.jpg" alt="Chris" class="img-cover" />
                </figure>
              </a>
            </li>

            <li class="story-card" style="background-image: url('./assets/images/story-3.jpg')">
              <a href="#" class="overlay-content">
                <div>
                  <h3 class="title-small">Duke Silver</h3>
                  <div class="rating-wrapper">
                    <span class="material-symbols-rounded" aria-hidden="true">star</span>
                    <span class="material-symbols-rounded" aria-hidden="true">star</span>
                    <span class="material-symbols-rounded" aria-hidden="true">star</span>
                    <span class="material-symbols-rounded" aria-hidden="true">star</span>
                    <span class="material-symbols-rounded" aria-hidden="true">star</span>
                    <data class="title-small rating-text" value="5">5.0</data>
                  </div>
                </div>

                <figure class="card-avatar">
                  <img src="./assets/images/story-3.jpg" alt="Chris" class="img-cover" />
                </figure>
              </a>
            </li>

            <li class="story-card" style="background-image: url('./assets/images/story-4.jpg')">
              <a href="#" class="overlay-content">
                <div>
                  <h3 class="title-small">Tsukasa Aoi</h3>
                  <div class="rating-wrapper">
                    <span class="material-symbols-rounded" aria-hidden="true">star</span>
                    <span class="material-symbols-rounded" aria-hidden="true">star</span>
                    <span class="material-symbols-rounded" aria-hidden="true">star</span>
                    <span class="material-symbols-rounded" aria-hidden="true">star</span>
                    <span class="material-symbols-rounded" aria-hidden="true">star</span>
                    <data class="title-small rating-text" value="5">5.0</data>
                  </div>
                </div>

                <figure class="card-avatar">
                  <img src="./assets/images/story-4.jpg" alt="Chris" class="img-cover" />
                </figure>
              </a>
            </li>

            <li class="story-card" style="background-image: url('./assets/images/story-5.jpg')">
              <a href="#" class="overlay-content">
                <div>
                  <h3 class="title-small">Freida Varnes</h3>
                  <div class="rating-wrapper">
                    <span class="material-symbols-rounded" aria-hidden="true">star</span>
                    <span class="material-symbols-rounded" aria-hidden="true">star</span>
                    <span class="material-symbols-rounded" aria-hidden="true">star</span>
                    <span class="material-symbols-rounded" aria-hidden="true">star</span>
                    <span class="material-symbols-rounded" aria-hidden="true">star</span>
                    <data class="title-small rating-text" value="5">5.0</data>
                  </div>
                </div>

                <figure class="card-avatar">
                  <img src="./assets/images/story-5.jpg" alt="Chris" class="img-cover" />
                </figure>
              </a>
            </li>
            <li class="story-card" style="background-image: url('./assets/images/story-6.jpg')">
              <a href="#" class="overlay-content">
                <div>
                  <h3 class="title-small"></h3>
                  <div class="rating-wrapper">
                    <span class="material-symbols-rounded" aria-hidden="true">star</span>
                    <span class="material-symbols-rounded" aria-hidden="true">star</span>
                    <span class="material-symbols-rounded" aria-hidden="true">star</span>
                    <span class="material-symbols-rounded" aria-hidden="true">star</span>
                    <span class="material-symbols-rounded" aria-hidden="true">star</span>
                    <data class="title-small rating-text" value="5">5.0</data>
                  </div>
                </div>

                <figure class="card-avatar">
                  <img src="./assets/images/story-6.jpg" alt="Chris" class="img-cover" />
                </figure>
              </a>
            </li>
          </ul>
        </div>
      </section>
    </article>
  </main>


  <!-- WhatsApp Button -->
  <!-- <a href="https://wa.me/918100152848?text=Hello!%20I'm%20interested%20in%20your%20property." class="whatsapp-button"
    target="_blank" aria-label="Chat on WhatsApp">
    <img src="WhatsApp_icon.png.webp" alt="WhatsApp" class="whatsapp-icon">
  </a>

  <style>
    .whatsapp-button {
      position: fixed;
      bottom: 20px;

      right: 20px;
      /* Adjusts distance from the right */
      z-index: 1000;
      /* Ensures it appears above other content */
      background-color: #25D366;
      /* WhatsApp green */
      padding: 10px;
      border-radius: 50%;
      display: flex;
      justify-content: center;
      align-items: center;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      /* Adds a slight shadow */
    }

    .whatsapp-icon {
      width: 30px;
      /* Adjusts icon size */
      height: 30px;
    }

    .whatsapp-button:hover {
      background-color: #20b858;
      /* Darker green on hover */
    }

    @media (max-width: 767px) {
      .whatsapp-button {
        bottom: 80px;
  }
}
  </style> -->


  <style>
    /* General styles for the footer navbar */
    .footer-navbar {
      position: fixed;
      bottom: 0;
      left: 0;
      width: 100%;
      background-color: #0d3166;
      box-shadow: 0 -2px 4px rgba(0, 0, 0, 0.1);
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 8px 50px;
      z-index: 1000;
      border-radius: 20px 20px 0 0;
      display: none;
      /* Hide by default */

    }

    /* Show only on mobile devices */
    @media (max-width: 767px) {
      .footer-navbar {
        display: flex;
        /* Show footer on mobile devices */
      }
    }

    .nav-link {
      text-align: center;
      color: #fff;
      text-decoration: none;
      font-size: 12px;
      display: flex;
      flex-direction: column;
      align-items: center;
    }

    /* General link icon styles */
    .nav-link .material-icons {
      font-size: 20px;
      margin-bottom: 4px;
    }

    /* Add Post specific styles */
    .add-post {
      position: absolute;
      bottom: 90%;
      left: 50%;
      transform: translate(-50%, 50%);
      width: 60px;
      height: 60px;
      background-color: #0d3166;
      color: #fff;
      border-radius: 100px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 12px;
      text-align: center;
      line-height: 60px;
      /* Center text vertically */
      font-weight: bold;
      border: 1px solid white;
    }

    .underlinespan {
      position: absolute;
      bottom: -48%;
      left: 50%;
      transform: translate(-50%, 50%);
      width: 80px;
      height: 8px;
      background-color: #fff;

      border-radius: 10px;

      display: flex;

    }

    .underlinespan2 {
      position: absolute;
      bottom: 23%;
      left: 50%;
      transform: translate(-50%, 50%);
      width: 80px;
      height: 10px;

      border-radius: 10px;

      display: flex;

    }

    .add-post .material-symbols-rounded {
      font-size: 30px;
      margin: 0;
      /* Remove margin for centered icon */
    }

    /* Styling for individual links */
    .footer-navbar a {
      color: #fff;
    }

    .footer-navbar .nav-link:hover {
      color: #007bff;
    }
  </style>




  <!-- Footer Navbar -->
  <!-- Footer Navbar -->
  <footer class="footer-navbar">
    <a href="/" class="nav-link">
      <span class="material-symbols-rounded">home</span>
      Home
    </a>
    <a href="add_post/" class="nav-link add-post">
      <span class="material-symbols-rounded">add</span>
      <span class="underlinespan"></span>
      <span class="underlinespan2">Add Property</span>

    </a>
    <a href="login/" class="nav-link">
      <span class="material-symbols-rounded">login</span>
      Login
    </a>
  </footer>






  <!-- FOOTER -->

  <footer class="footer">
    <div class="footer-top">
      <div class="container">
        <div class="footer-brand">
          <a href="/" class="logo">
            <!-- <img src="./logo.png" width="50" height="28" alt="Debhal" /> -->
            <div>
              <h3 class="logo-text">DEBHAL</h3>
              <p class="logo-p">THE HOMECOMING</p>
            </div>
          </a>
          <p class="body-medium footer-text">
            <!-- sub-content if you want  -->
          </p>
        </div>

        <nav class="footer-nav" aria-labelledby="nav-label-1">
          <p class="title-small footer-list-title" id="nav-laber-1">
            Quick link
          </p>
          <ul class="footer-list">
            <li>
              <a href="/" class="body-medium footer-link">Home</a>
            </li>

            <li>
              <a href="Register/" class="body-medium footer-link">Sign Up</a>
            </li>
            <li>
              <a href="login/" class="body-medium footer-link">Log In</a>
            </li>

            <li>
              <a href="add_post/" class="body-medium footer-link">Add Post</a>
            </li>
            <li>
              <a href="contact/" class="body-medium footer-link">Contact Us</a>
            </li>

          </ul>
        </nav>

        <nav class="footer-nav" aria-labelledby="nav-label-2">
          <p class="title-small footer-list-title" id="nav-laber-2">
            Support
          </p>
          <ul class="footer-list">
            <li>
              <a href="mailto:www.debhal@gmail.com" class="body-medium footer-link">Email - www.debhal@gmail.com</a>
            </li>
            <li>
              <a href="tel:918100152848" class="body-medium footer-link">Mobile Number - +91 81001-52848</a>
            </li>
            <li>
              <a href="return-policy/" class="body-medium footer-link">Return Policy</a>
            </li>
            <li>
              <a href="disclosure/" class="body-medium footer-link">Disclaimer</a>
            </li>

            <li>
              <a href="privacy/" class="body-medium footer-link">Privacy Policy</a>
            </li>

            <li>
              <a href="t&c/" class="body-medium footer-link">Terms & Conditions</a>
            </li>
          </ul>
        </nav>

        <nav class="footer-nav" aria-labelledby="nav-label-3">
          <p class="title-small footer-list-title" id="nav-laber-3">
            Get in touch
          </p>
          <ul class="footer-list">
            <li>
              <a href="mailto:www.debhal@gmail.com" class="body-medium footer-link">www.debhal@gmail.com</a>
            </li>

            <li>
              <address href="#" class="address body-medium">
                South Baksara Chandmari Road.
                Howrah
                West Bengal
                711110
              </address>
            </li>

            <li>
              <ul class="social-list">
                <li>
                  <a href="https://www.facebook.com/profile.php?id=61566534188109&mibextid=ZbWKwL" class="social-link">
                    <img src="assets/images/facebook.svg" alt="Facebook" />
                  </a>
                </li>



                <li>
                  <a href="https://www.instagram.com/debhal.in/profilecard/?igsh=cm5kOGdxNzUxOGRx" class="social-link">
                    <img src="assets/images/insta.svg" alt="instagram" />
                  </a>
                </li>
              </ul>
            </li>

          </ul>
        </nav>
      </div>
    </div>

    <div class="footer-bottom">
      <div class="container">
        <p class="copyright body-medium">Copyright 2024 Debhal.com - Debhal Technologies</p>
      </div>
    </div>
  </footer>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
</body>

</html>


<?php
// Database configuration
require 'db_connect.php';

// First SQL query: Update properties
$sql1 = "UPDATE properties 
         SET property_display_filter = 'expired' 
         WHERE created_at < NOW() - INTERVAL 30 DAY";
if (mysqli_query($conn, $sql1)) {
     echo "<script>console.log('Post Visiblity Updated.')</script>";
} else {
  echo "<script>console.log('error')</script>";
}

// Second SQL query: Set available_limits to '0'
$sql2 = "UPDATE users 
         SET available_limits = '0' 
         WHERE limit_update_time < NOW() - INTERVAL 30 DAY";
if (mysqli_query($conn, $sql2)) {
  echo "<script>console.log('Credit Limit updated as per - 30 days.')</script>";
} else {
  echo "<script>console.log('error')</script>";
}

// Third SQL query: Set available_limits to '1'
$sql3 = "UPDATE users 
         SET available_limits = '1' ,
         limit_update_time = CURRENT_TIMESTAMP() 
         WHERE available_limits = '0' 
         AND limit_update_time < NOW() - INTERVAL 90 DAY";
if (mysqli_query($conn, $sql3)) {
  echo "<script>console.log('1 free credit added to user after 60 days')</script>";
} else {
  echo "<script>console.log('error')</script>";
}

// Close the database connection
mysqli_close($conn);
?>