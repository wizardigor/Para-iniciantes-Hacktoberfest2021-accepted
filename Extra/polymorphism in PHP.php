<!DOCTYPE html>
<html>

<head>
   <title>Polymorphism Example in PHP</title>
</head>

<body>
   <div>
      <?php
      // this is example code of polymorphism in PHP - CodesCracker
      interface TutorialILike
      {
         public function likemsg();
      }
      class LikePHP implements TutorialILike
      {
         private $topic;
         public function __construct($topic)
         {
            $this->topic = $topic;
         }
         public function likemsg()
         {
            echo "I just love to read " . $this->topic . " on CodesCracker<br/>";
         }
      }
      class LikeJava implements TutorialILike
      {
         private $topic;
         public function __construct($topic)
         {
            $this->topic = $topic;
         }
         public function likemsg()
         {
            echo "I just love to read " . $this->topic . " on CodesCracker<br/>";
         }
      }
      class LikeC implements TutorialILike
      {
         private $topic;
         public function __construct($topic)
         {
            $this->topic = $topic;
         }
         public function likemsg()
         {
            echo "I just love to read " . $this->topic . " on CodesCracker<br/>";
         }
      }
      class LikeHTML implements TutorialILike
      {
         private $topic;
         public function __construct($topic)
         {
            $this->topic = $topic;
         }
         public function likemsg()
         {
            echo "I just love to read " . $this->topic . " on CodesCracker<br/>";
         }
      }
      $objPHP = new LikePHP("PHP");
      $objJava = new LikeJava("Java");
      $objC = new LikeC("C");
      $objHTML = new LikeHTML("HTML");
      echo $objPHP->likemsg();
      echo $objJava->likemsg();
      echo $objC->likemsg();
      echo $objHTML->likemsg();
      ?>
   </div>

   <div>

   </div>
   by <br>
   <a href="https://github.com/aaka2409">
      <img src="https://avatars3.githubusercontent.com/aaka2409?size=400" width="100px;" alt="" />
   </a>
</body>

</html>