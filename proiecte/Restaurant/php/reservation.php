<!DOCTYPE html>
<html lang="en">
<head>
    <title>Restaurant</title>
    <link rel="icon" href="../img/logo.jpg">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet" type="text/css" href="../css/navbar.css">
    <link rel="stylesheet" type="text/css" href="../css/responsive.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/6153d57823.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Dancing+Script&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Q'usine Official Website"/>
    <script src="../js/main.js"></script>
</head>
<body>
    
<div class="navbar">
        <p>Q'usine</p>
        <div class="nav" id="mynav">
        
            <a href="../index" class="active">Home</a>
            <a href="#about">About</a>
            <a href="menu">Menu</a>
            <a href="gallery">Gallery</a>
            <a href="reservation">Reservations</a>
            <a href="#location">Location</a>
            <a href="javascript:void(0);" class="icon" onclick="myFunction()">
            <i class="fa fa-bars"></i>
</a>
        
    </div>
    </div>
<div class="reservation">
    <div class="container">
<form method="POST" action="reservation.php">
                        <div class="form-group">
                            <label>Nume</label>
                            <input type="text" name="Nume" class="form-control">
                        </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" name="Email" class="form-control">
                            </div>
                                <div class="form-group">
                                    <label>Check-in</label>
                                    <input type="date" name="Check-in" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Hour</label>
                                    <input type="time" name="Time" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Numar Persoane</label>
                                    <input type="number" name="Persoane" class="form-control">
                                </div>
                                    <div class="form-group">
                                        <label>Detalii</label>
                                        <textarea name="Mesaj"></textarea>
                                    </div>
                                    <div class="form-group">
                                    <label>Telefon</label>
                                    <input type="number" name="Phone" class="form-control">
                                </div>
                                        <button type="submit" name="Trimite" class="submit-button">Trimite</button>
                    </form>
                    <?php
    
                    
    $name = $_POST['Nume'];
    $email = $_POST['Email'];
    $checkin = $_POST['Check-in'];
    $time = $_POST['Time'];
    $number = $_POST['Persoane'];
    $phone = $_POST['Phone'];
    $message = $_POST['Mesaj'].'
    Nume: 
    '
    .$name.'
    Email: 
     '
     .$email.'
    Check-In: 
      '
      .$checkin.'
    Time: 
       '
    .$time.'
    Numar persoane: 
        '
    .$number.'
    Telefon:
      '
    .$phone;

    if(isset($_POST ['Trimite'])) {
        if($name !='' && $email !='' && $checkin !='' && $time!='' && $number !='' && $phone !='' ) {
            if(strlen($name) > 4 && strlen($phone) > 9 && strlen($number) < 2){ 
                mail('bogdan.rusu98@gmail.com', 'Rezervare', $message);

                echo 'Rezervarea a fost trimisa. Vei primi pe email confirmarea daca toate datele sunt corecte.';
            }  
            else{
                echo 'Prea putine caractere';
            } 
        }

        else{
            echo 'Trebuie sa completezi toate campurile!';
        }
}


?>
</div></div>
    <div class="contact">
            <div class="container">
                <hr>
                <h1>Contact</h1>
                <hr>
                <p>Strada Dimitrie Cantemir 14, Câmpulung Moldovenesc 725100</p>
                <div class="clearfix"></div>
                    
                
                <form method="POST" action="reservation.php">
                        <div class="form-group">
                            <label>Nume</label>
                            <input type="text" name="Nume" class="form-control">
                        </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" name="Email" class="form-control">
                            </div>
                                <div class="form-group">
                                    <label>Subject</label>
                                    <input type="text" name="Subiect" class="form-control">
                                </div>
                                    <div class="form-group">
                                        <label>Descriere</label>
                                        <textarea name="Mesaj"></textarea>
                                    </div>
                                        <button type="submit" name="Trimite" class="submit-button">Trimite</button>
                    </form>
                
                    <?php
            
                            
            $name = $_POST['Nume'];
            $email = $_POST['Email'];
            $subject = $_POST['Subiect'];
            $message = $_POST['Mesaj'].'
            Nume:
            '.$name.'
            Email: 
            '.$email;

            if(isset($_POST ['Trimite'])) {
                if($name !='' && $email !='' && $subject !='' && $message !='') {
                    if(strlen($name) > 4){ 
                        mail('bogdan.rusu98@gmail.com', $subject, $message);

                        echo 'Mesaj trimis. Multumesc.';
                    }  
                    else{
                        echo 'Numele este prea scurt';
                    } 
                }

                else{
                    echo 'Trebuie sa completezi toate campurile!';
                }
        }


?>
            </div>
        </div>

    <div id="location">
        <div class="mapouter">
            <div class="gmap_canvas">
                <iframe height="400" id="gmap_canvas" src="https://maps.google.com/maps?q=Dimitrie%20Cantemir%2014&t=&z=13&ie=UTF8&iwloc=&output=embed">
                </iframe>
                <a href="https://www.crocothemes.net"></a>
            </div>

    </div>
    </div>

    <div class="footer" id="footer">
        <div class="container">
        <a href="https://www.twitter.com" target="_blank"><i class="fab fa-twitter"></i></a>
        <a href="https://www.facebook.com" target="_blank"><i class="fab fa-facebook"></i></a>
        <a href="https://www.instagram.com" target="_blank"><i class="fab fa-instagram"></i></a>
    </div>
                </div>
    <script src="../js/responsive-nav.js"></script>
</body>
</html>