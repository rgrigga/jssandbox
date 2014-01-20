<h1>JSSANDBOX</h1>
<?php
echo "Hello world";

/**
 * le function dos returne foo
 * @param  string $bar
 * @return string
 */

function foo($bar="baz"){
	echo $bar;
	/**
	 * Foo
	 * 	bar
	 * 	bar
	 * 		baz
	 * 		foobar
	 */
	$bar.="BAM!";

	return $bar;
}