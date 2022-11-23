<?php
  include_once("templates/header.php");

  if(isset($_GET['id'])) {

    $postId = $_GET['id'];
    $currentPost;

    foreach($posts as $post) {
    
      if($post['id'] == $postId) {
        $currentPost = $post;
      }

    }

  }

?>
  <main id="post-container">
    <div class="content-container">
      <h1 id="main-title"><?= $currentPost['title'] ?></h1>
      <p id="post-description"><?= $currentPost['description'] ?></p>
      <div class="img-container">
        <img src="<?= $BASE_URL ?>/img/<?= $currentPost['img'] ?>" alt="<?= $currentPost['title'] ?>">
      </div>
      <p class="post-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Non maiores et illum exercitationem ipsa harum, nihil, enim officia eum laborum debitis rem eligendi ratione sunt quaerat illo delectus facilis similique?
      Temporibus veritatis, voluptatum ea totam aliquam ipsa aspernatur at nobis atque asperiores repellendus, beatae eum autem officiis illum placeat, aut corporis accusamus distinctio sint! Autem similique repellendus error commodi laboriosam.
      Cumque, laudantium quibusdam deleniti expedita aperiam ipsa reiciendis adipisci similique maiores odit dicta a dolorum temporibus aliquid neque facilis, et distinctio fuga ut ab culpa qui minus, sint atque! Quos!
      Exercitationem provident itaque consequuntur autem maiores necessitatibus eius et recusandae, mollitia minus harum dignissimos ex porro praesentium officiis deleniti unde libero optio, hic fuga! Reiciendis cupiditate laudantium porro deserunt iusto!
      Sequi dolore ex blanditiis mollitia facere magni provident, explicabo quae. Ab rerum, debitis dolorem nam tempora amet sint quaerat architecto, laudantium at, dicta adipisci officia dolore. Harum consequuntur voluptatibus voluptatem.</p>
      <p class="post-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Non maiores et illum exercitationem ipsa harum, nihil, enim officia eum laborum debitis rem eligendi ratione sunt quaerat illo delectus facilis similique?
      Temporibus veritatis, voluptatum ea totam aliquam ipsa aspernatur at nobis atque asperiores repellendus, beatae eum autem officiis illum placeat, aut corporis accusamus distinctio sint! Autem similique repellendus error commodi laboriosam.
      Cumque, laudantium quibusdam deleniti expedita aperiam ipsa reiciendis adipisci similique maiores odit dicta a dolorum temporibus aliquid neque facilis, et distinctio fuga ut ab culpa qui minus, sint atque! Quos!
      Exercitationem provident itaque consequuntur autem maiores necessitatibus eius et recusandae, mollitia minus harum dignissimos ex porro praesentium officiis deleniti unde libero optio, hic fuga! Reiciendis cupiditate laudantium porro deserunt iusto!
      Sequi dolore ex blanditiis mollitia facere magni provident, explicabo quae. Ab rerum, debitis dolorem nam tempora amet sint quaerat architecto, laudantium at, dicta adipisci officia dolore. Harum consequuntur voluptatibus voluptatem.</p>
    </div>
    <aside id="nav-container">
      <h3 id="tags-title">Tags</h3>
      <ul id="tag-list">
        <?php foreach($currentPost['tags'] as $tag): ?>
          <li><a href="#"><?= $tag ?></a></li>
        <?php endforeach; ?>
      </ul>
      <h3 id="categories-title">Categorias</h3>
      <ul id="categories-list">
        <?php foreach($categorias as $category): ?>
          <li><a href="#"><?= $category ?></a></li>
        <?php endforeach; ?>
      </ul>
    </aside>
  </main>
  
<?php
  include_once("templates/footer.php")
?>