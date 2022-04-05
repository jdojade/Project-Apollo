<?php 
include_once "includes/dbh.inc.php";
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title></title>
    <link rel="icon" type="image/jpg" href="images/octagon.png" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css"
    />
    <link
      href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="css/MainStyle.css?version=1" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
  </head>
  <body>
    <input type="checkbox" id="sidebar-toggle" />
    <div class="sidebar">
      <div class="sidebar-header">
        <h3 class="brand">
          <span>LOGO HERE</span>
        </h3>
        <label for="sidebar-toggle" class="ti-menu-alt"></label>
      </div>

      <div class="sidebar-menu">
        <ul>
          <li>
            <a href="Admin(Dashboard).php">
              <span class="bx bxs-dashboard"></span>
              <span>Dashboard</span>
            </a>
          </li>
          <li>
            <a href="Admin(Jobs).php">
              <span class="bx bxs-detail"></span>
              <span>Pending Transactions</span>
            </a>
          </li>
          <li>
            <a href="Admin(Jobs).php">
              <span class="bx bxs-detail"></span>
              <span>Paid Transactions</span>
            </a>
          </li>
          <li>
            <a href="Admin(Jobs).php">
              <span class="bx bxs-detail"></span>
              <span>Customer Profile</span>
            </a>
          </li>
          <li>
            <a href="Admin(Reports).php">
              <span class="bx bxs-report"></span>
              <span>Reports</span>
            </a>
          </li>
          <li>
            <a href="Admin(Accounts).php">
              <span class="ti-settings"></span>
              <span>Manage Accounts</span>
            </a>
          </li>
          <li>
            <a href="includes/logout.inc.php">
              <span class="bx bx-log-out"></span>
              <span>Logout</span>
            </a>
          </li>
        </ul>
      </div>
    </div>

    <div class="main-content">
      <header>
        <div class="search-wrapper">
          <div style="background-image: url('Img/Icons/user-icon.png')"></div>
          <h3>Name</h3>
        </div>

        <div class="social-icons">
          <div class="icon">
            <img src="Img/Icons/Bell.svg" alt="">
            <span>1</span>
        </div>
        </div>
      </header>

      <main>
        <h2 class="dash-title">Overview</h2>
        <div class="dash-cards">
          <div class="card-single">
            <div class="card-body">
              <span>
                <img src="Img/Icons/Polygon 1.svg">
              </span>
              <div>
                <h5>Pending Payments</h5>
                <h4>0</h4>
              </div>
            </div>
          </div>
          <div class="card-single">
            <div class="card-body">
              <span>
                <img src="Img/Icons/Polygon 1.svg">
              </span>
              <div>
                <h5>COD</h5>
                <h4>0</h4>
              </div>
            </div>
          </div>
          <div class="card-single">
            <div class="card-body">
              <span>
                <img src="Img/Icons/Polygon 1.svg">
              </span>
              <div>
                <h5>E-WALLET </h5>
                <h4>0</h4>
              </div>
            </div>
          </div>
        </div>

        <section class="recent">
          <div class="activity-grid">
            <div class="activity-card">
              <h3 class="table-title">Pending Payments</h3>
              <div class="table-responsive">
                <table>
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Name</th>
                      <th>Address</th>
                      <th>Payment Method</th>
                      <th>Courier</th>
                      <th>Status</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td>1</td>
                      <td>1</td>
                      <td>1</td>
                      <td>1</td>
                      <td>1</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </section>
      </main>
    </div>
  </body>
</html>
