<!--
<nav class="navbar navbar-default navbar-static-top" role="navigation"
			style="margin-bottom: 0">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse"
					data-target=".navbar-collapse">
					<span class="sr-only">Toggle navigation</span> <span
						class="icon-bar"></span> <span class="icon-bar"></span> <span
						class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="index.php">Data Penginapan dan Hotel Kab Buleleng</a>
			</div>
						 <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        
                        <li>
                   <a href="dashboard.php"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-table fa-fw"></i> <span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="tambah.php">Tambah Data</a>
                                </li>
                                <li>
                                    <a href="tampil.php">Tampil Dan Edit Data</a>
                                </li>
                                <li>
                                    <a href="peta.php">Lihat Peta</a>
                                </li>
                                <li>
                                    <a href="maps.php">Google Maps</a>
                                </li>
                                <li>
                                <a href="logout.php"><i class="fa fa-bar-chart-o fa-fw"></i>Logout<span class="fa arrow"></span></a>
                                </li>
                            </ul>
                            </li>
                
                   <li>
                            
                  </li>
                  </ul>      				  
                </div>
               
            </div>
            
        </nav>
-->


<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="#">
    <img src="Buleleng1.png" width="35" height="35" class="d-inline-block align-top" alt="">
    Buleleng
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="dashboard.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown active">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Menu Admin
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="tambah.php">Tambah Data</a>
          <a class="dropdown-item" href="tampil.php">Lihat Data</a>
          <a class="dropdown-item" href="peta.php">Lihat Peta</a>
          <a class="dropdown-item" href="maps.php">Google Maps</a>
        </div>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="logout.php">Logout <span class="sr-only">(current)</span></a>
      </li>
    </ul>
  </div>
</nav>