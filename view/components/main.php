<main class="container">
  <div class="row">
    <form class="flexColumn perfectCenter" action="../public/articles/store.php" method="post" ng-show="show">
      <label for="tag">Tag :</label>
      <input type="text" name="tag" value="">
      <label for="title">Title :</label>
      <input type="text" name="title" value="">
      <label for="content">Content :</label>
      <textarea name="content" rows="8"></textarea>
      <label for="link"><link rel="stylesheet" href="/css/master.css">Url :</label>
      <input type="text" name="link" value="">
      <input type="submit" name="submit" value="Envoyer">
    </form>
    <form class="flexColumn perfectCenter" action="../public/articles/update.php" method="post" ng-show="showEditForm">
      <input type="hidden" name="id_article" value="{{articles[length].id_article}}">
      <label for="tag">Tag :</label>
      <input type="text" name="tag" value="{{articles[length].type}}">
      <label for="title">Title :</label>
      <input type="text" name="title" value="{{articles[length].title}}">
      <label for="content">Content :</label>
      <textarea name="content" rows="8" cols="80">{{articles[length].content}}</textarea>
      <label for="link">Url :</label>
      <input type="text" name="link" value="{{articles[length].link}}">
      <input type="submit" name="submit" value="Envoyer">
    </form>
    <div class="col-md-offset-2 col-md-8 col-sm-12">
      <article class="flexColumn justifySpaceBetween" ng-show="!show" ng-hide="showEditForm">
        <?php
          if($adminConnected == true)
          {
        ?>
        <div class="boutonContainer flexRow justifySpaceBetween">
          <a href="../public/articles/delete.php?supprimer={{articles[length].id_article}}"><button type="button" name="button">Supprimer l'article</button></a>
          <a href="" ng-click="showEditForm = !showEditForm"><button type="button" name="button">Editer l'article</button></a>
        </div>
        <?php
          }
        ?>
        <h2>{{ articles[length].title }}</h2>
        <p>{{ articles[length].content }}</p><br>
        <div class="flexColumn perfectCenter">
          <a href="{{ articles[length].link}}" target="_blank" class="testZone">
            {{ articles[length].link}}
          </a>
        </div>
        <nav class="flexRow boutonContainer justifySpaceBetween">
          <button type="button" name="button" ng-click="before()">before</button>
          <button type="button" name="button" ng-click="after()">after</button>
        </nav>
      </article>
    </div>
    <nav class="col-md-2 hidden-xs hidden-sm" ng-show="!show" ng-hide="showEditForm">
      <h2 class="text-center">Tous les articles</h2>
      <ul>
        <li ng-repeat="article in articles" ng-click="getIndex($event)">{{article.title}}</li>
      </ul>
    </nav>
  </div>
</main>