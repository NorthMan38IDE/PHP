<?php
        
$work_fields = [
            'work_name' => ['Nornickel', 'Rosneft', 'Lab.Kaspersky'],
            'work_data' => ['1999 - 2004', '2005 - 2014', '2014 - по настоящее время'],
            'work_desc' => ['Глава направления информационного сопровождения интеграции SAP', 'Эксперт по направлению сигнатурных уязвимостей и эвристических алгоритмов сканирования', 'Глава направления информационная безопасность. Сопровождение проектов КИИ']
            
        ] 
        

?>



<!DOCTYPE html>
<html>
  <head>
    <title>Мое резюме</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Jost:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
    html,body,h1,h2,h3,h4,h5,h6 {font-family: 'Jost', sans-serif;}
    </style>
  </head>
<body class="w3-light-grey">

<!-- Page Container -->
<div class="w3-content w3-margin-top" style="max-width:1400px;">

  <!-- The Grid -->
  <div class="w3-row-padding">
  
    <!-- Left Column -->
    <div class="w3-third">
      <div class="w3-white w3-text-grey w3-card-4">
        <div class="w3-display-container">
          <img src="https://ae01.alicdn.com/kf/U71c561f7d53a4262a6e5f59f86aa0e00o.jpg" style="width:100%" alt="Avatar">
          <div class="w3-display-bottomright w3-container w3-text-white">
          <h2>Александр</h2>
          </div>
        </div>
        <div class="w3-container">
          <p><i class="fa fa-briefcase fa-fw w3-margin-right w3-large w3-text-teal"></i>Информационная безопасность</p>
          <p><i class="fa fa-home fa-fw w3-margin-right w3-large w3-text-teal"></i>Гватемала, Антигуа</p>
          <p><i class="fa fa-envelope fa-fw w3-margin-right w3-large w3-text-teal"></i>FirstBlodd@gmail.com</p>
          <p><i class="fa fa-phone fa-fw w3-margin-right w3-large w3-text-teal"></i>+999 999 99 99</p>
          <hr>

          <p class="w3-large"><b><i class="fa fa-asterisk fa-fw w3-margin-right w3-text-teal"></i>Навыки</b></p>
          <p>Пытки иглами</p>
          <div class="w3-light-grey w3-round-xlarge w3-small">
            <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:30%">30%</div>
          </div>
          <p>FirstBlood на миде</p>
          <div class="w3-light-grey w3-round-xlarge w3-small">
            <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:~97%">
              <div class="w3-center w3-text-white">97%</div>
            </div>
          </div>
          <p><i class="fa fa-rub" aria-hidden="true" w3-margin-right w3-text-teal"></i> Взлом кремля</p>
          <div class="w3-light-grey w3-round-xlarge w3-small">
            <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:3%">3%</div>
          </div>
          <p><i class="fa fa-btc" aria-hidden="true" w3-margin-right w3-text-teal"></i> Взлом ЦРУ</p>
          <div class="w3-light-grey w3-round-xlarge w3-small">
            <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:100%">100%</div>
          </div>
          <br>

          <p class="w3-large w3-text-theme"><b><i class="fa fa-globe fa-fw w3-margin-right w3-text-teal"></i>Языки</b></p>
          <p>Английский</p>
          <div class="w3-light-grey w3-round-xlarge">
            <div class="w3-round-xlarge w3-teal" style="height:24px;width:100%"></div>
          </div>
          <p>Испанский</p>
          <div class="w3-light-grey w3-round-xlarge">
            <div class="w3-round-xlarge w3-teal" style="height:24px;width:10%"></div>
          </div>
          <p>Русский</p>
          <div class="w3-light-grey w3-round-xlarge">
            <div class="w3-round-xlarge w3-teal" style="height:24px;width:100%"></div>
          </div>
          <br>
        </div>
      </div><br>

    <!-- End Left Column -->
    </div>

    <!-- Right Column -->
    <div class="w3-twothird">
    
     <div class="w3-container w3-card w3-white w3-margin-bottom">
    <h2 class="w3-text-grey w3-padding-16"><i
            class="fa fa-suitcase fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Багаж комплексов</h2>
    <div class="w3-container">
        <h5 class="w3-opacity"><b>
                <?php echo $work_fields['work_name'][1]; ?>
            </b></h5>
        <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>
            <?php echo $work_fields['work_data'][1]; ?>
        </h6>
        <p>
            <?php echo $work_fields['work_desc'][0]; ?>
        </p>
        <hr>
    </div>
    <div class="w3-container">
        <h5 class="w3-opacity"><b>
                <?php echo $work_fields['work_name'][0]; ?>
            </b></h5>
        <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>
            <?php echo $work_fields['work_data'][0]; ?>
        </h6>
        <p>
            <?php echo $work_fields['work_desc'][2]; ?>
        </p>
        <hr>
    </div>
    <div class="w3-container">
        <h5 class="w3-opacity"><b>
                <?php echo $work_fields['work_name'][2]; ?>
            </b></h5>
        <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>
            <?php echo $work_fields['work_data'][2]; ?>
        </h6>
        <p>
            <?php echo $work_fields['work_desc'][1]; ?>
        </p>
        <hr>
    </div></div>


      
    <!-- End Right Column -->
    </div>
    
  <!-- End Grid -->
  </div>
  
  <!-- End Page Container -->
</div>

<!-- Footer -->
<footer class="w3-container w3-teal w3-center w3-margin-top">
  <p>Find me on social media.</p>
  <i class="fa fa-pinterest-p w3-hover-opacity"></i>
  <i class="fa fa-twitter w3-hover-opacity"></i>
  <i class="fa fa-linkedin w3-hover-opacity"></i>
 <!-- End footer -->
 </footer>

</body>
</html>
