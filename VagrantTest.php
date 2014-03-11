<?php
/**
 * Created by PhpStorm.
 * User: Moritz
 * Date: 11.03.14
 * Time: 16:35
 */
include dirname(__FILE__).'/StanfordNLP/Base.php';
include dirname(__FILE__).'/StanfordNLP/Parser.php';
$start = microtime( true );
$parser = new \StanfordNLP\Parser(
	'/vagrant/stanford-parser-full-2014-01-04/stanford-parser.jar'
);
echo 'load in '.(microtime(true)-$start)*1000 ."s\n";
$start = microtime( true );
$result = $parser->parseSentence("What does the fox say?");
echo 'processed in '.(microtime(true)-$start)*1000 ."s\n";
$result = $parser->parseSentence("What does the fox say?");
echo 'processed in '.(microtime(true)-$start)*1000 ."s\n";
var_dump($result);