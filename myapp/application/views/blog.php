<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Artikel Terbaru</h1>

    <?php foreach ($blogs as $key => $blog): ?>
        <div class="blog">
            <h2>
                <a href="<?php echo site_url('blog/detail/'.$blog['url']); ?>">
                    <?php echo $blog['title']; ?>
                </a>
            </h2>


            <p><?php echo $blog['content']; ?></p>
        </div>
    <?php endforeach; ?>   
</body>
</html>