<section class="menu cid-qTkzRZLJNu" once="menu" id="menu1-0">
<nav class="navbar navbar-expand beta-menu navbar-dropdown align-items-center navbar-fixed-top navbar-toggleable-sm">
   <div class="hamburger">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </div>
    </button>

    <?php
    $conn = mysqli_connect('localhost','root','','final');
    // Check connection
    if (mysqli_connect_errno()) {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
    ?>

    <div class="menu-logo">
        <div class="navbar-brand">

           
        </div>
    </div>
    
            <!--<a class="nav-link link text-white display-4" href="/ultimoiswear/php/login.php" aria-expanded="false">-->
              <?php
          //    session_start();
                if(isset($_SESSION['sess_user'])){

                  echo "<li class='nav-item active'>";
                  echo "<a class='nav-link link text-white display-4' href='./cart.php'> {$_SESSION['sess_user']} </a>";
                  echo "</li>";

                  echo "<li class='nav-item active'>";
                  echo "<a class='nav-link link text-white display-4' href='./logout.php' aria-expanded='false'> Logout </a>";
                  echo "</li>";

                }else{
                  echo "<li class='nav-item active'>";
                
                  echo "</li>";
                }
              ?>

              <?php
              if(!isset($_SESSION['sess_user'])){
              }else{
                $admin = $_SESSION['sess_user'];
                if($admin == 'admin@swdroids.com'){
                    echo "<li class='nav-item active'>";
                    echo "<a class='nav-link' href='./admin.php'>MODIFY</a>";
                    echo "</li>";
                }
              }

              ?>

            </ul>
        </nav>
</section>

</section>
