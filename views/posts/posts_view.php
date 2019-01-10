<div class="container">
    <div class="row">
        <div class="col-lg-8">
            <h1><? echo $post['post_subject'];?></h1>
            <p class="lead"><i class="fa fa-user"></i> by <? echo $post['name'];?>
            </p>
            <hr>
            <p><i class="fa fa-calendar"></i> Posted on <? echo$post['post_created'];?></p>
            <p><i class="fa fa-tags"></i> Tags: <a href=""><span class="badge badge-info">Bootstrap</span></a> <a href=""><span class="badge badge-info">Web</span></a> <a href=""><span class="badge badge-info">CSS</span></a> <a href=""><span class="badge badge-info">HTML</span></a></p>

            <hr>
            <p><? echo $post['post_text'];?></p>
        </div>
    </div>
</div> 