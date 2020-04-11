<section id="data-penginapan">
<div class="wrapper row3">
<?

$host = "localhost";
$port = "5432";
$dbname = "buleleng";
$user = "postgres";
$password = "admin";
$pg_options = "--client_encoding=UTF8";

$connection_string = "host={$host} port={$port} dbname={$dbname} user={$user} password={$password} options='{$pg_options}'";
$conn = pg_connect($connection_string)
$query = ("SELECT * FROM public.hotel1 ORDER BY gid ASC ");
$result =pg_query($conn,$query)or die('Query failed: ' . pg_last_error());	
?>
  <div class="hoc container clear" background="#ebebe0"> 
    <!-- ################################################################################################ -->
    <div class="sectiontitle">
	<center>
      <h1>Peta Persebaran Penginapan di Kabupaten Buleleng</h1>
    		<h3 class="heading">Tahun 2019</h3>
    </center>
	</div>
	

        <article>
          <div class="txtwrap">
	<table width='80%' align="center" class="table">
    <thead class="bg-warning">
    <tr>
        <th>ID</th><th>Nama</th><th>Kategori</th><th>alamat</th><th>lng</th><th>lat</th>
    </tr>
    </thead>
    <tbody>
	<?php
	$host = "localhost";
$port = "5432";
$dbname = "buleleng";
$user = "postgres";
$password = "admin";
$pg_options = "--client_encoding=UTF8";

$connection_string = "host={$host} port={$port} dbname={$dbname} user={$user} password={$password} options='{$pg_options}'";
$conn = pg_connect($connection_string)
	 	
	while($user_data = pg_fetch_array($result,null));{         
		echo "<tr>";
        echo "<td>".$user_data['gid']."</td>";
        echo "<td>".$user_data['nama']."</td>";
        echo "<td>".$user_data['kategori']."</td>";
        echo "<td>".$user_data['alamat']."</td>";
		echo "<td>".$user_data['lng']."</td>";
		echo "<td>".$user_data['lat']."</td>";
		
    }
	pg_close($conn);
	
    ?>
    </tbody>
    </table>
	</div>
        </article>

    <!-- ################################################################################################ -->
  </div>
</div>
</section>