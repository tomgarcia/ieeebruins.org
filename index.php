<!DOCTYPE HTML>
<html>
<head>
    <title>IEEE at UCLA</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    
    <!-- jQuery -->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
    
    <!-- BOOTSTRAP -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    
    <!-- FONT AWESOME -->
    <script src="https://use.fontawesome.com/348865e609.js"></script>
    
    <!-- STYLESHEETS -->
    <link rel='stylesheet' href='../css/index.css' />
    <link rel='stylesheet' href='../css/footer.css' />
    <link rel='stylesheet' href='../css/navbar.css' />
</head>
<body>
    <!-- NAVBAR -->
    <?php include('./includes/navbar.html'); ?>
    
    <!-- HOME BILLBOARD -->
    <div class='home-billboard'>
        <p>IEEE at UCLA</p>
        <p>Hands on Engineering</p>
    </div>
    
    <!-- INTRO AND MAILING LIST -->
    <div class='intro container-fluid'>
        <div class='row'>
            <div class='description col-md-6'>
                <h1>Who are we?</h1>
                <p>Insert short description of our club here</p>
            </div>
            <div class='mailing-list col-md-6'>
                <h1>Mailing List</h1>
                <h4>Subscribe to receive weekly newsletters containing info on all our projects, socials, and workshops!</h4>
                <form>
                    <label style='display: block;' class='form-label'>Email Address:</label>
                    <input type='email' class='email-address'/>
                    <button type='submit' class='subscribe'>SUBSCRIBE</button>
                </form>
            </div>
        </div>
    </div>
    
    <!-- PROJECT QUICK LOOK -->
    <div class='projects container-fluid'>
        <div class='row'>
            <div class='project col-md-3 col-sm-6'>
                <p>Open Project Space</p>
            </div>
            <div class='project col-md-3 col-sm-6'>
                <p>Advanced Projects</p>
            </div>
            <div class='project col-md-3 col-sm-6'>
                <p>MircoMouse</p>
            </div>
            <div class='project col-md-3 col-sm-6'>
                <p>C3</p>
            </div>
        </div>
    </div>
    
    <!-- CONTACT INFO -->
    <div class='container-fluid contact-info'>
        <h1>Contact Us</h1>
        <p>Closing information about club and contact information</p>
    </div>
    
    <!-- PHOTO QUICK LOOK -->
    <div>
        <p>Row of photos</p>
    </div>
    
    <!-- FOOTER -->
    <?php include('./includes/footer.html'); ?>
</body>
</html>