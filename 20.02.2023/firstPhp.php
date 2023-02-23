If you want your file to be interpreted as php then your file must start and end with <?php and ?> and everything outside of that is ignored by the php parser.

<?php 
php code..//parsed 
php code..//parsed
?>
hellow..//normal test but ignred by php parser

Three types of tag are available in php
1.normal tag(<?php ?>)
2.short echo tag(<?= ?>)
3.short tag(<? ?>)

short tag are bydefault available but can be disabled by short_open_tag = Off and also disabled bydefault if php will  built with --disabe--short--tags()

As short tag can be disabled so only use the normal and short echo tag.

If your file only have php code then  do not use closing tag.
<?php
//php code;
//php code;
//php code;

 but if you are embedding php with html then enclose php code with opening and closing tag.
<html>
<head>
</head>
<body>
<?php 
//php code;
//php code;
//php code;

?>
</body>
</html>

If you want to just print single text or something ,you should use shorthand version .<?= $var ?>

But if you want to process something, you should use normal tag.
<?php 
        //$var = 3;
        //$var2 = 2;
        //$var3 = $var+$var2;
        //if($var3){//result}

?>

// If you embedded php with html and single line, do not need to use semicolon
?>