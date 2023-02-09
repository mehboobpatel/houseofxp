<?php
include('./include/header.php');
include('./admin/include/config.php')
?>

<main>
    <section class="section-6 container blogs_page_section" >
        <div class="inner-div">
            <h2>Blogs</h2>
            <p class="p3"> </p>
            <div class="blog-list">
                <?php
                $stmt_blog = $conn->prepare("SELECT * FROM `post` WHERE status=1");
                $stmt_blog->execute();
                while ($blog_data = $stmt_blog->fetch(PDO::FETCH_ASSOC)) {
                    $img_id = $blog_data['img_id'];

                    $blog_image = $conn->prepare("SELECT * FROM `images` WHERE id=?");
                    $blog_image->execute([$img_id]);
                    while ($blog_img = $blog_image->fetch(PDO::FETCH_ASSOC)) {
                        $blog_img_path = $blog_img['path'];
                    }

                ?>
                    <div class="card">
                        <div class="card-head">
                            <a href="blogpage1.php"> <img src="./admin/<?php echo $blog_img_path ?>" alt=""></a>
                        </div>
                        <div class="card-body">
                            <span><?php echo $blog_data['title'] ?></span>
                            <p>
                            </p>
                            <a href="<?php echo $blog_data['slug'] ?>">Read more<i class="fa-solid ms-3 fa-chevron-up"></i></a>
                        </div>
                    </div>
                <?php } ?>
                <!-- <div class="card">
                    <div class="card-head">
                    <a href="blogpage2.php"> <img  src="./images/blog2.jpeg" alt=""></a>
                    </div>
                    <div class="card-body">
                        <span>What makes the difference between a good and a great experience:</span>
                        <p></p>
                        <a href="">Read more<i class="fa-solid ms-3 fa-chevron-up"></i></a>
                    </div>
                </div>

                <div class="card">
                    <div class="card-head">
                    <a href="blogpage3.php"> <img  src="./images/blog3.jpeg" alt=""></a>
                    </div>
                    <div class="card-body">
                        <span>Take advantage of FOMO</span>
                        <p>
                        </p>
                        <a href="">Read more<i class="fa-solid ms-3 fa-chevron-up"></i></a>
                    </div>
                </div>

                <div class="card mb-5">
                    <div class="card-head">
                    <a href="blogpage4.php"> <img  src="./images/blog4.jpeg" alt=""></a>
                    </div>
                    <div class="card-body">
                        <span>Influencer Marketing Trends to Watch in 2022:</span>
                        <p></p>
                        <a href="">Read more<i class="fa-solid ms-3 fa-chevron-up"></i></a>
                    </div>
                </div> -->


            </div>
        </div>
    </section>
</main>

<?php
include('./include/footer.php')
?>