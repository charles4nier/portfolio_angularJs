<?php

require '../../controller/issetPost.php';

require '../../model/crudArticles.php';

if(isset($_GET['supprimer'])) {
  deleteArticle($_GET['supprimer']);
}

header('Location: http://localhost/portfolio_angularJs/public/index.php');
