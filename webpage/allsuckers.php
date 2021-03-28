<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Buy Your Way to a Better Education!</title>
    <link href="buyagrade.css" type="text/css" rel="stylesheet"/>
</head>

<body>
<h1>Thanks, sucker!</h1>

<p>Your information has been recorded.</p>

<dl>
    <dt>Name</dt>
    <dd><?= $student ?></dd>

    <dt>Section</dt>
    <dd><?= $course ?></dd>

    <dt>Credit Card</dt>
    <dd><?= $card ?> (<?= $cardType ?>)</dd>
</dl>
Here are all suckers who have submitted:
<pre>
    <?= $allSuckers ?>
</pre>

</body>
</html>