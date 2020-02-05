<?php
require '../functions.php';

use PHPUnit\Framework\TestCase;

class FunctionTests extends TestCase
{
    //testing success of function taking array and looping through array returned from db
    public function testSuccessDisplayAllCheeses()
    {
        $expected = " <div class='collectionItem'><div class='image'><img src='images/stilton.jpeg'/></div><h3> <span> Name: </span>Stilton</h3> <ul> <li><span> Country of origin: </span>England</li> <li><span> Wine pairing: </span>Lambrusco Dolce</li> <li><span> Fun fact: </span>Must be produced in Derbyshire, Leicestershire or Nottinghamshire.</li> </ul> </div>";
        $input = [
            ['id'=>"1", "name"=>"Stilton", "countryoforigin"=>"England", "winepairing"=>"Lambrusco Dolce", "funfact"=>"Must be produced in Derbyshire, Leicestershire or Nottinghamshire.", "imgurl"=>"images/stilton.jpeg"]
        ];
        $case = displayAllCheeses($input);

        $this->assertEquals($expected, $case);
    }

    //testing failure of this function by amending the keys to ones that don't exist
    public function testFailureDisplayAllCheeses()
    {
        $expected = "The array being input is not valid";
        $input = [
            ['dodgeykey'=>"1", "name"=>"Stilton", "wrongkey"=>"England", "winepairing"=>"Lambrusco Dolce", "stupidkey"=>"Must be produced in Derbyshire, Leicestershire or Nottinghamshire.", "smellykey"=>"images/stilton.jpeg"]
        ];;
        $case = displayAllCheeses($input);
        $this->assertEquals($expected, $case);
    }

    //malformed test inputting an integer instead of array (expected)
    public function testDisplayAllCheesesMalformedInputInt()
    {
        $this->expectException(TypeError::class);
        $input = 7;
        $case = displayAllCheeses($input);
    }

    //malformed test inputting a string instead of array (expected)
    public function testDisplayAllCheesesMalformedInputString()
    {
        $this->expectException(TypeError::class);
        $input = "string";
        $case = displayAllCheeses($input);
    }
}





