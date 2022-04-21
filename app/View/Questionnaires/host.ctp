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
  <h2 style="text-align: center;"><?php echo "あなたにはhostのようなメイクがおすすめです！"; ?></h2>
  <div>
    <canvas id="myChart"></canvas>
  </div>
</div>
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
<br>
<br>