
<?php include 'includes/session.php'; ?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Clothing Website</title>
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Acme&family=Dancing+Script&family=Playfair+Display&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

  <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">

  <link rel="stylesheet" href="assets/css/templatemo-hexashop.css">

  <link rel="stylesheet" href="assets/css/owl-carousel.css">

  <link rel="stylesheet" href="assets/css/lightbox.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <title>CodePen - Pure CSS | Jake&#39;s Instagram</title>
  <link rel="stylesheet" href="bootstrap-5.3.1-dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
    integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <!-- Custom styles for this template -->
  <link href="assets/css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="assets/css/responsive.css" rel="stylesheet" />
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="./checkoutstyle.css">
  <script src="./country-states.js"></script>
    <style>
     .header-area{
       position:relative;
     }
  </style>
</head>

<body>
<?php include 'includes/header.php'; ?>
<!-- partial:index.partial.html -->
<div class="mainscreen">
    <!-- <img src="https://image.freepik.com/free-vector/purple-background-with-neon-frame_52683-34124.jpg"  class="bgimg " alt="">--> 
      <div class="card">
        
        <div class="rightside">
          <form  action="checkoutScript.php" method="POST">
            <h1 style="font-weight: 400;">Cash on Delivery</h1>
            <h2 style="font-weight: 400;">Delivery Address Information</h2>
            <p>Full Name</p>
            <input type="text"  class="inputbox" id="fname" name="fname" placeholder="John M. Doe">
            <p>Contact No</p>
            <input type="number" class="inputbox" id="email" name="mobile" placeholder="john@example.com">
            <p>Postal Code</p>
            <input type="number"  class="inputbox" id="email" name="postal" placeholder="john@example.com">
            <div class="container p-3 expcvv">
                        <div class="mb-3 expcvv_child" >
                          <label for="country" class="form-label">Country</label>
                          <select id="country" name="country" class="form-select">
                             <option>select country</option>
                          </select>
                        </div>

                        <div class="mb-3 expcvv_child" style="justify-content: space-around;">
                          <label for="state" class="form-label">State</label>
                          <select id="state" name="state" class="form-select">
                             <option>_</option>
                          </select>
                        </div>
            </div>
           
            <p class="expcvv_text">Delivery Address</p>
            <input type="text"  class="inputbox" id="adr" name="address" placeholder="542 W. 15th Street">

            <p>Delivery City</p>
            <input type="text"  class="inputbox" id="city" name="city" placeholder="New York">
            <p></p>
            <button type="submit" class="button">CheckOut</button>
          </form>
        </div>
      </div>
    </div>
<!-- partial -->
<?php include 'includes/footer.php'; ?>

</body>
</html>
<script>
// user country code for selected option
var user_country_code = "PK";

(() => {
    // script https://www.html-code-generator.com/html/drop-down/state-name

    // Get the country name and state name from the imported script.
    const country_array = country_and_states.country;
    const states_array = country_and_states.states;

    const id_state_option = document.getElementById("state");
    const id_country_option = document.getElementById("country");

    const createCountryNamesDropdown = () => {
        let option =  '';
        option += '<option value="">select country</option>';

        for(let country_code in country_array){
            // set selected option user country
            let selected = (country_code == user_country_code) ? ' selected' : '';
            option += '<option value="'+country_code+'"'+selected+'>'+country_array[country_code]+'</option>';
        }
        id_country_option.innerHTML = option;
    };

    const createStatesNamesDropdown = () => {
        let selected_country_code = id_country_option.value;
        // get state names
        let state_names = states_array[selected_country_code];

        // if invalid country code
        if(!state_names){
            id_state_option.innerHTML = '<option>select state</option>';
            return;
        }
        let option = '';
        option += '<select id="state">';
        option += '<option>select state</option>';
        for (let i = 0; i < state_names.length; i++) {
            option += '<option value="'+state_names[i].code+'">'+state_names[i].name+'</option>';
        }
        option += '</select>';
        id_state_option.innerHTML = option;
    };

    // country select change event
    id_country_option.addEventListener('change', createStatesNamesDropdown);

    createCountryNamesDropdown();
    createStatesNamesDropdown();
})();

</script>