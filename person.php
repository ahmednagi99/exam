<?php

interface Person
{
    public function great();
}

class English implements Person
{
    public function great()
    {
        echo "hello <br>";
    }
}
class French implements Person
{
    public function great()
    {
        echo "Accueillir <br>";
    }
}
class German implements Person
{
    public function great()
    {
        echo "hallo <br>";
    }
}

$english=new English();
$english->great();
$french=new French();
$french->great();
$german=new German();
$german->great();