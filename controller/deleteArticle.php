<?php

  require '../../controller/issetPost.php';
  require '../../model/Article.php';
  require '../../model/tagArticle.php';

  if(isset($_GET['supprimer'])) {
    tagArticle::deleteTagArticle($_GET['supprimer']);
    Article::deleteArticle($_GET['supprimer']);
  }


  //local
  header('Location: http://localhost/le_memento_des_simploniens/public/index.php');

  //en ligne
  // header('Location: http://charles4nier.com/memento/public/index.php');
