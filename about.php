<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Me</title>
    <link rel="stylesheet" href="styles/styleabout.css">
</head>

<body>
    <div id="navbar">
        <p><b>Cansu's Camera Roll</b></p>
        <a href="index.php">Home</a>
        <a href="cities.php">Colours of the City</a>
        <a href="walks.php">Walks in the North</a>
        <a href="classics.php">Monochrome Classics</a>
        <a href="about.php"><b>About Me</b></a>
    </div>

    <div class="centretext">
        <h2>Cansu Han</h2>
    </div>
    <div class="backtoblack">
        <p class="centretext">
            <IMG src="styles/images/about/aboutme.jpg" alt="Cansu" class="img">
            <br>
            I appreciate the simple experience of everyday life, fleeting beauty of in-between moments, and for me
            photography has been a way of giving these back to the world. I initially started shooting digital
            photography but found myself wanting to experience the photographs more closely. When I was training as a
            field archaeologist in Cyprus, roaming around old town Nicosia, I found a basket of old film cameras in a
            second-hand bookshop. I was there looking at the cameras for a while and the owner came up to me, picked up
            a camera, and said back in the day this was his favourite to shoot with. We ended up talking for a while
            about photography and the beauty of simple moments that are often missed in the everyday bustle. Somehow, I
            was convinced I needed the camera he was selling, and that’s how I got into film photography. Shooting with
            film slows me down and makes me think more when collecting moments and developing the 35mm photographs
            myself has been an immersive experience.
            <br>
            </pclass>
    </div>
    <br>
    <div class="backtoblack">
    <div class="existing_comments">
    <?php
        $db=mysqli_connect('localhost', 'root', 'toor', 'website_project');
        $sql= 'SELECT * FROM comments';
        $result=mysqli_query($db, $sql);

        if(mysqli_num_rows($result)>0){
            while($row=mysqli_fetch_array($result)){
                echo '<h5 class="user">' . $row['name'] . '</h5>';
                echo '<p class="user_comment">' . $row['comments'] . '</p>';
            }
        }
    ?>
    </div>
    
    <div id="form_block">
        <h5 id="tag">Please leave a comment below!</h5>
        <form id="php-form" action="comments_connection.php" method="post">
            <table id="php-table">
                <tr class="php-tr">
                    <td class="php-td"><label class="php-label">Name:</label></td>
                    <td class="php-td"><input id="name" class="php-input" name="name" type="text" placeholder="Username" autocomplete="off"></td>
                </tr>
                <tr class="php-tr">
                    <td class="php-td"><label class="php-label">Comments</label></td>
                    <td class="php-td"><textarea id="comments" class="php-textarea" name="comments" required></textarea></td>
                </tr>
            </table>
            <button type="submit" class="php-button">Submit</button>
        </form>
    </div>
    </div>
    <div>
        <p>Find me on Social Media</p>
            <!-- Add icon library -->  
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

            <!-- Add font awesome icons -->
        <a target="_blank" href="https://www.instagram.com/cansunah/" class="fa fa-instagram"></a>
        <a target="_blank" href="https://www.linkedin.com/in/cansu-dogan-han-829458a7/" class="fa fa-linkedin"></a>
    </div>
    <div>
    <br><br>
        <footer class="backtoblack">All images and website design produced by Cansu Han.</footer>
    </div>
</body>

</html>