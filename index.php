<!--Bulgaria Web Studio LTD 2019-2023 -->
<?php
include_once("config.php");
?>
<html lang="bg-BG" prefix="og: https://ogp.me/ns#">
  <head>
	<meta charset="UTF-8">
   <title><?php echo $title;  ?></title>
          <link rel="stylesheet" href="css/style.css">
          <link rel="icon" type="image/jpg" href="logo.jpg">
          </head>
      <body>   
          <h1 style="text-align:center;"><?php echo $title;  ?></h1>
          <div class="text-center" style="padding: 15px;">
             <button><a href="auth/register.html">Регистрация</a></button>
             <a></a>
             <a></a>
             <a></a>
             <button><a href="auth/login.html">Вход</a></button>
             <div class="tetx-center" style="padding: 15px;">
             <input type="search" placeholder="Търси" style="padding: 10px;"/>
             <a href="#"><button>Търси</button></a>
          </div>
          <div style="overflow-x:auto;">
          <table>
            <tr> 
                    <!--Forum Name-->
                    <th colspan="3">
                    <p style="font-size: 25px;">Име на форум</p>
                    </th>
                    <th>
                    <p><a href="#">[-]</a></p>
                    </th> 
                  </tr>
                  <tr>
                    <!--New posts-->
                    <td>X</td>
                    <!--Category Name-->
                    <td><p><strong><a  href="#">Име на  категория</a></strong></p></td>
                    <!--Statistics-->
                    <td><p>Публикации:&nbsp;<strong>1</strong></p></td>
                    <td><p>Теми:&nbsp;<strong>1</strong></p></td>
                  </tr>
                  <table>
              </table>
          </div>
          <br />
         


             <table>
                   <tr>
                   <td colspan="3">Статистика</td>
                   </tr>
              <tr>
                  <td>Брой публикации</td>
                    <td>Брой теми </td>
                    <td>Брой регистрирани потребители</td>
              </tr>
              <tr>
                    <td>1</td>
                    <td>1</td>
                    <td>1</td>
              </tr>
              </table>
              <footer>
          <p class="text-center">COOL STREAM SOCIAL PLATFORM FORUM &copy; 2019-2023
          <p style="color: gray;" class="text-center">Текущо време: <strong id="time"></strong>.</p> 
           </footer>
           <!---javascript---->
           <script src="js/time.js"></script>
      </body>
</html>