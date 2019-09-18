<?php
print("vul een getal in");
$getal = readline(":");
if (($getal % 2 )==1) {
	print("het getal is oneven");
}
if (($getal % 2)==0) {
	print("het getal is even");
}