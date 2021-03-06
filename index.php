<?php
$domOBJ = new DOMDocument();
$domOBJ->load("http://news.yahoo.com/rss/");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>
    <div>
        <?php
        $content = $domOBJ->getElementsByTagName("item");

        foreach ($content as $data) {
            $title = $data->getElementsByTagName("title")->item(0)->nodeValue;
            $link = $data->getElementsByTagName("link")->item(0)->nodeValue;
            $description = $data->getElementsByTagName("description")->item(0)->nodeValue;
            $source = $data->getElementsByTagName("source")->item(0)->nodeValue;
            $pubdate = $data->getElementsByTagName("pubDate")->item(0)->nodeValue;
        ?>
            <ul>
                <li><strong><?php echo $title ?></strong></li>
                <ul>
                    <li><?php echo $link ?></li>
                    <li><?php echo $description ?></li>
                    <li><?php echo $source ?></li>
                    <li><?php echo $pubdate ?></li>
                </ul>
            </ul>
        <?php } ?>
    </div>
</body>


</html>
