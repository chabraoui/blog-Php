<?php
require 'beach.php';
require 'config.php';
$getid = $_GET['id'];

try {
$pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
$sql = "SELECT Titre , Nom_cat, image, Contenu,  articles.id_cat from articles INNER JOIN categories ON articles.id_cat = categories.id_cat
where articles.id_cat = $getid";
$q = $pdo->query($sql);
$q->setFetchMode(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
die("Could not connect to the database $dbname :" . $e->getMessage());
}
 ?>

 <section class="feature-area section_gap_top">
   <div class="container">
     <div class="row">

        <?php while ($row = $q->fetch()): ?>

       <div class="col-lg-4 col-md-6">
         <div class="single-feature">
           <div class="feature-details">
             <h5><?php echo htmlspecialchars($row['Titre']) ?></h5>
             <p><?php echo htmlspecialchars($row['Contenu']); ?></p>
             <a href="#" class="primary-btn mb-40">Read More</a>
           </div>
           <div class="card" style="width: 18rem;">
             <img class="card-img-top" src="<?php echo htmlspecialchars("images/".$row['image']); ?>" alt="erreur">
           </div>
         </div>
       </div>
        <?php endwhile; ?>

     </div>
   </div>
 </section>
