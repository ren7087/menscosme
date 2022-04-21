<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="img/ico/favicon.ico">

    <title>Cosme</title>

    <?php echo $this->Html->css('bootstrap.min.css'); ?>
    <?php echo $this->Html->css('animate.css'); ?>
    <?php echo $this->Html->css('plugins.css'); ?>
    <?php echo $this->Html->css('style.css'); ?>
    <?php echo $this->Html->css('pe-icons.css'); ?>
    <?php echo $this->Html->css('questionnaire.css'); ?>

</head>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.1.4/Chart.min.js"></script>
<br>
<br>
<br>
<br>
<br>
<div class="container">
  <h2 style="text-align: center;"><?php echo "あなたにはジェンダーレスメイクがおすすめです！"; ?></h2>
  <div>
    <canvas id="myChart"></canvas>
  </div>
</div>
<?php 
    $finger = $questionnaire['Questionnaire']['finger']; 
    $kpop = $questionnaire['Questionnaire']['kpop'];
    $costume = $questionnaire['Questionnaire']['costume'];
    $entertainer = $questionnaire['Questionnaire']['entertainer'];
    $make = $questionnaire['Questionnaire']['make'];
    $cloth = $questionnaire['Questionnaire']['cloth'];
    $hair = $questionnaire['Questionnaire']['hair'];


            $kpopPoint = 0;
            $genderlessPoint = 0;
            $visualPoint = 0;
            $hostPoint = 0;
            $coolPoint = 0;

            if ($finger == "value1") {
                $genderlessPoint += 5;
            } else {
                $coolPoint += 2;
            }

            if ($kpop == "value1") {
                $kpopPoint += 6;
            } elseif ($kpop == "value2") {
                $kpopPoint += 2;
            } else {
                $kpopPoint += 0;   //マイナスにしてもいいかも
            }

            if ($costume == "value1") {
                $visualPoint += 5;
                $hostPoint += 5;
            }elseif ($costume == "value2") {
                $visualPoint += 2;
                $hostPoint += 2;
            } else {
                $visualPoint += 0;
                $hostPoint += 0;
            }

            if ($entertainer == "value1") {
                $kpopPoint += 5;
            } elseif ($entertainer == "value2") {
                $genderlessPoint += 5;
                $coolPoint += 2;
            } elseif ($entertainer == "value3") {
                $genderlessPoint += 5;
                $hostPoint += 5;
            } else {
                $coolPoint += 5;
            }
    
            if ($make == "value1") {
                $genderlessPoint += 5;
                $hostPoint += 5;
            } elseif ($make == "value2") {
                $coolPoint += 5;
            } else {
                $visualPoint += 5;
                $hostPoint += 5;
            }

            if ($cloth == "value1") {
                $visualPoint += 5;
                $hostPoint += 5;
                $genderlessPoint += 2;
            } elseif ($cloth == "value2") {
                $visualPoint += 2;
                $hostPoint += 2;
                $kpopPoint += 2;
                $genderlessPoint += 2;
            } else {
                $coolPoint += 1;
            }

            if ($hair == "value1") {
                $kpopPoint += 2;
                $hostPoint += 5;
            } elseif ($hair == "value2") {
                $kpopPoint += 5;
                $genderlessPoint += 3;
                $coolPoint += 2;
            } else {
                $coolPoint += 5;
            }
?>

<script>
    var ctx = document.getElementById("myChart");
    const host = '<?=$hostPoint?>';
    const kpop = '<?=$kpopPoint?>';
    const visual = '<?=$visualPoint?>';
    const genderless = '<?=$genderlessPoint?>';
    const cool = '<?=$coolPoint?>';
    const midasinami = '<?=$midasinamiPoint?>';
    var myChart = new Chart(ctx, {
    type: 'radar',
    data: {
        labels: ["ホスト", "韓国アイドル", "バンドマン", "ジェンダーレス", "爽やかさ", "清潔感"],
        datasets: [{
        label: 'oranges',
        backgroundColor: "rgba(255,153,0,0.4)",
        borderColor: "rgba(255,153,0,1)",
        data: [host, kpop, visual, genderless, cool, midasinami]
        }]
    }
    });
</script>
<br><div style="text-align: center;">
<h3>主に行うメイクステップは？</h3>
    <h4>
    <li>
        ベースメイク
    </li>
    </h4>
    <p>リキッドファンデやクッションファンデで隙のない美肌にする</p>
    <h4>
    <li>
        アイメイク
    </li>
    </h4>
    <p>アイラインやアイシャドウでつぶらな瞳に仕上げる</p>
    <h4>
    <li>
        ハイライト＆チーク
    </li>
    </h4>
    <p>チークは丸めに、CラインにハイライトをON</p>
    <h4>
    <li>
        眉メイク
    </li>
    </h4>
    <p>平行で下降気味に淡く描く</p>
    <h4>
    <li>
        リップメイク
    </li>
    </h4>
    <p>グロスやプランパーを使って唇をぷっくり見せるのがGood！</p>
</div>
<br><div style="text-align: center;">
<h3>おすすめアイテム</h3>
    <h4>
    <li>
        RMK リクイドファンデーション
    </li>
    </h4>
    <?php echo $this->Html->image("genderless/fande.jpg", array("width"=>"200px", "height"=>"200px")); ?>
    <h4>
    <li>
        エクセル スキニーリッチシャドウ SR06 センシュアルブラウン
    </li>
    </h4>
    <?php echo $this->Html->image("genderless/eye.jpg", array("width"=>"200px", "height"=>"200px")); ?>
    <h4>
    <li>
        キャンメイク(CANMAKE) カラーチェンジアイブロウ
    </li>
    </h4>
    <?php echo $this->Html->image("genderless/brow.png", array("width"=>"200px", "height"=>"200px")); ?>
    <h4>
    <li>
        キャンメイク(CANMAKE) ステイオンバームルージュ
    </li>
    </h4>
    <?php echo $this->Html->image("genderless/lip.png", array("width"=>"200px", "height"=>"200px")); ?>
</div>
<br>
<br>