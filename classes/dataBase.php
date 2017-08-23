<?php

 class dataBase {

  static $_instance;
  private $_db;

  static function init(){
    if (!(self::$_instance instanceof self)) {
          self::$_instance = new self();
      }
      return self::$_instance;

  }

  private function __construct() {

    $url = getenv('JAWSDB_URL');
    if($url) {
      $dbparts = parse_url($url);
      $hostname = $dbparts['host'];
      $username = $dbparts['user'];
      $password = $dbparts['pass'];
      $database = ltrim($dbparts['path'],'/');
    } else {
      $hostname = '127.0.0.1';
      $username = 'root';
      $password = '';
      $database = 'bglandmarkslocal';
    }
    try {
      $this->_db = new PDO("mysql:host=$hostname;dbname=$database", $username, $password, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8") );
      $this->_db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch(PDOException $e) {
    echo $e->getMessage();
    }
  }

  public function initDb() {
    $db = self::$_instance;

    //queries
    $createTable = "
    drop table if EXISTS landmarks;
    CREATE TABLE IF NOT EXISTS landmarks (
      id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
      post_id INT(11) UNSIGNED NOT NULL,
      title VARCHAR(255),
      lat FLOAT(11,5),
      lon FLOAT(11,5),
      body LONGTEXT,
      category INT(5),
      image VARCHAR(4000),
      lang VARCHAR(5),
      edit_date TIMESTAMP,
      created_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    );";

    $db->query($createTable);
    echo "Landmarks created";
    $createTable = "
    CREATE TABLE IF NOT EXISTS categories (
      id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
      cat_id INT(11) UNSIGNED,
      title VARCHAR(255),
      icon VARCHAR(50),
      lang VARCHAR(5)
    );";

    $db->query($createTable);
    echo "Categories created";
    $createTable = "
    CREATE TABLE IF NOT EXISTS settings (
      id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
      name VARCHAR(255),
      value VARCHAR(255)
    );";

    $db->query($createTable);
    echo "settings created";

    $this->seedDb();

    $insertIgnore  = "
    INSERT IGNORE into settings
    VALUES
    (1,'structureCreated', 'true')";
    $db->query($insertIgnore);
    echo "DONE";
  }


  public function seedDb() {
    $db = self::$_instance;
    $insertIgnore  = "
    INSERT IGNORE into categories
    VALUES

    (1,1,'Natural','fa-tree','en'),
    (2,1,'Природни','fa-tree','bg'),
    (3,2,'Arhitectural','fa-university','en'),
    (4,2,'Архитектурни','fa-university','bg'),
    (5,3,'Historical','fa-map-signs','en'),
    (6,3,'Исторически','fa-map-signs','bg'); ";

    $db->query($insertIgnore);
    echo "DONE";

    $insertIgnore  = '
    INSERT into landmarks
    VALUES (
    1,
    1,
    "Kardzhali Dam",
    "41.6322",
    "25.3388",
    "<blockquote class=\"text-color\"><p class=\"text-left\">Kardzhali dam, along with Ivaylovgrad dam and Studen Kladenets dam are the three biggest ones that accumulate the Arda River and its tributaries.</p>
    <p class=\"text-left\">It is situated northwest of Kardzhali. The dam is three kilometres away from the city. The building of the dam wall took place in the period from 1957 to 1963. It has the shape of an arch and is made of concrete. It rises 103,5 meters above the ground, and the total volume of the reservoir pool is 497,2 milion cubic meters. In size it is second, and in shape, design and implementation is the only one on the Balkan Peninsula. It is one of the few dam walls in the world towering over the city. The noted Kardzhali dam is among the most attractive tourist attractions in the area of the Arda River. It forms beautiful bays and peninsulas, overlooked be steep slopes and dotted with amazing rock formations.</p>
    <p class=\"text-left\">Fishing here is available for fishermen across the country. Each season has its charm, and wonderful nature creates conditions not only for recreation but also for aesthetic enjoyment. The waters of Kardzhali dam are inhabited by trout, sturgeon, catfish, perch, carp, chub, rudd, bleak etc. You can catch
    the fish of your life - statistics remembers giant carp and trophy size catfish, whose weight exceeds 100kg.</p>
    <p class=\"text-left\">In summer, the dam serves as a means of recreation for both residents of, and visitors to, Kardzhali. It is a popular place among fans of water sports. Hotels, open-air restaurants and summer houses are built in proximity.</p><div class=\"col-md-12\">
    <div class=\"fb-share-button text-left\" data-layout=\"button\" data-size=\"large\" data-mobile-iframe=\"true\"><a class=\"fb-xfbml-parse-ignore\" target=\"_blank\" href=\"https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse\">Share</a></div>
    </div></blockquote>",
    2,
    "dam_wall.jpg,dam_wall1.jpg,dam_wall2.jpg",
    "en",
    CURRENT_TIMESTAMP(),
    CURRENT_TIMESTAMP()
  ),

  (
    2,
    1,
    "Язовирна стена, Кърджали",
    "41.6322",
    "25.3388",
    "<blockquote><p class=\"text-left\">Язовир \"Кърджали\" е един от трите големи язовира, заедно с язовир \"Студен кладенец\" и \"Ивайловград\", които акумулират водите на река Арда и нейните притоци</p>
    <p class=\"text-left\"> Язовирът се намира се северозапад от град Кърджали, стената му е на около 3км. от града. Строителството на стената протича в периода 1957-1963 година. Тя е бетонна дъгово-гравитачна , изшисява се на 103,5 метра над земята, а общият завирен обем на водохранилището е 497,2 млн. куб. метра. По големина е на второ място, а по форма, конструкция и изпълнение е единствената на Балкански полуостров. Тя е и една от малкото язовирни стени в света, които се извисяват на самия град.</p>
    <p class=\"text-left\">Язовир Кърджали е сред най-привлекателните туристически атракции на Ардинския район. Той образува красиви заливи и полуострови, над които стръмни склонове, осеяни с причудливи скални форми. Риболовът тук е приоритет за риболовците от цялата страна. Всеки сезон си има своето очарование, а чудната природа създава условия не само за отдих, а и за естетическа наслада. Водите на язовир Кърджали се обитават от американска балканска пъстърва, есетра, сом, бяла риба, шаран, амур, кефал, костур, червеноперка и уклей. Тук може да уловите рибата на живота си - статистиката помни шарани с гигантски размери и трофейни сомове, уловени с въдици, чието тегло надхвърля 100кг.</p>
    <p class=\"text-left\">През лятото язовирът служи като средство за отмора на много жители на Кърджали и гости на града. В непосредствена близост са изградени хотели, ресторанти и лятни вили.</p><div class=\"col-md-12\">
    <div class=\"fb-share-button text-left\" data-layout=\"button\" data-size=\"large\" data-mobile-iframe=\"true\"><a class=\"fb-xfbml-parse-ignore\" target=\"_blank\" href=\"https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse\">Share</a></div>
    </div></blockquote>",
    2,
    "dam_wall.jpg,dam_wall1.jpg,dam_wall2.jpg",
    "bg",
    CURRENT_TIMESTAMP(),
    CURRENT_TIMESTAMP()
  ),

  (
  3,
  2,
  "museum",
  "41.647067",
  "25.369539",
  "<blockquote class=\"text-color\"><p class=\"text-left\"><strong>Location</strong> - Republicanska Str.4, Kardzhali.</p>
  <p class=\"text-left\"><strong>Description of site</strong> - The Regional History Museum in the town of Kardzhali is one of the largest museums in Southern Bulgaria. A municipality-funded project. It was built in the period 1922-1930. It was designed by a Russian achitect who worked in Constantinople. Initially, building was intended for a Muslim religious school, but has never perfomed this function. </p>
  <p class=\"text-left\">Opened in 1965 artifacts that trace back the life of the Eastern Rhodopes from ancient times to the begining of the 20th century. The exhibition was open to visitors in 1987 and occupies 1800 square meters space it three floors. The building has a courtyard with a water are of 15 acres. Twenty-two plant species, unique for the region of southern Bulgaria, have been planted. The museum has three sections - Archeology, Ethnology and Nature. Each section occupies a separate floor with rooms devoted to different themes .</p><div class=\"col-md-12\">
  <div class=\"fb-share-button pull-left\" data-layout=\"button\" data-size=\"large\" data-mobile-iframe=\"true\"><a class=\"fb-xfbml-parse-ignore\" target=\"_blank\" href=\"https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse\">Share</a></div>
  </div></blockquote>",
  2,
  "museum.jpg,museum1.jpg",
  "en",
  CURRENT_TIMESTAMP(),
  CURRENT_TIMESTAMP()
  ),

  (
  4,
  2,
  "museum",
  "41.647067",
  "25.369539",
  "<blockquote class=\"text-color\"><p class=\"text-left\"><strong>Наименование на обекта</strong> - Регионален исторически музей.</p>
  <p class=\"text-left\"><strong>Местоположение</strong> - ул.Републиканска №4 гр.Кърджали.</p>
  <p class=\"text-left\"><strong>Описание на обекта</strong> - Регионален исторически музей в гр.Кърджали е един от най-големите музеи в Южна България. Построен е в периода 1922-1930 г. със средствата на местната община по проект на руски архитект работещ в Цариград. Първоначално сградата е била предназначена за медресе - мюсюлманско духовно училище, но никога не е изпълнявало тази функция.</p>
  <p class=\"text-left\">Открит е през 1965 г. Основният фонд съдържа на 45 хиляди експонати, проследяващи живота в Източните Родопи от най-дълбока древност до началото на ХХ век. Експоцизията е отворена за посетители през 1987 г. и заема 1800 кв.м. площ на три етажа. Към сградата на музея има двор-парк с водни басейни на площ 15 декара. В парка са засадени 22 растителни видове, които са единствени в ареала на Южна България.</p>
  <p class=\"text-left\">Експоцизията на музея се състои от три раздела - Археология, Природа и Етнография. За всеки един от тях е отделен по един етаж с отделни тематични зали.</p><div class=\"col-md-12\">
  <div class=\"fb-share-button text-left\" data-layout=\"button\" data-size=\"large\" data-mobile-iframe=\"true\"><a class=\"fb-xfbml-parse-ignore\" target=\"_blank\" href=\"https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse\">Share</a></div>
  </div></blockquote>",
  2,
  "museum.jpg,museum1.jpg",
  "bg",
  CURRENT_TIMESTAMP(),
  CURRENT_TIMESTAMP()
),

(
5,
3,
"statue",
"41.671968",
"25.363943",
"<blockquote class=\"text-color\"><p class=\"text-left\"><strong>Location</strong> - at entrance of the town of Kardzhali</p>
<p class=\"text-left\"><strong>Description of site</strong> - At the very entrance of the town of Kardzhali, coming down from the towns of Haskovo and Plovdiv, majestic stands the statue of Orpheus - the ancient Greek mythical Thracian singer - the symbol of the Eastern Rhodope and the town of Kardzhali, and according to the myths and legends, he was born, raised and created art here. Before being placed at the entrance of the town of Kardzhali, the monument loomed large near the village of Panichkovo, but it was bent in the knees in an attempt of theft. At the same time, the idea comes to mind for the brass statue to be moved to a secured location. Not long after taking a short survey, Orpheus takes its place at the entrance of the town of Kardzhali. The unveiling of the statue was in June, 2005. The initiative to be restored and moved, after beeing demolished, at that location was one of Rotary Club-Kardzhali. Krum Damyanov is its sculptor. A special platform and stairs for easy access were built around the monument. The statue is being lit at night and is even more beautiful. The statue of Orpheus in Kardzhali greets and sends off the visitors of the town!</p><div class=\"col-md-12\">
<div class=\"fb-share-button text-left\" data-layout=\"button\" data-size=\"large\" data-mobile-iframe=\"true\"><a class=\"fb-xfbml-parse-ignore\" target=\"_blank\" href=\"https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse\">Share</a></div>
</div></blockquote>",
2,
"orfei.jpg,statue1.jpg,statue2.jpg",
"en",
CURRENT_TIMESTAMP(),
CURRENT_TIMESTAMP()
),

(
6,
3,
"statue",
"41.671968",
"25.363943",
"<blockquote class=\"text-color\"><p class=\"text-left\"><strong>Местоположение</strong> - на входа на град Кърджали</p>
<p class=\"text-left\"><strong>Описание на обекта</strong> - На самия вход на град Кърджали, на влизане от градовете Хасково и Пловдив достолепно се извисява паметника на Орфей, древногръцкия митичен тркийски певец, който е символа на Източните Родопи и град Кърджали, а според легендите и митовете той е роден тук, живял тук и творил тук. Преди да бъде поставен на входа на Кърджали, монументът се извисяваше край село Паничково, не бе пречупен през коленете при опит за кражба. Тогава се ражда идеята месинговата статуя да бъде преместена на защитено място. И така след кратко проучване Орфей заема своето място на входа на град Кърджали. Откриването на статуята е през месец юни 2005 година. Възстановен и преместен на това място по инициатива на Ротари Клуб Кърджали, след като беше разрушен. Нейн скулптор е Крум Дамянов. Около паметника има специално изградена площадка и стълбички за по-лесен достъп до него. През нощта паметникът на Орфей в Кърджали посреща и изпраща гостите на града! </p><div class=\"col-md-12\">
  <div class=\"fb-share-button text-left\" data-layout=\"button\" data-size=\"large\" data-mobile-iframe=\"true\"><a class=\"fb-xfbml-parse-ignore\" target=\"_blank\" href=\"https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse\">Share</a></div>
</div></blockquote>",
2,
"orfei.jpg,statue1.jpg,statue2.jpg",
"bg",
CURRENT_TIMESTAMP(),
CURRENT_TIMESTAMP()
),

(
7,
4,
"devil_bridge",
"41.620515",
"25.114197",
"<blockquote class=\"text-color\"><p class=\"text-left\"><strong>Name of site</strong> - the Devils Bridge over the Arda River, a monument of national importance.</p>
<p class=\"text-left\"><strong>Access to site</strong> - there is a forest road that leads to Devils Bridge. It is well-maintained amn accessible by car.</p>
<p class=\"text-left\"><strong>Description of site</strong> - There used to be a Roman bridge at its present location, which was part of the famous ancient road \"Via Ignatia\" connecting the Aegean Sea and Thrace via Makaza Pass. The bridge was known as \"Sheitan kiupra\" (Devils bridge in Turkish).</p>
<p class=\"text-left\">The Devils Bridge is a landmark for the small Rhodope town. Residents of Ardino have patented it as an amblem of the settlement.</p><div class=\"col-md-12\">
  <div class=\"fb-share-button text-left\" data-layout=\"button\" data-size=\"large\" data-mobile-iframe=\"true\"><a class=\"fb-xfbml-parse-ignore\" target=\"_blank\" href=\"https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse\">Share</a></div>
  </div></blockquote>",
2,
"bridge.jpg,bridge1.jpg",
"en",
CURRENT_TIMESTAMP(),
CURRENT_TIMESTAMP()
),

(
8,
4,
"devil_bridge",
"41.620515",
"25.114197",
"<blockquote class=\"text-color\"><p class=\"text-left\"><strong>Наименование на обекта</strong> - Дяволски мост над р.Арда, архитектурен паметник с местно значение.</p>
<p class=\"text-left\"><strong>Достъп до обекта</strong> - до Дяволския мост води горски път, който е добре поддържан и достъпен за автомобили</p>
<p class=\"text-left\"><strong>Описание на обекта</strong> - Трисводестият мост край с.Дядовци, известен като Дяволският мост е един от най-забулените с мистика паметници от Източните Родопи. През него е минавал използвания още в праисторията път, свързващ Тракийската низинаа с Беломорието, през Алада, Устра и прохода Маказа. Този вътрешно родопски път през античността е правел връзка с главния римски път Via Egnatia, като продължава да бъде интензивно използван и през средновековието за търговски и военни нужди</p>
<p class=\"text-left\">Дяволският мост е знаков за малкото родопско градче. Жителите на гр.Ардино са го патентовали като герб на населеното място.</p><div class=\"col-md-12\">
<div class=\"fb-share-button text-left\" data-layout=\"button\" data-size=\"large\" data-mobile-iframe=\"true\"><a class=\"fb-xfbml-parse-ignore\" target=\"_blank\" href=\"https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse\">Share</a></div>
</div></blockquote>",
2,
"bridge.jpg,bridge1.jpg",
"bg",
CURRENT_TIMESTAMP(),
CURRENT_TIMESTAMP()
),

(
9,
5,
"utroba_cave",
"41.704658",
"25.246796",
"<blockquote class=\"text-color\"><p class=\"text-left\"><strong>Location</strong> - it is situated in the rocky area of Tangradak Kaya, close to to Nenkovo village, 20 kilometres away from Kardzhali.</p>
<p class=\"text-left\"><strong>Accessibility of site</strong> - To reach the cave, a visitors should make a return from the road Kardzhali - Haskovo towards Padartsi and Dazhdovnitsa villages. Following a scenic
route along Kardzhali Dam, a kilometre after Borovitsa cotage, a gravel turn is reached. A signposted trail, inaccessible for vehicles, begins from there. The trail is wide but very steep. There are three big gazebos located along the it, several benches, as well as a shelter and fireplace beneath the summit.
Public transportation - There is a regular bus line from Kardzhali to Nenkovo village.</p>
<p class=\"text-left\"><strong>Description of site</strong> - It is artificial cave. The locals call this Tangradak Kaya (stone). The name itself comes from the impresive acoustic echo inside the cave. The entire cave is literally shaped like female genitalia and fully matches the description of womb - caves. The length of the cave is 22 metres. The first 16 metres of the cave are formed of natural carst. It is a natural split in the rocks. The last 6 metres were hollowed out and the shape adapted to become an anatomical female symbol. The height of the entrance is 3 metres and the width is 2,5 meters so there is enough light coming from the outside. At the north end of the cave, there is a man-made aftar which symbolizes the womb. Water drips from the cave and collects in a small pool at the base. The water never dries out. In the Thracian religion (Orphism), cult locations were always at the peak of a mountain housing a cave with drizzling water. Therefore, for the Thracians, this cave was a symbol of the womb, conception and rebirth.</p><div class=\"col-md-12\">
  <div class=\"fb-share-button text-left\" data-layout=\"button\" data-size=\"large\" data-mobile-iframe=\"true\"><a class=\"fb-xfbml-parse-ignore\" target=\"_blank\" href=\"https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse\">Share</a></div>
  </div>
</blockquote>",
1,
"utroba_cave.jpg,utroba_cave1.jpg,utroba_cave2.jpg",
"en",
CURRENT_TIMESTAMP(),
CURRENT_TIMESTAMP()
),

(
10,
5,
"utroba_cave",
"41.704658",
"25.246796",
" <blockquote class=\"text-color\">
<p class=\"text-left\"><strong>Местоположение</strong> - намира се в скалистата местност Тангардък кая до с.Ненково, на двадесетина километра от гр.Кърджали.</p>
<p class=\"text-left\"><strong>Достъпност до обекта</strong> - за да се стигне до пещера Утробата, трябва да се тръгне по стария панорамен път от Кърджали за Асеновград и Пловдив през
селата Енчец, Дъждовница и пъдарци към х.Боровица. На около километър след хижата, по пътя, който се извива над р.Боровица има малка отбивка, покрита с чакъл.
Там свършва възможността за превозни средства и започва маркирана екопътека. Началото й е отбелязано с табела. Самата пътека е широка макар, макар и малко стръмна
на места, но има три беседки, няколко пейки, а под самия връх - приятен заслон с камина. Има редовна автобусна линия от Кърджали до с.Ненково.</p>
<p class=\"text-left\"><strong>Описание на обекта</strong> - местните хора наричат мястото Тангардък кая (Кънтящият камък). Наименованието идва от впечатляващото звуково ехо - особено трептене вътре в
пещерата. Пещерата е образувана в обособен карстов скален масив недалеч от хребета на рида Илиница. Процесите на физическо и химическо изветряне са довели до
образуването на входна част - уширена тектонска цепнатина, в основата на която има няколко малки тераси.По-късно, по посоката на пукнатината е създадена изкуствена
галерия с дължина 12м и средна ширина 1,5м. В основата на скалата, по направление на цепнатината е изсечен силно наклонен коридор, водещ към входа на пещерата.На нивото на пода на пещерната галерия входният отвор е уширен в основата си и неговото вертикално сечение, гледано отвътре навън има формата на елипса. Дъното на пещерата е оформено своеобразно с изсичане на малка площадка и очевидно има олтарни функции. Ясно изразената ориентация на главната ос на пещерата по направление на главния меридиан(север-юг), както и свойството на входния отвор слънцето да се проектира максимално по дължината на галерията по пладне, дава основание да се търси астрономически
смисъл в геометричните размери, ориентация и морфология, изразени в основните й пространствени характеристики. С астрономическите ориентири са свързани най-значимите природни явления, от които зависи целия живот на човека, а следователно и всички определящи признаци на материалната и духовна култура на древното население.</p><div class=\"col-md-12\">
  <div class=\"fb-share-button text-left\" data-layout=\"button\" data-size=\"large\" data-mobile-iframe=\"true\"><a class=\"fb-xfbml-parse-ignore\" target=\"_blank\" href=\"https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse\">Share</a></div>
  </div></blockquote>",
1,
"utroba_cave.jpg,utroba_cave1.jpg,utroba_cave2.jpg",
"bg",
CURRENT_TIMESTAMP(),
CURRENT_TIMESTAMP()
),

(
11,
6,
"stone_mushrooms",
"41.785845",
"25.432241",
"<blockquote class=\"text-color\"><p class=\"text-left\"><strong>Name of site</strong> - Orlovi skali Thracian sanctuary is a cultural monument of national importance.</p>
<p class=\"text-left\"><strong>Access to site</strong> - It is located 2.1km south of Ardino. There is a marked trail to it. There is a gazebo and fountain with drinking water</p>
<p class=\"text-left\"><strong>Description of site</strong> - Orlovi skali Thracian sanctuary is located in Ardino. Orlovi skali is a group of prominent volcanic rocks. They are located on a very steepy mountainous terrain at an altitude of about 760m. They are located on a slope facing west. The height of the rocks reaches up to 25m above the surrounding terrain</p>
<p class=\"text-left\"> Trapezoidal niches were caved in some inaccessible parts of the rocks. Ninety-seven of them have been preserved. Fifty-five are located on the west side. Five of six of them have either been weathered or may not have been  completed at all. There are thirty-five on the south side and five on the north. On the east side, which is inaccessible, five or six have been weathered. No regularity has been complied with when they were arranged. The ancient stonecutter used any convenient location close to a single or group of holes in the soft volcanic rock. The shape of each one is trapezoidal while the sizes are quite different.</p>
<p class=\"text-left\">Despite the numerous suggestions regarding their use and date of origin, their secret message remains unrevealed. The ruins of an ancient Thracian fortress known as the Kaleto can be seen nearby (at the height before you reach the niches).</p><div class=\"col-md-12\">
  <div class=\"fb-share-button text-left\" data-layout=\"button\" data-size=\"large\" data-mobile-iframe=\"true\"><a class=\"fb-xfbml-parse-ignore\" target=\"_blank\" href=\"https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse\">Share</a></div>
  </div></blockquote>",
1,
"stone_mushrooms,stone_mushrooms1.jpg,stone_mushrooms2.jpg",
"en",
CURRENT_TIMESTAMP(),
CURRENT_TIMESTAMP()
),

(
12,
6,
"stone_mushrooms",
"41.785845",
"25.432241",
"<blockquote class=\"text-color\"> <p class=\"text-left\"><strong>Местоположение</strong> - с.Бели пласт, община Кърджали.</p>
<p class=\"text-left\"><strong>Достъпност до обекта</strong> - леснодостъпен, намира се край асфалтовия път за Хасково, малко след село Бели пласт. Ограден е и има указателни табели и информационно табло. Има редовна автобусна линия Кърджали - Хасково през с.Бели пласт.</p>
<p class=\"text-left\"><strong>Описание на обекта</strong> - Каменните гъби представляват хармонични скални късове с форма на естествени гъби, с розови пънчета и зеленикави гугли. Височината
на пънчетата и ширината на гуглите е до 2,5 м. Изваяни са в риолитови вулканни туфи. Туфите, от които са се оформили каменните гъби, също са резултат от интензивна подводна вулканична дейност, датираща от времето на пелиогена. След оттеглянето на морето и последователното издигане на морското дъно, върху тях започнало действието на ерозията. Долният, розов пласт се оказал по-мек и по-лесно се поддавал на действието на слънцето, вятъра и дъжда.</p><div class=\"col-md-12\">
  <div class=\"fb-share-button text-left\" data-layout=\"button\" data-size=\"large\" data-mobile-iframe=\"true\"><a class=\"fb-xfbml-parse-ignore\" target=\"_blank\" href=\"https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse\">Share</a></div>
  </div></blockquote>",
1,
"stone_mushrooms,stone_mushrooms1.jpg,stone_mushrooms2.jpg",
"bg",
CURRENT_TIMESTAMP(),
CURRENT_TIMESTAMP()
),

(
13,
7,
"eagle_rocks",
"41.620515",
"25.114197",
"<blockquote class=\"text-color\"><p class=\"text-left\"><strong>Name of site</strong> - Orlovi skali Thracian sanctuary is a cultural monument of national importance.</p>
<p class=\"text-left\"><strong>Access to site</strong> - It is located 2.1km south of Ardino. There is a marked trail to it. There is a gazebo and fountain with drinking water</p>
<p class=\"text-left\"><strong>Description of site</strong> - Orlovi skali Thracian sanctuary is located in Ardino. Orlovi skali is a group of prominent volcanic rocks. They are located on a very steepy mountainous terrain at an altitude of about 760m. They are located on a slope facing west. The height of the rocks reaches up to 25m above the surrounding terrain</p>
<p class=\"text-left\"> Trapezoidal niches were caved in some inaccessible parts of the rocks. Ninety-seven of them have been preserved. Fifty-five are located on the west side. Five of six of them have either been weathered or may not have been  completed at all. There are thirty-five on the south side and five on the north. On the east side, which is inaccessible, five or six have been weathered. No regularity has been complied with when they were arranged. The ancient stonecutter used any convenient location close to a single or group of holes in the soft volcanic rock. The shape of each one is trapezoidal while the sizes are quite different.</p>
<p class=\"text-left\">Despite the numerous suggestions regarding their use and date of origin, their secret message remains unrevealed. The ruins of an ancient Thracian fortress known as the Kaleto can be seen nearby (at the height before you reach the niches).</p><div class=\"col-md-12\">
  <div class=\"fb-share-button text-left\" data-layout=\"button\" data-size=\"large\" data-mobile-iframe=\"true\"><a class=\"fb-xfbml-parse-ignore\" target=\"_blank\" href=\"https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse\">Share</a></div>
  </div></blockquote>",
1,
"eagle_rocks,eagle_rocks1.jpg,eagle_rocks2.jpg",
"en",
CURRENT_TIMESTAMP(),
CURRENT_TIMESTAMP()
),

(
14,
7,
"eagle_rocks",
"41.620515",
"25.114197",
"<blockquote class=\"text-color\"> <p class=\"text-left\"><strong>Местоположение</strong> - с.Бели пласт, община Кърджали.</p>
<p class=\"text-left\"><strong>Достъпност до обекта</strong> - леснодостъпен, намира се край асфалтовия път за Хасково, малко след село Бели пласт. Ограден е и има указателни табели и информационно табло. Има редовна автобусна линия Кърджали - Хасково през с.Бели пласт.</p>
<p class=\"text-left\"><strong>Описание на обекта</strong> - Каменните гъби представляват хармонични скални късове с форма на естествени гъби, с розови пънчета и зеленикави гугли. Височината
на пънчетата и ширината на гуглите е до 2,5 м. Изваяни са в риолитови вулканни туфи. Туфите, от които са се оформили каменните гъби, също са резултат от интензивна подводна вулканична дейност, датираща от времето на пелиогена. След оттеглянето на морето и последователното издигане на морското дъно, върху тях започнало действието на ерозията. Долният, розов пласт се оказал по-мек и по-лесно се поддавал на действието на слънцето, вятъра и дъжда.</p><div class=\"col-md-12\">
  <div class=\"fb-share-button text-left\" data-layout=\"button\" data-size=\"large\" data-mobile-iframe=\"true\"><a class=\"fb-xfbml-parse-ignore\" target=\"_blank\" href=\"https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse\">Share</a></div>
  </div></blockquote>",
1,
"eagle_rocks,eagle_rocks1.jpg,eagle_rocks2.jpg",
"bg",
CURRENT_TIMESTAMP(),
CURRENT_TIMESTAMP()
),

(
15,
8,
"swan_village",
"41.466233",
"25.199645",
"<blockquote class=\"text-color\"><p class=\"text-left\"><strong>Name of site</strong> - lakes by Lebed village, a natural landmark.</p>
<p class=\"text-left\"><strong>Location</strong> - Lebed village, Dzhebel Municipality.</p>
<p class=\"text-left\"><strong>Description of site</strong> - Many years ago, as a result of earth upheavals, two natural lakes were formed. Wild lilies thrive in them.The places is extraodinarily beautiful. It is near a pine forest, and about 500m away from it is approach to Ustra medieval fortress</p><div class=\"col-md-12\">
  <div class=\"fb-share-button text-left\" data-layout=\"button\" data-size=\"large\" data-mobile-iframe=\"true\"><a class=\"fb-xfbml-parse-ignore\" target=\"_blank\" href=\"https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse\">Share</a></div>
  </div>
</blockquote>",
1,
"swan_village,swan_village1.jpg",
"en",
CURRENT_TIMESTAMP(),
CURRENT_TIMESTAMP()
),

(
16,
8,
"swan_village",
"41.466233",
"25.199645",
"<blockquote class=\"text-color\"><p class=\"text-left\"><strong>Наименование на обекта</strong> - езерата край с.Лебед, природна забележителност.</p>
<p class=\"text-left\"><strong>Местоположение</strong> - с.Лебед, общ.Джебел.</p>
<p class=\"text-left\"><strong>Описание на обекта</strong> - в района на с.Лебед преди много години в резултат на разместване на земните пластове са се формирали две естествени тектонски езера с растящи в тях естествени колонии диви лилии. Мястото е красиво, в близост има борова гора, а на около 500м е подходът към средновековната крепост Устра.</p><div class=\"col-md-12\">
  <div class=\"fb-share-button text-left\" data-layout=\"button\" data-size=\"large\" data-mobile-iframe=\"true\"><a class=\"fb-xfbml-parse-ignore\" target=\"_blank\" href=\"https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse\">Share</a></div>
  </div><blockquote>",
1,
"swan_village,swan_village1.jpg",
"bg",
CURRENT_TIMESTAMP(),
CURRENT_TIMESTAMP()
),

(
17,
9,
"forest",
"41.567355",
"25.537411",
"<blockquote class=\"text-color\"><p class=\"text-left\"><strong>Name of site</strong> - The Petrified Forest, declared a protected landmark.</p>
<p class=\"text-left\"><strong>Location</strong> - near the village of Raven, in a valley called by locals \"Gabaz Dere\".</p>
<p class=\"text-left\"><strong>Description of site</strong> - The Petrified Forest is a unique natural phenomen consisting of about 20 trees that were petrified about 30 milion years ago. It occupies an area of 7,5 hectares. Milions of years ago there must have been an ancient forest of the Tertiary time, located close to the seashore. When volcanic activity started, the forest was buried and burned by the hot lava. The high temperatures carbonized whole trees or parts of them. During the later stages of volcanic activity through these skeletons flowed waters carrying flint substance and filled the cavities thus forming fossilized trees. There are fallen, buried or broken petrified trees around the world but what is unique about the Petrified Forest near the village of Raven is that the trees are standing.</p><div class=\"col-md-12\">
  <div class=\"fb-share-button text-left\" data-layout=\"button\" data-size=\"large\" data-mobile-iframe=\"true\"><a class=\"fb-xfbml-parse-ignore\" target=\"_blank\" href=\"https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse\">Share</a></div>
  </div></blockquote>",
1,
"main3,main2.jpg",
"en",
CURRENT_TIMESTAMP(),
CURRENT_TIMESTAMP()
),

(
18,
9,
"forest",
"41.567355",
"25.537411",
"<blockquote class=\"text-color\"><p class=\"text-left\"><strong>Наименование на обекта</strong> - Вкаменената гора, обявен за е за защитен обект в категория \"природна забележителност\".</p>
<p class=\"text-left\"><strong>Местоположение</strong> - близо до с.Равен, в дол, наричан от местните хора \"Габъз дере\".</p>
<p class=\"text-left\"><strong>Достъп до обекта</strong> - общинска пътна мрежа и туристическа пътека.</p>
<p class=\"text-left\"><strong>Описание на обекта</strong> - Вкаменената гора представлява уникален природен феномен с вкаменили се около 20 дървета преди 30 милиона години. Заема площ от 7,5 хектара. Най-вероятно преди милиони години тук е имало древна гора от времето на терциера, разположена на крайбрежието на море. При започнала силна вулканична дейност гората е била засипана и изгорена от горещата лава. Високата температура е овъглила цели дървета или части от тях. По време на по-късните етапи на вулканична дейност през тези скелети са протичали води, носещи със себе си кремъчно вещество и са запълнили кухините. Така са се образували вкаменените дървета. В световен мащаб са известни случаи на повалени, погребани и съхранени от вулканични материали дървета. Уникалното в гората край с.Равен е, че дърветата са прави.</p><div class=\"col-md-12\">
  <div class=\"fb-share-button text-left\" data-layout=\"button\" data-size=\"large\" data-mobile-iframe=\"true\"><a class=\"fb-xfbml-parse-ignore\" target=\"_blank\" href=\"https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse\">Share</a></div>
  </div></blockquote>",
1,
"main3,main2.jpg",
"bg",
CURRENT_TIMESTAMP(),
CURRENT_TIMESTAMP()
),

(
19,
10,
"perperikon",
"41.715404",
"25.465534",
"<blockquote class=\"text-color\"><p class=\"text-left\">Monument of national importance</p>
<p class=\"text-left\"><strong>Location</strong> - It is located 15 km northeast of Kardzhali, next to \"Gorna Krepost\" village (Upper Fortress).</p>
<p class=\"text-left\"><strong>Access to site</strong> - Visitors may reach it by car from the Stremtsi village (north of Kardzhali) or from Shiroko Pole (east of Kardzhali). There is a markec hiking trail from Bolyartsi village that leads directly to the Tower of Perperikon.</p>
<p class=\"text-left\"><strong>Description of site</strong> - Perperikon is located on a high peak in an area known locally as Gin Tepesi (The Mountain of the Spirits). Dating from the time of the Roman Empire, archaeolosts have uncovered a giant multi-story palace and an imposing fortress built around the hill, with walls as thick as 2.8 m. Temples and quarters of residential buildings were also constructed in the fortress. The mgalithic complex had been laid in ruins and rearected many times in history.</p>
<p class=\"text-left\">The earliest traces of human activity are from the late Stone-Copper Age (Chalcolithic) at the end of the fourth century BC, when people began to worship and bring gifts to the Rock (so-called megalithic culture). Some of the unique items that have been found, such as fregments of cult tables, were made of clay. Parts of idols, a and bowl in the form of a partidge, were also among the finds. Apparently, hallucinatory drugs for the priests were stored in bowls such as this. From the Chalcolithic period, there are several great knives formed out of flint, one of which is 20 cm long. Experts say this material can only be found in modern northeastern  Bulgaria, where it was introduced as an expensive commodity. It may have been exchanged for gold nuggest, in which the Eastern Rhodopes are rich.</p>
<p class=\"text-left\">The development of the rock complex continued during the Bronze and Iron Age. There is solid evidence it was during the Lat Bronze Age(16th - 11th century BC) when Perperikon experiencesd its first big boom. This is the era of the Crete-Mycenaean civilization</p>
<div class=\"col-md-12\">
  <div class=\"fb-share-button text-left\" data-layout=\"button\" data-size=\"large\" data-mobile-iframe=\"true\"><a class=\"fb-xfbml-parse-ignore\" target=\"_blank\" href=\"https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse\">Share</a></div>
  </div></blockquote>",
3,
"perperikon,perperikon1.jpg",
"en",
CURRENT_TIMESTAMP(),
CURRENT_TIMESTAMP()
),

(
20,
10,
"perperikon",
"41.715404",
"25.465534",
"<blockquote class=\"text-color\"><p class=\"text-left\">Паметник на културата с национално значение</p>
<p class=\"text-left\"><strong>Местоположение</strong> - разположен е на 25 км. североизточно от гр.Кърджали до с.Горна крепост</p>
<p class=\"text-left\"><strong>Достъп до обекта</strong> - до Перперикон може да достигнете с автомобил по пътя откъм с.Стремци (северно от гр.Кърджали) или по пътя откъм с.Широко поле (източно от гр.Кърджали) по асфалтов път. Маркиране туристическа пътека тръгва от с.Болярци и излиза директно горе на кулата на Перперикон. Редовна автобусна линия до близките села</p>
<p class=\"text-left\"><strong>Описание на обекта</strong> - Перперикон е разположен на доминиращ връх в местност, известна сред местното население като Джин Тепеси (Планината на духовете).</p>
<p class=\"text-left\">Най-ранните следи от човешка дейност са от късната каменно-медна епоха (халколит/енеолит) в кр. на V - наю. на IV хил. пр. Хр. , когато хората започват да почитат и поднасят дарове на Скалата. Открити са уникални предмети като фрагменти от култови масички, части от идоли, съдче във вид на яребица, където според известните аналогии са били съхранявани опиати, употребявани от жреците за изпадане в транс. От халколита са няколко великолепни ножа от жълт отсечен кремък, като един от тях е дълъг 20см. Според специалистите тази суровина се намира единствено в днешна Североизточна България, откъдето е внесена като скъпа стока. Може би е била разменена за самородно злато, с което Източните Родопи са богати.</p>
<p class=\"text-left\">Развитието на скалния комплекс продължава и през бронзовата и желязна епоха. Единствена по рода си е колекцията от 15 триъгълни култови стрелички от полускъпоценен камък със съвсем малки размери датиращи от ранната бронзова епоха. Със сигурност може да се твърди, че в късната бронзова епоха 18-12 в. пр. Хр., Перперикон преживява първия си голям разцвет. Това е епохата на крито-микенската цивилизация.</p><div class=\"col-md-12\">
  <div class=\"fb-share-button text-left\" data-layout=\"button\" data-size=\"large\" data-mobile-iframe=\"true\"><a class=\"fb-xfbml-parse-ignore\" target=\"_blank\" href=\"https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse\">Share</a></div>
  </div></blockquote>",
3,
"perperikon,perperikon1.jpg",
"bg",
CURRENT_TIMESTAMP(),
CURRENT_TIMESTAMP()
),

(
21,
11,
"ustra",
"41.470134",
"25.225489",
"<blockquote class=\"text-color\"><p class=\"text-left\"><strong>Name of site</strong> - Ustra Medieval Fortress, an archeological monument of national importance.</p>
<p class=\"text-left\"><strong>Location</strong> - village of Ustren, Dzhebel Municipality. It is located about 5 km notheast of Ustren and 3 km southeast of Lebed village.</p>
<p class=\"text-left\"><strong>Access to site</strong> - There is natural forest road that leads to it. There are two ways to reach the fortress. One is to follow the sign at the turnoff before Ustren village. The other is to follow a path around 1 km before Lebed village. This path passes nearby the mouflons breeding ranch. <strong>Note: </strong> The road from Lebed village is easier to climb but it is harder to find the fortress this way. Local people can always help. The other approach is from Ustren village. It is signposted.</p>
<p class=\"text-left\"><strong>Description of site</strong> - the fortress is situated on a high, elongated ridge of the same name. The peak is 1015 m high. The area is 1.2 acres. The fortress wall is 113 meters long and has a U-shape. At ground level the wall is 2.8m wide and the top it is 1.75 meters. Some places are preserved to a height of 8 meters. The fortress had three defensive towers - one semi-circular and two rectangular with three floors each. The first floors were underground and were used for water storages. They were coated with stucco, obtained by mixing mortar with crushed bricks and large pieces of pottery. The towers had internal staircases, only some of which have been preserved. The entrance was from the east. Door opened vertically</p>
<div class=\"col-md-12\">
  <div class=\"fb-share-button text-left\" data-layout=\"button\" data-size=\"large\" data-mobile-iframe=\"true\"><a class=\"fb-xfbml-parse-ignore\" target=\"_blank\" href=\"https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse\">Share</a></div>
  </div></blockquote>",
3,
"ustra.jpg,ustra1.jpg,ustra2.jpg",
"en",
CURRENT_TIMESTAMP(),
CURRENT_TIMESTAMP()
),

(
22,
11,
"ustra",
"41.470134",
"25.225489",
"<blockquote class=\"text-color\"><p class=\"text-left\"><strong>Наименование на обекта</strong> - Средновековна крепост Устра, археологически паметник с национално значение.</p>
<p class=\"text-left\"><strong>Местоположение</strong> - землището на с.Устрен, община Джебел. Намира се на около 5 км. североизточно от с.Устрен и на 3 км. югоизточно от с.Лебед.</p>
<p class=\"text-left\"><strong>Достъп до обекта</strong> - естествен горски път. Към крепостта може да се подходи както по маркирана с табела отбивка, малко преди с.Устрен, така и по пътека на около 1 км. преди село Лебед, минаващ покрай оградата на развъдника за мулфони. Заб.: Пътят край с.Лебед е по-лесен за изкачване, мо по труден за откриване на подхода. Местните хора го знаят добре. Другият път е преди с.Устрен - има ясна табела.</p>
<p class=\"text-left\"><strong>Описание на обекта</strong> - крепостта е разположена на висок, прогълговат рид, носещ същото име. Върхът е висок 1114 м. и доминира над околния терен. Устра е една от най-високо разположените крепости в Източните Родопи и е една от най-добре запазените крепости в България. Със своето местоположение е контролирала пътя по долината на р.Върбица, свързащ западната част на планината с пътя по долината на р.Арда от Адрианопол (дн. Одрин) към Филипопол (дн. Пловдив). Крепостта е играла важна роля в историята на област Ахридос (Изт. Родопи). Площта й е 1.2 дка, от която северната и северозападната част са заети от отвесни скали. Крепостната стена е дълга 113 м. и има П-образна форма.</p>
<p class=\"text-left\">В основата дебелина е 2.8м, а в горния край - 1.75м. На места е запазена до височина 8.0м. Крепостта е имала 3 отбранителни кули - една полукръгла и две правоъгълни, които са били триетажни. Първите етажи са били подземни и са служили за водохранилища. Били са измазани с хоросанова мазилка, получена от смесването на хоросан със счукани тухли и едри късове от керамика. Кулите са имали стълбища, като част от тях са запазени и до днес. Входът е бил от източната част. Вратата се отваряла вертикално.</p><div class=\"col-md-12\">
  <div class=\"fb-share-button text-left\" data-layout=\"button\" data-size=\"large\" data-mobile-iframe=\"true\"><a class=\"fb-xfbml-parse-ignore\" target=\"_blank\" href=\"https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse\">Share</a></div>
  </div>
  </blockquote>",
3,
"ustra.jpg,ustra1.jpg,ustra2.jpg",
"bg",
CURRENT_TIMESTAMP(),
CURRENT_TIMESTAMP()

);';

    $db->query($insertIgnore);
    echo "Kardzhali dam seeeded!";
  }

  public function query($sql) {
    return $this->_db->query($sql);
}

}
