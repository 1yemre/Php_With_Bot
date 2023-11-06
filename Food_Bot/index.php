<?php
require "class.php";

$html=file_get_html('https://refikaninmutfagi.com/tarifler/');
/*
foreach($html->find('img')as $img)
     echo $img->src."<br>";
*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css">
    <title>Php Bot Uygulama</title>
<style>
        .table-content{
            margin-top: 55px;
        }

         
</style>
</head>
<body>

<div class="container">
   <div class="table-content">
        <table class="table">
    <thead>
            <tr>
                <th scope="col">İmage</th>
                <th scope="col">Title</th>
                <th scope="col">Category</th>
              
            </tr>
    </thead>
    <tbody>
        <?php
            foreach($html->find('.mutfak-yazilari-items li') as $img):
           ?>  
            <tr>
                <th scope="row">
                      <a href="<?php echo $img->find("a",0)->href; ?>" target="_blank">
                     <img style="width:10rem;"  src="<?php echo $img->find(".mutfak-yazisi-img img",0)->src; ?>"></a></th>
                <td><?php echo $img->find(".mutfak-yazisi-title",0)->innertext; ?></td>
                <td><?php echo $img->find(".mutfak-yazisi-cat",0)->innertext; ?></td>
                
                
            <tr>
         <?php  endforeach; ?>
         
    </tbody>
   


        </table>
    </div>
</div> 



</body>
</html>


