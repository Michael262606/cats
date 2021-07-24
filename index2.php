<!DOCTYPE html>
<html lang="ru">
    <head>
    <!--метатег-->
<meta charset="utf-8">
    <!-- CSS-->
<link rel = "stylesheet" href="navigation.css">
    <title>0.2</title>
</head>
<body>
    <header>
        <!-- navigation menu-->
        <div class='navbar'>
        <div class="nav">
            <ul>
                 <?php error_reporting(E_ALL);?>
                   <?php include_once 'db.php'; ?>
                   <?php include_once 'categoriey.php';?>
                   <?php include_once 'categoriey2.php';?>
                   <?php include_once 'categoriey3.php';?>
                    <?php
                    $categories = get_categories($conn);
                    ?>
                    <?php if(count($categories) ===0):?>
                    <li><a href="#">'категория'</a></li>
                    <?php else: ?>
                  <?php
                     foreach($categories as $categoriy) :?>
               <li><?php echo '<a href="/category.php?id=' . $categoriy["id"] . '">' . $categoriy["title"] . '</a>'; ?></li>
                     <?php endforeach; ?>
                   <?php endif; ?>
                     </ul>       
           
        </div>
    </header>
    <div class="page">
      <main ><class="content"> 
        <h1 href="...">содержания каталога</h1>
        <?php $posts = get_posts($conn); ?>
        <?php foreach($posts as $post) :?>
          <p> <img src="Images/imag 1.jpg" width="120" height="120" alt="кот"  vspace="5" hspace="5" align="left">
         <h2> <?php echo $post['title'] ?></h2> 
         <p><?php echo $post['articles'] ?></p>
         <a href="...">читать полностью</a>
         <?php endforeach; ?> 
        
    </div>
   
           <div class="container row">    
</main>
     <footer class='footer'>
    <A href="">footer сайта ссылки и всякое подобное что может предоставить этот сайт!!! </A>
    </footer>
</div>

</body>
</html>
