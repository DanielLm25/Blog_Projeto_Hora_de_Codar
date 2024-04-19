<?php
include_once("templates/header.php");

if(isset($_GET['id'])){
  $postId=$_GET['id'];

  $currentPost;

  foreach($posts as $post){
    if($post['id'] == $postId){
        $currentPost = $post; // Aqui está o erro, deve ser "=" em vez de "=="
    }
}

}
?>
<main id="post-container">
  <div class="content-container">
    <h1 id="main-title">
      <?= $currentPost['title'] ?>
    </h1>
    <p id="post-description"><?= $currentPost['description'] ?></p>
    <div class="img-container">
      <img src="<?= $BASE_URL ?>/img/<?=$currentPost['img'] ?>" alt="<?= $currentPost['title'] ?>">
    </div>
    <p class="post-content">
      Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ullam quia culpa dolor repellat labore voluptates inventore sint commodi earum pariatur, architecto quidem dolorem cum dolore, nobis distinctio minima soluta quos.
      Molestiae sit repellat doloremque quam quisquam. Quia accusantium adipisci nobis. Id sed quasi sapiente asperiores eos at perspiciatis fugit debitis totam tenetur ratione dolores, unde eius cum? Molestiae, distinctio ratione.
      Eaque maxime repellendus voluptas recusandae, cumque illum ullam eveniet quo sed labore qui laudantium neque error obcaecati porro nisi incidunt optio necessitatibus totam nostrum doloremque et placeat aspernatur! Libero, veritatis.
      Vel similique voluptatem ullam minima, laudantium quibusdam, necessitatibus fugit ut, nisi debitis pariatur! Ex tempore cupiditate, fuga architecto nesciunt labore ipsa deserunt! Obcaecati deserunt minus incidunt, et autem doloremque a.
      Laudantium reiciendis ad, alias, qui repellat nihil laboriosam expedita neque error at eum mollitia nobis rem, unde quaerat eveniet. Animi quasi eum quos nesciunt nulla culpa dolore laudantium? Ipsam, obcaecati.
    </p>
    <p class="post-content">
      Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ullam quia culpa dolor repellat labore voluptates inventore sint commodi earum pariatur, architecto quidem dolorem cum dolore, nobis distinctio minima soluta quos.
      Molestiae sit repellat doloremque quam quisquam. Quia accusantium adipisci nobis. Id sed quasi sapiente asperiores eos at perspiciatis fugit debitis totam tenetur ratione dolores, unde eius cum? Molestiae, distinctio ratione.
      Eaque maxime repellendus voluptas recusandae, cumque illum ullam eveniet quo sed labore qui laudantium neque error obcaecati porro nisi incidunt optio necessitatibus totam nostrum doloremque et placeat aspernatur! Libero, veritatis.
      Vel similique voluptatem ullam minima, laudantium quibusdam, necessitatibus fugit ut, nisi debitis pariatur! Ex tempore cupiditate, fuga architecto nesciunt labore ipsa deserunt! Obcaecati deserunt minus incidunt, et autem doloremque a.
      Laudantium reiciendis ad, alias, qui repellat nihil laboriosam expedita neque error at eum mollitia nobis rem, unde quaerat eveniet. Animi quasi eum quos nesciunt nulla culpa dolore laudantium? Ipsam, obcaecati.
    </p>
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
      <?php foreach($categories as $category): ?>
          <li><a href="#"><?= $category ?></a></li>
        <?php endforeach; ?>
      </ul>
</aside>
</main>

<?php
include_once("templates/footer.php");
?>