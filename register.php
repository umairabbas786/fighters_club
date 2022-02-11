<?php include "includes/header.php"?>
<?php include "includes/nav.php"?>

    <div class="container text-center mt-5">
    <div class="form-body">
        <div class="row">
            <div class="form-holder">
                <div class="form-content">
                    <div class="form-items">
                        <h3>Create Account</h3>
                        <p>Fill in the data below.</p>
                        <form class="requires-validation" novalidate>

                        <div class="col-md-12 mt-3">
                            <label class="mb-3 mr-1" for="gender">Register As: </label>

                            <input type="radio" class="btn-check" name="type" id="male" autocomplete="off" required>
                            <label class="btn btn-sm btn-outline-secondary" for="male">Fan</label>

                            <input type="radio" class="btn-check" name="type" id="female" autocomplete="off" required>
                            <label class="btn btn-sm btn-outline-secondary" for="female">Fighter</label>

                            <div class="valid-feedback mv-up">You selected a Type!</div>
                            <div class="invalid-feedback mv-up">Please select a Register Type!</div>
                        </div>

                            <div class="col-md-12">
                               <input class="form-control" type="text" name="name" placeholder="Full Name" required>
                               <div class="valid-feedback">Name field is valid!</div>
                               <div class="invalid-feedback">Name field cannot be blank!</div>
                            </div>

                            <div class="col-md-12">
                                <input class="form-control" type="email" name="email" placeholder="E-mail Address" required>
                                 <div class="valid-feedback">Email field is valid!</div>
                                 <div class="invalid-feedback">Email field cannot be blank!</div>
                            </div>

                           <div class="col-md-12">
                              <input class="form-control" type="password" name="password" placeholder="Password" required>
                               <div class="valid-feedback">Password field is valid!</div>
                               <div class="invalid-feedback">Password field cannot be blank!</div>
                           </div>

                            <div class="form-check mt-3">
                                <input class="form-check-input mr-2" type="checkbox" value="" id="invalidCheck" required>
                            <label class="form-check-label">I confirm that all data are correct</label>
                            <div class="invalid-feedback">Please confirm that the entered data are all correct!</div>
                            </div>
                  
                            <div class="form-button my-3">
                                <button id="submit" type="submit" class="btn btn-danger btn-block">Register</button>
                            </div>
                            <h3 class="text-center">If you are a Venue, Dojo or Promoter <br>please follow the buttons below to<br> apply for permission to organize.</h3>
                            <div class="form-button my-3">
                                <button id="submit" type="submit" class="btn btn-danger btn-block">Venue</button>
                            </div>
                            <div class="form-button my-3">
                                <button id="submit" type="submit" class="btn btn-danger btn-block">Promoter</button>
                            </div>
                            <div class="form-button my-3">
                                <button id="submit" type="submit" class="btn btn-danger btn-block">Dojo</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
</div>

    </div>

<?php include "includes/script.php"?>