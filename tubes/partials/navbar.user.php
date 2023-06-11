<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container">
    <a class="navbar-brand" href="index.php" id="Logo">Taste Trakker</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <ul class="navbar-nav">
    <li><a href="index.php">Home</a></li>
    <li><a href="about.php">About</a></li>
    <li><a href="kuliner.php">Kuliner</a></li>
    <li><a href="resto.php">Restaurant</a></li>
    <li><a href="login.php">Logout</a></li>
  </ul>
      <!-- <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
      </form> -->
  </div>
</nav>
<style>
.navbar {
    height: 60px;
    padding: 10px;
    display: flex;
    align-items: center;
    justify-content: space-between;
}
#Logo {
    font-family: Century;
    font-size: 25px;
    font-weight: bold;
    color: firebrick;
  }
.navbar-nav {
    list-style: none;
    margin: 0;
    padding: 0;
  }
  .navbar-nav li {
    display: inline-block;
    margin-right: 20px;
  } 
  
  .navbar-nav li a {
    text-decoration: none;
    color: #333;
    font-size: 16px;
    font-weight: 500;
  }
  
  .navbar-nav li a:hover {
    color: firebrick;
  }
  
  </style>