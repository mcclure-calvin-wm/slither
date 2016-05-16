<?php
require("Connector.php");
if(empty($_SESSION["gameName"]) or empty($_SESSION["gameId"])){
    header("Location: Index.php");
}
?>

<html>
<head>
    <title><?php echo "Enjoy playing " . $_SESSION["gameName"] ?></title>
    <?php require_once ('links.php') ?>
    <?php
    $statement = $dbh->prepare("SELECT * FROM games WHERE id=:id");
    $statement->execute(array(
        "id" => $_SESSION["gameId"]
    ));
    $results = $stmt->fetchAll();
    if(count($results) == 1){
        foreach($results as $item) {
            echo $item["games"];
        }
        $_SESSION["gameId"] = null;
        $_SESSION["gameName"] = null;
    }else{
        //header("Index.php");
        echo "PPRROOBBLEMS!!!! FAILED";
    }

    ?>
    <link rel="stylesheet" type="text/css" href="sidebar.css">
    <style>
        body {
            background-color: #d9d9d9;
        }
    </style>
</head>
<body>
<?php require_once ('nav.php')?>
<?php require_once ('sidebar.php') ?>

<center>
    <div>
        <table xmlns="http://www.w3.org/1999/xhtml" cellspacing="0" class="sites-layout-name-one-column sites-layout-hbox"><tbody><tr><td class="sites-layout-tile sites-tile-name-content-1"><div dir="ltr"><div class="sites-embed-align-center-wrapping-off"><div class="sites-embed-border-off sites-embed" style="width:800px;"><div class="sites-embed-content sites-embed-type-ggs-gadget"><iframe title="Flash Wrapper" width="800" height="620" scrolling="no" frameborder="0" id="1294406634" name="1294406634" allowtransparency="true" class="igm" src="//e4oeqmdouedn14rnfg98pjni585t8rkq-a-sites-opensocial.googleusercontent.com/gadgets/ifr?url=http://mori79.googlecode.com/svn/trunk/flash-wrapper.xml&amp;container=enterprise&amp;view=default&amp;lang=en&amp;country=ALL&amp;sanitize=0&amp;v=bcb178c0eee213f5&amp;libs=core&amp;mid=144&amp;parent=https://sites.google.com/site/punblockedgames/bloons-tower-defense-5#up_mode=window&amp;up_flashvars&amp;up_bg&amp;up_url=https://c0bd3696-a-62cb3a1a-s-sites.googlegroups.com/site/punblockedgamesstoragevault2/%25C2%25AB%2520Bloons%2520Tower%2520Defense%25205%2520%2528BTD5%2529%2520%25C2%25BB%2520-%2520Play%2520on%2520Spiked%2520Math%2520Games.swf?attachauth%3DANoY7crTElSGu0B7QyhV2LE51v-G7b1j8PFxP_8Tf_v_o2sdVjzYB1ja6Wgvvn24N1jzh3DidVFt9uGQ3WISdCOHJ5e_VpQj7wGvLPTfhSb_PgFP7Teq4a2cNif1oV6oT13Z9plZQIUKfvuRk_plhtGFYK2D57XHCnYkJtYq9DVo00ojHBBFHGDgD5SWmTQN9ipaJnjwOa5fp-8XlqV-YtweFeyZPtmhsw9Xw1HjGC-nHHWeHeHCEaO8S8AnDsdbEmyMYGSYe5DtYDRq-ofIX8yztRq-8mvXeZ0kgoiRZWVZ_ed3dD9jUw2CZnQgZWuC6une0r05MInm%26attredirects%3D0&amp;up_base&amp;st=e%3DAIHE3cAQIA4H1HM5UxvQa5uR46Q6sLziYqOVxY4HmIXD9TAa1HhX7C5AEL3zOKn2wKwuko7Zw3Uqbopgxhz3u6gQhiNs%252FRFrOncoVI6mamomB0QHSTPGAw8VAON0MPOc0Cv3baIPY%252FvC%26c%3Denterprise&amp;rpctoken=8013576170547016255"></iframe></div></div></div><div><div style="text-align:center"><img border="0" height="200" src="https://sites.google.com/site/punblockedgames/_/rsrc/1419521129328/ratingE.png?attachauth=ANoY7cpM9KDi8jIdHUMA6cONdOVVplDpdPDqv3o28K4QT6Wzi0APFYPbOu6PFJ4cvindh22xbkFnPGzxxH5UxgpSDWpH1UB3TFBbj4qchTRXlE3WIIIFHey4w0kQkb10gb-T7DyV1tJHdogUIYFhBLbmVfG_klpwgkpOCvLDbF2gnaZ3Bn_62EAIuhFaH72b95riuzNvvhRyMBid4dFj6S6ogt8ooSuFtw%3D%3D&amp;attredirects=0&amp;height=200&amp;width=135" style="line-height:16.6666660308838px;display:block;margin-right:auto;margin-left:auto" width="135" /></div><div style="text-align:center"><div class="sites-embed-align-center-wrapping-off"><div class="sites-embed-border-off sites-embed sites-embed-full-width" style="width:100%;"><div class="sites-embed-content sites-embed-type-ggs-gadget"><iframe title="gCodeAdSense" width="100%" height="200" scrolling="no" frameborder="0" id="1471611305" name="1471611305" allowtransparency="true" class="igm" src="//r2eh910spi4blvgltedsa0sh731h88cm-a-sites-opensocial.googleusercontent.com/gadgets/ifr?url=https://gcodeadsense.googlecode.com/svn/release/gCodeAdSense/gCodeAdSense.xml&amp;container=enterprise&amp;view=default&amp;lang=en&amp;country=ALL&amp;sanitize=0&amp;v=7d84246fe46be2b8&amp;libs=core&amp;mid=212&amp;parent=https://sites.google.com/site/punblockedgames/bloons-tower-defense-5#up_ad_client=1121794332086775&amp;up_ad_width=728&amp;up_ad_project&amp;up_ad_slot=1023090840&amp;up_ad_keywords&amp;up_ad_height=90&amp;st=e%3DAIHE3cDfU%252BywCFa3Lq2BgjmTr3BFg8ET0lL4IX3ps5fvAs8iaNKqTmA%252BJdoBxGKrVU756mCn4n7bfHx4IwG1eK2qQ2MWxQfzYmBnOHiCf2u3viRN9qThC33H7guPPcezyczGO4lAIKZc%26c%3Denterprise&amp;rpctoken=3868475380643265880"></iframe></div></div></div></div><div><br /></div><br /></div></div></td></tr></tbody></table>
    </div>
</center>
</body>
</html>