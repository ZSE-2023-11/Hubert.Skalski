<?php
function DzielenieTekstow($wyrazenieZl)
{
    $wyr = explode(',',$wyrazenieZl);
    echo strtoupper($wyr[0]);
    for($i = 1; $i < count($wyr)-1; $i++)
    {
        $wyrB = $wyr[$i];
        if(strlen($wyrB) > 7)
        {
            echo "<br><strong>".strtolower($wyrB)."</strong>";
        }
        else
        {
            echo "</br>$wyr";
        }
    }
    echo "</br>";
    echo strtoupper($wyr[count($wyr)-1]);
}
//mamy pododbie z Roladnem bo razem to robiliśmy jakby sie pan pytał
DzielenieTekstow("pralka,zmywarka,glebogryzarka,kosiarka,kuchenka,lodowka");
?>